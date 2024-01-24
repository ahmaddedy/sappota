<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permohonan;
use App\Models\HistoryPermohonan;
use App\Models\SuratIzin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;
use Session;

class PengajuanController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Admin|Verifikator']);
    }

	public function json() {
		$data = DB::select("select p.id, p.alasan, mp.jenis_pelayanan, p.tgl_permohonan, p.jenis_pemohon, p.letak_pohon, ms.nama_status, p.status_pengajuan  
			from permohonan p 
			join mst_pelayanan mp on mp.id = p.jenis_pelayanan 
			join mst_status ms on ms.id = p.status_pengajuan 
			where p.status_pengajuan > 1
			order by p.id desc");
        return response()->json([
            'data' => $data
        ]);
	}

	public function index() {
		return view('pengajuan.index');
	}

	public function verif($id) {
		$data = Permohonan::where('id', $id)->firstOrFail();
		return view('pengajuan.verif', compact('data'));
	}

	public function actionVerif(Request $request) {
		Permohonan::where('id', $request->id)
			->update([
				'status_pengajuan' => $request->status_pengajuan,
				'keterangan_verifikator' => $request->catatan
			]);

		HistoryPermohonan::create([
			'id_permohonan' => $request->id,
			'status_pengajuan' => $request->status_pengajuan,
			'catatan' => $request->catatan,
			'posisi' => 'Verifikator',
			'verifikator' => auth()->user()->id
		]);

		return redirect(route('pengajuan'))->with(['success' => 'Pengajuan berhasil diverifikasi']);
	}

	public function uploadTelaah($id) {
		$data = Permohonan::where('id', $id)->firstOrFail();
		if ($data->status_pengajuan != 5) {
			return view('pengajuan.ajax.tidak-disetujui');
		}
		else {
			return view('pengajuan.ajax.upload-telaah', compact('data'));
		}
	}

	public function buatSuratIzin($id) {
		$data = Permohonan::where('id', $id)->firstOrFail();
		if ($data->status_pengajuan != 5) {
			return view('pengajuan.ajax.tidak-disetujui');
		}
		else {
			return view('pengajuan.ajax.buat-surat-izin', compact('data'));
		}
	}

	public function submitSuratIzin(Request $request) {
		SuratIzin::create([
			'id_permohonan' => $request->id,
			'no_surat' => $request->no_surat,
			'tgl_surat' => inputTipeDate($request->tgl_surat),
		]);

		HistoryPermohonan::create([
			'id_permohonan' => $request->id,
			'status_pengajuan' => 8,
			'posisi' => 'Verifikator',
			'verifikator' => auth()->user()->id
		]);

		Permohonan::where('id', $request->id)
			->update([
				'status_pengajuan' => 8
			]);

		return redirect(route('pengajuan'))->with(['success' => 'Surat izin kepala dinas berhasil ditambahkan']);
	}

}