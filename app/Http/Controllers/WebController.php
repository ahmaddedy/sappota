<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Faq;
use App\Models\Pemohon;
use App\Models\Permohonan;
use File;
use Session;

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
        
    }

    public function faq() {
        $faq = Faq::where('status', true)->get();
        return view('web.faq', compact('faq'));
    }

}
