<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::with('roles')->get();
        return view('user.index', compact('user'));
    }

    /*public function json() {
        $data = Faq::all();
        return response()->json([
            'data' => $data
        ]);
    }*/

    public function add() {
        $role = Role::all();
        return view('user.add', compact('role'));
    }

    public function actionAdd(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'gol' => $request->gol,
            'nip' => $request->nip,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role);

        return redirect(route('master-user'))->with(['success' => 'Data User berhasil ditambahkan']);
    }

    public function edit($id) {
        $user = User::where('id', $id)->firstOrFail();
        $role = Role::all();
        $userRole = $user->roles->pluck('name','name')->all();
        foreach ($userRole as $rolesss => $value) {
            return view('user.edit', compact('user', 'role', 'value'));
        }
    }

    public function actionEdit(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ]);

        $user = User::where('id', $request->id)->firstOrFail();

        User::where('id', $request->id)
            ->update([
                'nama' => $request->nama,
                'username' => $request->username,
                'jabatan' => $request->jabatan,
                'pangkat' => $request->pangkat,
                'gol' => $request->gol,
                'nip' => $request->nip,
            ]);

        $user->syncRoles($request->role);

        return redirect(route('master-user'))->with(['success' => 'Data User berhasil diubah']);
    }

    public function hapus($id) {
        User::where('id', $id)->delete();
        return redirect(route('master-user'))->with(['success' => 'Data User berhasil dihapus']);
    }

    public function reset($id) {
        $user = User::where('id', $id)->firstOrFail();
        return view('user.reset', compact('user'));    
    }

    public function actionReset(Request $request) {
        // validasi inputan
        $validatedData = $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        User::where('id', $request->id)
            ->update([
                'password' => Hash::make($request->password),
            ]);

        if(auth()->user()->hasRole('Admin'))
            return redirect(route('master-user'))->with(['success' => 'Data User berhasil reset password']);
        else 
            return redirect(route('home'));
    }
}
