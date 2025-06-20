<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\CountController;
use App\Http\Controllers\NilaiController;






//import java.io;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//System.out.println("Hello World");

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return " <h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

 //<!-- Portofolio Tugas PWEB -->

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('specificity', function () {
	return view('specificity');
});

Route::get('Center', function () {
	return view('Center');
});

Route::get('bootstrap1', function () {
	return view('bootstrap1');
});

Route::get('itstv', function () {
	return view('fix');
});

Route::get('linktree', function () {
	return view('humblezing');
});

Route::get('js1', function () {
	return view('js1');
});

Route::get('validasi1', function () {
	return view('validasi1');
});

Route::get('remake', function () {
	return view('danantara');
});

Route::get('ujiantengahsemester', function () {
	return view('ets');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog --------------------------------------------------------------------------
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// route pegawaiDB --------------------------------------------------------------------------
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']); //jika form dikirim, route ini akan dijalankan
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

// TUGAS CRUD route cat --------------------------------------------------------------------------

//Create Cat
Route::get('/tugascrud/tambah', [CatController::class, 'create']);
Route::post('/tugascrud/store', [CatController::class, 'store']);

//Read Cat
Route::get('/tugascrud', [CatController::class, 'read']);

//Update Cat
Route::get('/tugascrud/edit/{id}', [CatController::class, 'edit']);
Route::post('/tugascrud/update', [CatController::class, 'update']);

//Delete Cat
Route::post('/tugascrud/delete/{id}', [CatController::class, 'delete']);

//Search Cat
Route::get('/tugascrud/cari', [CatController::class, 'cari']);

// LATIHAN 1 - Karyawan CRUD NRP Ganjil --------------------------------------------------------------------------

//Create Karyawan
Route::get('/latihan1/tambah', [KaryawanController::class, 'create']);
Route::post('/latihan1/store', [KaryawanController::class, 'store']);

//Read Karyawan
Route::get('/latihan1', [KaryawanController::class, 'read']);

//Update Karyawan
Route::get('/latihan1/edit/{kodepegawai}', [KaryawanController::class, 'edit']);
Route::post('/latihan1/update', [KaryawanController::class, 'update']);

//Delete Karyawan
Route::post('/latihan1/delete/{kodepegawai}', [KaryawanController::class, 'delete']);

// LATIHAN 2 - Karyawan CRUD NRP Genap --------------------------------------------------------------------------

//Create Karyawan
Route::get('/latihan2/tambah', [KaryawanController::class, 'create']);
Route::post('/latihan2/store', [KaryawanController::class, 'store']);

//Read Karyawan
Route::get('/latihan2', [KaryawanController::class, 'read']);

//Update Karyawan
Route::get('/latihan2/edit/{kodepegawai}', [KaryawanController::class, 'edit']);
Route::post('/latihan2/update', [KaryawanController::class, 'update']);

//Delete Karyawan
Route::post('/latihan2/delete/{kodepegawai}', [KaryawanController::class, 'delete']);

// LATIHAN 3 - Karyawan CRUD Mahasiswa Perempuan --------------------------------------------------------------------------

Route::get('/latihan3', [CountController::class, 'index']);

// EAS - KODE SOAL NILAI --------------------------------------------------------------------------

//View Nilai
Route::get('/eas', [NilaiController::class, 'index']);

//Tambah Nilai
Route::get('/eas/tambah', [NilaiController::class, 'tambah']);
Route::post('/eas/store', [NilaiController::class, 'store']);
