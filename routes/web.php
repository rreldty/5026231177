<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;


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

Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
