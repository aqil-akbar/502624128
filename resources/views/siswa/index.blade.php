@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="m-0 text-dark fw-bold">Data Siswa</h2>
    </div>

    <div class="mb-3">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary fw-bold">+ Tambah Siswa</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="thead-dark text-center">
                <tr>
                    <th style="text-align: center;">NRP</th>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">Kelas</th>
                    <th style="text-align: center;">Tanggal Lahir</th>
                    <th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($siswa as $row)
                    <tr>
                        <td class="text-center font-monospace">{{ $row->NRP }}</td>
                        <td>{{ $row->Nama }}</td>
                        <td class="text-center">{{ $row->Kelas }}</td>
                        <td class="text-center">{{ $row->TanggalLahir }}</td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="{{ route('siswa.edit', $row->NRP) }}" class="btn btn-warning btn-sm fw-semibold">Edit</a>

                                <form action="{{ route('siswa.destroy', $row->NRP) }}" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm fw-semibold">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-3">Belum ada data siswa.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
