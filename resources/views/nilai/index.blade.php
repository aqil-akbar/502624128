@extends('template')
@section('title', 'Nilai SKS Mahasiswa')
@section('konten')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0 text-dark">Daftar Nilai SKS Mahasiswa</h3>
    </div>

    <div class="mb-3">
        <a href="{{ route('nilai.tambah') }}" class="btn btn-primary fw-bold">+ Tambah Nilai</a>
    </div>


    <table class="table table-bordered table-striped align-middle">
        <thead class="thead-dark">
            <tr>
                <th style="text-align: center;">ID</th>
                <th style="text-align: center;">NRP</th>
                <th style="text-align: center;">Nilai Angka</th>
                <th style="text-align: center;">SKS</th>
                <th style="text-align: center;">Nilai Huruf</th>
                <th style="text-align: center;">Bobot</th>
            </tr>
        </thead>
        <tbody>
            @forelse($nilais as $item)
                <tr>
                    <td style="text-align: center;">{{ $item->ID }}</td>
                    <td style="text-align: center;">{{ $item->NRP }}</td>
                    <td style="text-align: center;">{{ $item->NilaiAngka }}</td>
                    <td style="text-align: center;">{{ $item->SKS }}</td>
                    <td style="text-align: center;">
                        @if ($item->NilaiAngka <= 40)
                            D
                        @elseif($item->NilaiAngka >= 41 && $item->NilaiAngka <= 60)
                            C
                        @elseif($item->NilaiAngka >= 61 && $item->NilaiAngka <= 80)
                            B
                        @else
                            A
                        @endif
                    </td>
                    <td style="text-align: center;" class="fw-bold text-success">{{ $item->NilaiAngka * $item->SKS }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-3">Belum ada riwayat rekaman nilai.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $nilais->links() }}
    </div>

@endsection
