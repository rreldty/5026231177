<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class CountController extends Controller
{
    public function index()
    {
        $counter = DB::table('pagecounter')->where('id', 1)->first();
        $newCount = $counter->Jumlah + 1;
        DB::table('pagecounter')->where('id', 1)->update(['Jumlah' => $newCount]);
        return view('latihan3/index', ['jumlah' => $newCount]);
    }
}
