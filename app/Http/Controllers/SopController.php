<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sop;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SopController extends Controller
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
        $sop = Sop::all();
        return view('sop.index', compact('sop'));
    }

    public function add() {
        return view('sop.add');
    }

    public function actionAdd(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'judul' => 'required',
            'gambar' => 'required|file|max:10240|mimes:jpg,jpeg,png',
        ]);

        // proses upload gambar sop ke server
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';

        // generate a pin based on 2 * 7 digits + a random character
        $pin = mt_rand(1000000, 9999999)
            . mt_rand(1000000, 9999999)
            . $characters[rand(0, strlen($characters) - 1)];


        $string = str_shuffle($pin);
        $path = $request->file('gambar')->store('public/gambar_sop');
        $file = $request->file('gambar');

        Sop::create([
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'gambar' => $path,
        ]);

        return redirect(route('master-sop'))->with(['success' => 'Data sop berhasil ditambahkan']);
    }

 /*   public function edit($id) {
        $data = sop::where('id', $id)->firstOrFail();
        return view('sop.edit', compact('data'));
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

        sop::where('id', $request->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,
                'status' => $status,
            ]);

        return redirect(route('master-sop'))->with(['success' => 'Data sop berhasil diubah']);
    }
*/
    public function hapus($id) {
        $sop = Sop::where('id', $id)->firstOrFail();
        unlink('storage/'.str_replace('public/', '', $sop->gambar));
        Sop::where('id', $id)->delete();
        return redirect(route('master-sop'))->with(['success' => 'Data sop berhasil dihapus']);
    }
}
