<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CatController extends Controller
{
    // Create
    public function create()
    {
        // memanggil view tambah
        return view('cat/tambah');
    }

    public function store(Request $request)
    {
        // insert data ke table cat
        DB::table('cat')->insert([
            'merkcat' => $request->merk,
            'hargacat' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);
        // alihkan halaman ke halaman cat
        return redirect('/tugascrud');
    }

    // Read
    public function read()
    {
        // ambil data dari table cat
        $cat = DB::table('cat')->paginate(10);

        return view('cat/crud', ['cat' => $cat]);
    }

    // Update
    public function edit($ID)
    {
        // mengambil data cat berdasarkan id yang dipilih
        $cat = DB::table('cat')->where('ID', $ID)->get();


        return view('cat/edit', ['cat' => $cat]);
    }

    public function update(Request $request)
    {
        DB::table('cat')->where('ID', $request->id)->update([
            'merkcat' => $request->merk,
            'hargacat' => $request->harga,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tugascrud');
    }

    // Delete
    public function delete($id)
    {
        // menghapus data cat berdasarkan id yang dipilih
        DB::table('cat')->where('ID', $id)->delete();

        return redirect('/tugascrud');
    }

    // Search
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        $cat = DB::table('cat')
            ->where('merkcat', 'like', "%" . $cari . "%")
            ->paginate();

        return view('cat/crud', ['cat' => $cat]);
    }
}
