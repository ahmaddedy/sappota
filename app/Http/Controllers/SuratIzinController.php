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
use PDF;

class SuratIzinController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Admin|Verifikator|Kepala Dinas']);
    }

	public function index() {
		$surat = SuratIzin::orderByRaw('id DESC')->get();
		return view('surat-izin.index', compact('surat'));
	}

	public function generatePdf($id) {
		$data = SuratIzin::where('id', $id)->firstOrFail();
		$pdf = PDF::loadview('surat-izin.pdf.surat-izin', compact('data'))->setPaper('A4','potrait');
        return $pdf->stream('surat_izin.pdf', array("Attachment" => false));
	}

	public function formUpload($id) {
		$data = SuratIzin::where('id', $id)->firstOrFail();
		return view('surat-izin.ajax.upload', compact('data'));
	}

	public function actionUpload(Request $request) {
		// validasi inputan
        $validatedData = $request->validate([
            'path_file' => 'required|file|max:10240|mimes:pdf',
        ]);

        // proses upload file surat izin ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];


        $string = str_shuffle($pin);
        $path = $request->file('path_file')->store('public/surat_izin');
        $file = $request->file('path_file');

        SuratIzin::where('id', $request->id)
        	->update([
        		'path_file' => $path,
        	]);

        return redirect(route('surat-izin'))->with(['success' => 'File surat izin berhasil diupload']);
	}

}