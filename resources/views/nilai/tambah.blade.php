@extends('template')
@section('title', 'Nilai SKS Mahasiswa')
@section('konten')

<div class="card shadow-sm mx-auto"">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0 fw-bold">Formulir Tambah Record Nilai Kuliah</h5>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('nilai.simpan') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="NRP" class="form-label fw-semibold text-secondary">NRP (6 Karakter) :</label>
                    <input type="text" name="NRP" id="NRP" maxlength="6"
                           class="form-control" placeholder="Masukkan 6 digit NRP" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="NilaiAngka" class="form-label fw-semibold text-secondary">Nilai Angka :</label>
                    <input type="text" name="NilaiAngka" id="NilaiAngka"
                           class="form-control" placeholder="Masukkan angka nilai (0-100)" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="SKS" class="form-label fw-semibold text-secondary">SKS :</label>
                    <input type="text" name="SKS" id="SKS"
                           class="form-control" placeholder="Masukkan jumlah bobot SKS" required autocomplete="off">
                </div>

                <div class="d-flex gap-2 pt-2">
                    <button type="submit" class="btn btn-success px-4 fw-bold">Simpan Record</button>
                    <a href="{{ route('nilai.index') }}" class="btn btn-secondary px-3">Kembali ke Tabel</a>
                </div>
            </form>
        </div>
    </div>

@endsection
