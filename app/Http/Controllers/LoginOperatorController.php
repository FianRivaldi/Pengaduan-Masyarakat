<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Petugas;
use Illuminate\Support\Facades\Auth;


class LoginOperatorController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        $user = Auth::guard('petugas')->attempt($credentials);
        if (!$user) {
            return redirect()->back();
        }
        if (Auth::guard('petugas')->user()->level == 'admin') {
            return redirect()->route('page.admin')->with('message', 'Kamu Berhasil Login');
        }if (Auth::guard('petugas')->user()->level == 'petugas') {
            return redirect()->route('page.petugas')->with('message', 'Kamu Berhasil Login');
        }
        return redirect()->back()->with('message', 'Tidak Memiliki Akses');
    }

    public function register() {
        return view('admin.auth.register');
    }

    public function regist(Request $request) {
        Petugas::create ([
            'nama_petugas' => request('nama_petugas'), 'required',
            'username' => request('username'), 'required',
            'password' => Hash::make($request->password), 'requied',
            'jenis_kelamin' => request('jenis_kelamin'), 'required',
            'alamat' => request('alamat'), 'required',
            'telp' => request('telp'), 'required',
        ]);
        return redirect()->back()->with('success', 'Berhasil Regist');
        
    }

    public function logout(Request $request)
    {
        Auth::guard('petugas')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('login.operator')->with('message', 'Kamu berhasil Logout');
    }
}
