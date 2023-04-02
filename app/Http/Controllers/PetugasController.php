<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class PetugasController extends Controller
{
    public function admin() {
        return view('admin.layout.show');
    }

    public function Petugas() {
        return view('admin.petugas.layout.index');
    }

    // public function pengaduan() {
    //     $hs_pengaduan = Pengaduan::get();
    //     return view('admin.layout.show', compact('hs_pengaduan'));
    // }
}
