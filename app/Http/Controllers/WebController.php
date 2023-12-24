<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Faq;
use App\Models\Pemohon;
use App\Models\Permohonan;
use App\Models\HistoryPermohonan;
use App\Models\MstKecamatan;
use App\Models\MstKelurahan;
use App\Models\MstPelayanan;
use File;
use Session;
use PDF;

class WebController extends Controller
{

    public function index() {
        return view('web.index');
    }

    public function cekNik() {
        $data = Pemohon::where('nik', $_GET['nik'])->first();
        return response()->json([
            'data' => $data
        ]);
    }

    public function addDataPemohon(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'telp' => 'required',
            'email' => 'required|email',
            'alamat' => 'required|max:255',
            'pekerjaan' => 'required',
            'file_ktp' => 'required|file|max:10240|mimes:pdf,png,jpg,jpeg',
        ]);

        // proses upload scan ktp ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];


        $string = str_shuffle($pin);
        $path = $request->file('file_ktp')->store('public/scan_ktp');
        $file = $request->file('file_ktp');

        // generate token untuk cek progres surat
        $token = generateToken($request->nik);

        $getPemohon = Pemohon::where('nik', $request->nik)->first();

        if (!$getPemohon) {
            Pemohon::create([
                'nik' => $request->nik,
                'nama' => $request->nama,
                'telp' => $request->telp,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'pekerjaan' => $request->pekerjaan,
                'file_ktp' => $path
            ]);
        }
        else {
            $pemohon = Pemohon::where('nik', $request->nik)->first();
            unlink('storage/'.str_replace('public/', '', $pemohon->file_ktp));
            Pemohon::where('nik', $request->nik)
                ->update([
                    'nama' => $request->nama,
                    'telp' => $request->telp,
                    'email' => $request->email,
                    'alamat' => $request->alamat,
                    'pekerjaan' => $request->pekerjaan,
                    'file_ktp' => $path
                ]);
        }
        Session::put('nik', $request->nik);

        return redirect(route('riwayat-permohonan'))->with(['success' => 'Data pemohon berhasil ditambahkan']);

    }

    public function riwayatPermohonan() {
        $data = Permohonan::where('nik', Session::get('nik'))->orderByRaw('id DESC')->get();
        return view('web.riwayat-permohonan', compact('data'));
    }

    public function buatPermohonan() {
        $pelayanan = MstPelayanan::all();
        return view('web.buat-permohonan', compact('pelayanan'));
    }

    public function addDataPermohonan(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'jenis_pelayanan' => 'required',
            'alasan' => 'required',
            'jenis_pemohon' => 'required',
            'tgl_permohonan' => 'required',
            'no_permohonan' => 'required',
            'letak_pohon' => 'required',
            'gambar_letak_pohon_site_plan' => 'file|max:10240|mimes:pdf',
            'scan_imb' => 'file|max:10240|mimes:pdf',
            'scan_izin_usaha' => 'file|max:10240|mimes:pdf',
            'scan_izin_penyambungan_jalan_masuk' => 'file|max:10240|mimes:pdf',
        ]);

        // proses upload scan file ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];


        // upload site plan
        $string_site_plan = str_shuffle($pin);
        $path_site_plan = $request->file('gambar_letak_pohon_site_plan')->store('public/site_plan');
        $file_site_plan = $request->file('gambar_letak_pohon_site_plan');

        // upload imb
        $string_scan_imb = str_shuffle($pin);
        $path_scan_imb = $request->file('scan_imb')->store('public/imb');
        $file_scan_imb = $request->file('scan_imb');

        // upload izin usaha
        $string_izin_usaha = str_shuffle($pin);
        $path_izin_usaha = $request->file('scan_izin_usaha')->store('public/izin_usaha');
        $file_izin_usaha = $request->file('scan_izin_usaha');

        // upload izin usaha
        $string_izin_jalan_masuk = str_shuffle($pin);
        $path_izin_jalan_masuk = $request->file('scan_izin_penyambungan_jalan_masuk')->store('public/izin_penyambungan_jalan_masuk');
        $file_izin_jalan_masuk = $request->file('scan_izin_penyambungan_jalan_masuk');

        // generate token
        $token = generateToken(Session::get('nik'));

        Permohonan::create([
            'nik' => Session::get('nik'),
            'jenis_pelayanan' => $request->jenis_pelayanan,
            'alasan' => $request->alasan,
            'jenis_pemohon' => $request->jenis_pemohon,
            'tgl_permohonan' => inputTipeDate($request->tgl_permohonan),
            'no_permohonan' => $request->no_permohonan,
            'letak_pohon' => $request->letak_pohon,
            'gambar_letak_pohon_site_plan' => $path_site_plan,
            'scan_imb' => $path_scan_imb,
            'scan_izin_usaha' => $path_izin_usaha,
            'scan_izin_penyambungan_jalan_masuk' => $path_izin_jalan_masuk,
            'token' => $token,
        ]);

        $permohonan = Permohonan::where('token', $token)
            ->where('nik', Session::get('nik'))
            ->first();

        HistoryPermohonan::create([
            'id_permohonan' => $permohonan->id,
            'status_pengajuan' => $permohonan->status_pengajuan,
            'posisi' => 'Pemohon',
        ]);

        return redirect(route('riwayat-permohonan'))->with(['success' => 'Data permohonan berhasil ditambahkan']);
    }

    public function detailPermohonan($id) {
        $data = Permohonan::where('id', $id)->firstOrFail();
        return view('web.ajax.detail-permohonan', compact('data'));
    }

    public function inputDataPohon($id) {
        $kec = MstKecamatan::all();
        $data = Permohonan::where('id', $id)->firstOrFail();
        return view('web.input-data-pohon', compact('kec', 'data'));
    }

    public function pilihKel($id) {
        $kel = MstKelurahan::where('kode_kecamatan', $id)->get();
        return view('web.ajax.pilih-kel', compact('kel'));
    }

    public function addDataPohon(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'id' => 'required',
            'alamat_pohon' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'nama_pohon' => 'required',
            'jumlah_pohon' => 'required|numeric',
            'jenis_pohon' => 'required',
            'gambar_pohon' => 'required|file|max:10240|mimes:pdf',
        ]);

        // proses upload gambar pohon ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];


        $string = str_shuffle($pin);
        $path = $request->file('gambar_pohon')->store('public/gambar_pohon');
        $file = $request->file('gambar_pohon');

        Permohonan::where('id', $request->id)
            ->update([
                'id' => $request->id,
                'alamat_pohon' => $request->alamat_pohon,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'nama_pohon' => $request->nama_pohon,
                'jumlah_pohon' => $request->jumlah_pohon,
                'jenis_pohon' => $request->jenis_pohon,
                'diameter_pohon' => $request->diameter_pohon,
                'jenis_pohon_pengganti' => $request->jenis_pohon_pengganti,
                'jumlah_pohon_pengganti' => $request->jumlah_pohon_pengganti,
                'lokasi_pohon_pengganti' => $request->lokasi_pohon_pengganti,
                'gambar_pohon' => $path,
            ]);
        return redirect(route('riwayat-permohonan'))->with(['success' => 'Data pohon berhasil ditambahkan ke dalam permohonan']);
    }

    public function ajukanPermohonan($id) {
        $data = Permohonan::where('id', $id)->firstOrFail();
        return view('web.ajax.ajukan-permohonan', compact('data'));
    }

    public function downloadPermohonan($id) {
        $data = Permohonan::where('id', $id)->firstOrFail();
        $pdf = PDF::loadview('web.pdf.surat-permohonan', compact('data'))->setPaper('A4','potrait');
        return $pdf->stream('surat_permohonan.pdf', array("Attachment" => false));
    }

    public function downloadPernyataan($id) {
        $data = Permohonan::where('id', $id)->firstOrFail();
        $pdf = PDF::loadview('web.pdf.surat-pernyataan', compact('data'))->setPaper('A4','potrait');
        return $pdf->stream('surat_pernyataan.pdf', array("Attachment" => false));
    }

    public function submitPermohonan(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'surat_permohonan' => 'required|file|max:10240|mimes:pdf',
            'surat_pernyataan' => 'file|max:10240|mimes:pdf',
        ]);

        // proses upload gambar pohon ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];

        // surat permohonan
        $string_permohonan = str_shuffle($pin);
        $path_permohonan = $request->file('surat_permohonan')->store('public/surat_permohonan');
        $file_permohonan = $request->file('surat_permohonan');

        // surat pernyataan
        $string_pernyataan = str_shuffle($pin);
        $path_pernyataan = $request->file('surat_pernyataan')->store('public/surat_pernyataan');
        $file_pernyataan = $request->file('surat_pernyataan');

        Permohonan::where('id', $request->id)
            ->update([
                'surat_permohonan' => $path_permohonan,
                'surat_pernyataan' => $path_pernyataan,
                'status_pengajuan' => '2'
            ]);

        HistoryPermohonan::create([
            'id_permohonan' => $request->id,
            'status_pengajuan' => '2',
            'posisi' => 'Verifikator',
        ]);

        return redirect(route('riwayat-permohonan'))->with(['success' => 'Permohonan telah diajukan ke Dinas Lingkungan Hidup Kota Makassar untuk diverifikasi']);
    }

    public function faq() {
        $faq = Faq::where('status', true)->get();
        return view('web.faq', compact('faq'));
    }

}
