@extends('template')
@section('title', 'Data Penggajian')
@section('konten')

   <div class="p-4 mb-4 bg-light rounded-3">
        <h2 class="display-6 fw-bold">Data Penggajian</h2>
    </div>

    <a href="/eas/tambah" class="btn btn-primary"> + Tambah Data</a>
    <br />
    <br />

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Gaji Pokok</th>
                <th>Potongan</th>
                <th>Gaji Bersih</th>
                <th>Presentase Potongan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penggajian as $p)
                @php
                    $gajiBersih          = $p->gajipokok - $p->potongan;
                    $persentasePotongan  = ($p->gajipokok > 0)
                        ? round(($p->potongan / $p->gajipokok) * 100, 2)
                        : 0;
                @endphp
                <tr>
                     <td>{{ $p->nip }}</td>
                    <td>Rp {{ number_format($p->gajipokok, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($p->potongan, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($gajiBersih, 0, ',', '.') }}</td>
                    <td>{{ $persentasePotongan }}%</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
