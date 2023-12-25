<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReferensiPohon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class ReferensiPohonController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Admin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = ReferensiPohon::all();
        return view('referensi-pohon.index', compact('data'));
    }

    public function add() {
        return view('referensi-pohon.add');
    }

    public function actionAdd(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'jenis_pohon' => 'required',
            'nama_latin' => 'required',
            'gambar' => 'required|file|max:10240|mimes:jpg,jpeg,png',
        ]);

        // proses upload gambar referensi-pohon ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];


        $string = str_shuffle($pin);
        $path = $request->file('gambar')->store('public/gambar_referensi-pohon');
        $file = $request->file('gambar');

        ReferensiPohon::create([
            'jenis_pohon' => $request->jenis_pohon,
            'keterangan' => $request->keterangan,
            'nama_latin' => $request->nama_latin,
            'gambar' => $path,
        ]);

        return redirect(route('master-referensi-pohon'))->with(['success' => 'Data referensi pohon berhasil ditambahkan']);
    }

 /*   public function edit($id) {
        $data = referensi-pohon::where('id', $id)->firstOrFail();
        return view('referensi-pohon.edit', compact('data'));
    }

    public function actionEdit(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        if (isset($_POST['status'])) 
            $status = 1;
        else 
            $status = 0;

        referensi-pohon::where('id', $request->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,
                'status' => $status,
            ]);

        return redirect(route('master-referensi-pohon'))->with(['success' => 'Data referensi-pohon berhasil diubah']);
    }
*/
    public function hapus($id) {
        $data = ReferensiPohon::where('id', $id)->firstOrFail();
        unlink('storage/'.str_replace('public/', '', $data->gambar));
        ReferensiPohon::where('id', $id)->delete();
        return redirect(route('master-referensi-pohon'))->with(['success' => 'Data referensi-pohon berhasil dihapus']);
    }
}
