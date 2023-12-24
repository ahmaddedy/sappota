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

class SuratIzinController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Admin|Verifikator|Kepala Dinas']);
    }

	public function json() {
		$data = DB::select("select si.*, p.id as id_permohonan 
			from surat_izin si 
			join permohonan p on p.id = si.id_permohonan 
			order by si.id desc");
        return response()->json([
            'data' => $data
        ]);
	}

	public function index() {
		return view('surat-izin.index');
	}


}