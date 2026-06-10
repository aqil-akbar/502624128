<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->paginate(10);
        return view('belanja.index', compact('keranjang'));
    }

    public function beli()
    {
        return view('belanja.beli');
    }


    public function simpan(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|numeric',
            'Jumlah' => 'required|numeric',
            'Harga' => 'required|numeric',
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect()->route('belanja.index');
    }

    public function batal($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();
        return redirect()->route('belanja.index');
    }
}
