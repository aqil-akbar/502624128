<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

//pertemuan 9
Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// Pertemuan 11
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<hi1>halo, selamat datang</h1> di tutorial laravel <b>www.malasngoding.com </b>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

Route::get('dosen', [DosenController::class, 'index'
]);

Route::get('biodata', [DosenController::class, 'biodata'
]);
