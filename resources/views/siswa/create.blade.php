@extends('template')
@section('title', 'Tambah Data Siswa')
@section('konten')

    <div class="card shadow-sm mx-auto">
        <div class="card-header bg-primary text-white py-3">
            <h5 class="mb-0 fw-bold">Formulir Tambah Siswa Baru</h5>
        </div>
        <div class="card-body p-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('siswa.store') }}" method="POST" onsubmit="return validasiForm()">
                @csrf

                <div class="mb-3">
                    <label for="NRP" class="form-label fw-semibold text-secondary">NRP :</label>
                    <input type="text" name="NRP" id="NRP" maxlength="10"
                           class="form-control" placeholder="Masukkan NRP" value="{{ old('NRP') }}">
                </div>

                <div class="mb-3">
                    <label for="Nama" class="form-label fw-semibold text-secondary">Nama :</label>
                    <input type="text" name="Nama" id="Nama" maxlength="20"
                           class="form-control" placeholder="Masukkan nama lengkap" value="{{ old('Nama') }}">
                </div>

                <div class="mb-3">
                    <label for="Kelas" class="form-label fw-semibold text-secondary">Kelas :</label>
                    <input type="text" name="Kelas" id="Kelas" maxlength="5"
                           class="form-control" placeholder="Masukkan kelas" value="{{ old('Kelas') }}">
                </div>

                <div class="mb-3">
                    <label for="TanggalLahir" class="form-label fw-semibold text-secondary">Tanggal Lahir :</label>
                    <input type="date" name="TanggalLahir" id="TanggalLahir"
                           class="form-control" value="{{ old('TanggalLahir') }}">
                </div>

                <div class="d-flex gap-2 pt-2">
                    <button type="submit" class="btn btn-success px-4 fw-bold">Simpan</button>
                    <a href="{{ route('siswa.index') }}" class="btn btn-secondary px-3">Kembali</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nama = document.getElementById('Nama').value.trim();
            let kelas = document.getElementById('Kelas').value.trim();
            let tanggal = document.getElementById('TanggalLahir').value;

            if (nrp === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "NRP wajib diisi", icon: "error" });
                return false;
            }
            if (nrp.length > 10) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "NRP maksimal 10 karakter", icon: "error" });
                return false;
            }
            if (nama === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama wajib diisi", icon: "error" });
                return false;
            }
            if (nama.length > 20) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Nama maksimal 20 karakter", icon: "error" });
                return false;
            }
            if (kelas === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kelas wajib diisi", icon: "error" });
                return false;
            }
            if (kelas.length > 5) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Kelas maksimal 5 karakter", icon: "error" });
                return false;
            }
            if (tanggal === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Tanggal lahir wajib diisi", icon: "error" });
                return false;
            }
            return true;
        }
    </script>
@endsection
