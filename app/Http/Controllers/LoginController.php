<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Masyarakat;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class LoginController extends Controller
{
    public function index() {
        return view('masyarakat.login');
    }

    public function store(Request $request) {
        // if(Auth::Guard('masyarakat')->attempt($request->only('username', 'password'))) {
        //     return redirect()->route('pengaduan.masyarakat');
        // }
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);
        $user = Auth::guard('masyarakat')->attempt($credentials);
        if (!$user) {
            return redirect()->back();
        }
        if (Auth::guard('masyarakat')->user()) {
            return redirect()->route('pengaduan.masyarakat')->with('success', 'Anda Berhasil Login');

        // $credentials = $request->validate(
        //     [
        //         'username' => 'required',
        //         'password' => 'required'
        //     ]
        //     );

        // if (Auth::guard('masyarakat')->attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect('pengaduan')->withSuccess('Signed in');;

        // }
        // return back()->withErrors([
        //     'username' => 'nama tidak terdaftar'
        // ]);

    }
}

    public function register() {
        return view('masyarakat.register');
    }

    public function regist(Request $request) {
        Masyarakat::create ([
            'nik' => request('nik'), 'required',
            'nama' => request('nama'), 'required',
            'username' => request('username'), 'requied',
            'password' => Hash::make($request->password),'required',
            'telp' => request('telp'), 'required',
            'jenis_kelamin' => request('jenis_kelamin'), 'required',
            'alamat' => request('alamat'), 'required'
        ]);
        if(Auth::guard('masyarakat')->check()){
            return view('masyarakat.index');
        }
            return redirect()->route('page.login')->with('success', 'Anda Berhasil Regist  ');
            

    }


    // public function create(array $data_regist) {
    //     return Masyarakat::create([
    //         'nik' => 'required',
    //         'nama' => 'required',
    //         'username' => 'required',
    //         'password' => Hash::make($data_regist(['password'])),
    //         'telp' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'alamat' => 'required'
    // ]);
    //      if(Auth::guard('masyarakat')->check()){
    //          return view('masyarakat.index');
    //      }
    //      return redirect('login.masyarakat')->withSuccess('are not allowed to access');


    // }


    public function logout(Request $request)
    {
        Auth::guard('masyarakat')->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect()->route('page.login');
    }
}
