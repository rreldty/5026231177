<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NilaiController extends Controller
{

     // Read
    public function index()
    {
        // ambil data dari table nilai
        $nilai = DB::table('nilai')->get();

        return view('/eas/index', ['nilai' => $nilai]);
    }

  // Tambah
    public function tambah()
    {
        // memanggil view tambah
        return view('/eas/tambah');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table nilai
        DB::table('nilai')->insert([
            'id' => $request->id,
            'nomorinduksiswa' => $request->nomorinduksiswa,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/eas');
    }
}
