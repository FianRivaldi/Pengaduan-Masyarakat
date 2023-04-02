<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LoginOperatorController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use App\Models\Pengaduan;
use App\Models\Petugas;
use App\Models\Tanggapan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('pengaduan/page', [PengaduanController::class, 'index'])->name('pengaduan.masyarakat');
Route::post('pengaduan', [PengaduanController::class, 'store'])->name('page.pengaduan');
Route::get('login/page', [LoginController::class, 'index'])->name('login.masyarakat');
Route::post('register', [LoginController::class, 'regist'])->name('regist.masyarakat');
Route::get('register/page', [LoginController::class, 'register'])->name('page.register');
Route::post('login/o', [LoginController::class, 'store'])->name('data.login');
Route::get('login', [LoginController::class, 'index'])->name('datalogin');
Route::get('login/page', [LoginController::class, 'index'])->name('page.login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('pengaduan/{id_pengaduan}', [PengaduanController::class, 'pengaduan'])->name('pengaduan-list');
Route::get('riwayat/pengaduan', [PengaduanController::class, 'histori'])->name('histori.pengaduan');   
// Route::get('show/admin/{id_pengaduan}', [PengaduanController::class, 'show']);
// Route::get('tanggapan', [TanggapanController::class, 'index'])->name('tanggapan');


//admin petugas
Route::get('login/operator', [LoginOperatorController::class, 'index'])->name('login.operator');
Route::post('login/p', [LoginOperatorController::class, 'login'])->name('login');
Route::get('register/petugas', [LoginOperatorController::class, 'register'])->name('register.petugas');
Route::post('regist', [LoginOperatorController::class, 'regist'])->name('page.registPetugas');
Route::get('admin', [PetugasController::class, 'admin'])->name('page.admin');
// Route::get('delete/{id_pengaduan}', [PengaduanController::class, 'delete'])->name('delete');
Route::get('petugas', [PetugasController::class, 'petugas'])->name('page.petugas');
Route::get('logout/operator', [LoginController::class, 'logout'])->name('logout.operator');
// Route::post('tanggapan', [TanggapanController::class, 'store'])->name('tanggapi');
// Route::get('tanggapan/page', [TanggapanController::class, 'index'])->name('page.tanggapan');
// Route::get('historyTanggapan', [TanggapanController::class, 'tanggapan'])->name('tanggapan.history');

Route::get('pdf/cetak', [PengaduanController::class, 'generatepdf'])->name('cetakpdf');

//tanggapan
Route::get('tanggapan', [TanggapanController::class,'index'])->name('tanggapan');
Route::get('page/tanggapan', [TanggapanController::class, 'tanggapanindex'])->name('page.tanggapan');
Route::get('tanggapan/create/{id_pengaduan}', [TanggapanController::class,'create'])->name('tanggapan.create');
Route::post('tanggapan/store/{id_pengaduan}', [TanggapanController::class,'store'])->name('tanggapan.store');
Route::get('tanggapan/show/{id_pengaduan}', [TanggapanController::class,'show'])->name('tanggapan.show');
Route::get('pengaduan/destroy/{id_pengaduan}', [HomeController::class,'destroy'])->name('pengaduan.destroy');
Route::get('pengaduan/status/{id_pengaduan}', [TanggapanController::class,'update'])->name('pengaduan.status');

