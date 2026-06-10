<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{
    // method untuk menampilkan semua data ikan
    public function index()
    {
        // mengambil data dari table ikan dengan pagination
        $ikan = DB::table('ikan')->paginate(10);

        // mengirim data ikan ke view index
        return view('ikan.index', ['ikan' => $ikan]);
    }

    // method untuk menampilkan view form tambah ikan
    public function tambah()
    {
        // memanggil view tambah
        return view('ikan.tambah');
    }

    // method untuk insert data ke table ikan
    public function store(Request $request)
    {
        // insert data ke table ikan
        DB::table('ikan')->insert([
            'namaikan'   => $request->namaikan,
            'jumlahikan' => $request->jumlahikan,
            'tersedia'   => $request->tersedia,
        ]);

        // alihkan halaman ke halaman ikan
        return redirect('/ikan');
    }

    // method untuk edit data ikan
    public function edit($id)
    {
        // mengambil data ikan berdasarkan id yang dipilih
        $ikan = DB::table('ikan')->where('kodeikan', $id)->get();

        // passing data ikan yang didapat ke view edit.blade.php
        return view('ikan.edit', ['ikan' => $ikan]);
    }

    // method untuk update data ikan
    public function update(Request $request)
    {
        // update data ikan
        DB::table('ikan')->where('kodeikan', $request->id)->update([
            'namaikan'   => $request->namaikan,
            'jumlahikan' => $request->jumlahikan,
            'tersedia'   => $request->tersedia,
        ]);

        // alihkan halaman ke halaman ikan
        return redirect('/ikan');
    }

    // method untuk hapus data ikan
    public function hapus($id)
    {
        // menghapus data ikan berdasarkan id yang dipilih
        DB::table('ikan')->where('kodeikan', $id)->delete();

        // alihkan halaman ke halaman ikan
        return redirect('/ikan');
    }

    // method untuk mencari data ikan
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table ikan sesuai pencarian
        $ikan = DB::table('ikan')
            ->where('namaikan', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data ikan ke view index
        return view('ikan.index', ['ikan' => $ikan]);
    }
}
