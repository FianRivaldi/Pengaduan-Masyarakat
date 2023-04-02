<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;

class TanggapanController extends Controller
{
    public function index() {
        return view('admin.tanggapan');
    }

    public function tanggapanindex() {
        return view('admin.tanggapan.create');
    }

    public function store(Request $request) {
        Tanggapan::create ([
            'nama_petugas' => request('nama_petugas'), 'required',
            'username' => request('username'), 'required',
            'password' => Hash::make($request->password), 'requied',
            'telp' => request('telp'), 'required',
        
        ]);
        return redirect()->back()->with('sucsess');
    }
    public function tanggapan() {
        $data = Tanggapan::get();
        return view('admin.history_tanggapan', compact('data'));
    }
    public function pengaduan() {
        $hs_pengaduan = Pengaduan::get();
        return view('admin.layout.show', compact('hs_pengaduan'));
    }
}
