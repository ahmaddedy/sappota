<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class FaqController extends Controller
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
        return view('faq.index');
    }

    public function json() {
        $data = Faq::all();
        return response()->json([
            'data' => $data
        ]);
    }

    public function add() {
        return view('faq.add');
    }

    public function actionAdd(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        Faq::create([
            'pertanyaan' => $request->pertanyaan,
            'jawaban' => $request->jawaban,
        ]);

        return redirect(route('master-faq'))->with(['success' => 'Data FAQ berhasil ditambahkan']);
    }

    public function edit($id) {
        $data = Faq::where('id', $id)->firstOrFail();
        return view('faq.edit', compact('data'));
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

        Faq::where('id', $request->id)
            ->update([
                'pertanyaan' => $request->pertanyaan,
                'jawaban' => $request->jawaban,
                'status' => $status,
            ]);

        return redirect(route('master-faq'))->with(['success' => 'Data FAQ berhasil diubah']);
    }

    public function hapus($id) {
        Faq::where('id', $id)->delete();
        return redirect(route('master-faq'))->with(['success' => 'Data FAQ berhasil dihapus']);
    }
}
