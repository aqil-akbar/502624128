<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index()
    {
        $nilais = DB::table('nilaikuliah')->paginate(10);
        return view('nilai.index', compact('nilais'));
    }

    public function tambah()
    {
        return view('nilai.tambah');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:6|unique:nilaikuliah,NRP',
            'NilaiAngka' => 'required|numeric|min:0|max:100',
            'SKS' => 'required|numeric|min:1',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect()->route('nilai.index');
    }
}
