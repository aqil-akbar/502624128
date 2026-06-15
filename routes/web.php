<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\IkanController;
use App\Http\Controllers\PenggajianController;

Route::get('/', function () {
    return view('welcome');
});

//pertemuan 7
Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/DELL', function () {
	return view('dell');
});

Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/biodata', [DosenController::class, 'biodata']);

//pertemuan 9
Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//tugas pertemuan 7
Route::get('/tugas', function () {
    return view('tugas.menu', [
        'nama' => 'Ahmad \'Aaqila Akbar'
    ]);
});

Route::get('/tugas/pertemuan-1', function () {
    return view('tugas.intro');
});

Route::get('/tugas/pertemuan-2', function () {
    return view('tugas.news');
});

Route::get('/tugas/pertemuan-3', function () {
    return view('tugas.responsive');
});

Route::get('/tugas/tugas-pertemuan-3', function () {
    return view('tugas.tugas-boostrap4');
});

Route::get('/tugas/pertemuan-4', function () {
    return view('tugas.layout');
});

Route::get('/tugas/pertemuan-5', function () {
    return view('tugas.dell2');
});

Route::get('/tugas/tugas-pertemuan-5', function () {
    return view('tugas.linktree');
});

Route::get('/tugas/pertemuan-5.1', function () {
    return view('tugas.index');
});

Route::get('/tugas/pertemuan-3.1', function () {
    return view('tugas.template');
});

Route::get('/tugas/pertemuan-2.1', function () {
    return view('tugas.news-1');
});

//  ROUTE CRUD
// Pertemuan 11
Route::get('/pegawai', [PegawaiDBController::class, 'index']);

// Pertemuan 13
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa Pertemuan 14
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// Latihan EAS (D4)
Route::get('/belanja', [BelanjaController::class, 'index'])->name('belanja.index');
Route::get('/belanja/beli', [BelanjaController::class, 'beli'])->name('belanja.beli');
Route::post('/belanja/simpan', [BelanjaController::class, 'simpan'])->name('belanja.simpan');
Route::get('/belanja/batal/{id}', [BelanjaController::class, 'batal'])->name('belanja.batal');

// Latihan EAS (E5)
Route::get('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::get('/nilai/tambah', [NilaiController::class, 'tambah'])->name('nilai.tambah');
Route::post('/nilai/simpan', [NilaiController::class, 'simpan'])->name('nilai.simpan');

//Pra EAS
Route::get('/ikan', [IkanController::class, 'index']);
Route::get('/ikan/tambah', [IkanController::class, 'tambah']);
Route::post('/ikan/store', [IkanController::class, 'store']);
Route::get('/ikan/edit/{id}', [IkanController::class, 'edit']);
Route::post('/ikan/update', [IkanController::class, 'update']);
Route::get('/ikan/hapus/{id}', [IkanController::class, 'hapus']);
Route::get('/ikan/cari', [IkanController::class, 'cari']);

//EAS
Route::get('/eas', [PenggajianController::class, 'index']);
Route::get('/eas/tambah', [PenggajianController::class, 'tambah']);
Route::post('/eas/store', [PenggajianController::class, 'store']);
