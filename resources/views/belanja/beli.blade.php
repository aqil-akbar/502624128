@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0 fw-bold">Formulir Pembelian Barang Baru</h5>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('belanja.simpan') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="KodeBarang" class="form-label fw-semibold text-secondary">Kode Barang :</label>
                    <input type="text" name="KodeBarang" id="KodeBarang" class="form-control"
                        placeholder="Masukkan angka kode barang" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="Jumlah" class="form-label fw-semibold text-secondary">Jumlah Pembelian :</label>
                    <input type="text" name="Jumlah" id="Jumlah" class="form-control"
                        placeholder="Masukkan kuantitas belanja" required autocomplete="off">
                </div>

                <div class="mb-3">
                    <label for="Harga" class="form-label fw-semibold text-secondary">Harga per Item :</label>
                    <input type="text" name="Harga" id="Harga" class="form-control"
                        placeholder="Masukkan nominal harga rupiah" required autocomplete="off">
                </div>

                <div class="d-flex gap-2 pt-2">
                    <button type="submit" class="btn btn-success px-4 fw-bold">Simpan Rekaman</button>
                    <a href="{{ route('belanja.index') }}" class="btn btn-secondary px-3">Kembali ke Tabel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
