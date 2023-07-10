<?php

use App\Http\Controllers\AbsensiMingguanMusikController;
use App\Http\Controllers\AksesController;
use App\Http\Controllers\AnggotaMusikController;
use App\Http\Controllers\AnggotaOrmawaController;
use App\Http\Controllers\CetakController;
use App\Http\Controllers\DataMhsController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KemahasiswaanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OrmawaController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\ProdiController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Akses Admin
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'admin'])->name('Admin.home')->middleware('is.admin');
Route::resource('Akses', AksesController::class)->middleware('is.admin');
Route::resource('Pengguna', PenggunaController::class)->middleware('is.admin');
Route::resource('Ormawa', OrmawaController::class)->middleware('is.admin');
Route::resource('DataMahasiswa', DataMhsController::class)->middleware('is.admin');
Route::resource('ProgramStudi', ProdiController::class)->middleware('is.admin');
Route::resource('DataDosen', DosenController::class)->middleware('is.admin');
Route::resource('AnggotaOrmawa', AnggotaOrmawaController::class)->middleware('is.admin');

// Kemahasiswaan
Route::get('/kemahasiswaan/home', [App\Http\Controllers\HomeController::class, 'kemahasiswaan'])->name('Kemahasiswaan.home')->middleware('is.kemahasiswaan');
Route::resource('/Kemahasiswaan-Absensi-UKM', KemahasiswaanController::class)->middleware('is.kemahasiswaan');

// Mahasiswa
Route::get('/mahasiswa/home', [App\Http\Controllers\HomeController::class, 'mahasiswa'])->name('Mahasiswa.home')->middleware('is.mahasiswa');
Route::resource('/Absensi-Mahasiswa', MahasiswaController::class)->middleware('is.mahasiswa');
Route::resource('/cetak absen', CetakController::class)->middleware('is.mahasiswa');

// UKM Musik
Route::get('/UKM-Musik/home', [App\Http\Controllers\HomeController::class, 'musik'])->name('SkretariatMusik.home')->middleware('is.skretariat');
Route::resource('/AnggotaUKMMusik', AnggotaMusikController::class)->middleware('is.skretariat');
Route::resource('/AbsensiUKM-Musik', AbsensiMingguanMusikController::class)->middleware('is.skretariat');
Route::resource('/Kegiatan-UKM-Musik', KegiatanController::class)->middleware('is.skretariat');
