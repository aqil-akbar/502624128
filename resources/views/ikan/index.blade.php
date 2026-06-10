@extends('template')
@section('title', 'Data Ikan')
@section('konten')
    <a href="/ikan/tambah" class="btn btn-primary"> + Tambah Ikan Baru</a>
    <br />
    <br />

    <form action="/ikan/cari" method="GET" class="form-control">
        <div class="form-group">
            <label>Cari Data Ikan :</label>
            <input type="text" name="cari" placeholder="Cari Ikan .." class="form-control">
            <br />
            <input type="submit" value="CARI" class="btn btn-light">
        </div>
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Ikan</th>
            <th>Nama Ikan</th>
            <th>Jumlah Ikan</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($ikan as $i)
            <tr>
                <td>{{ $i->kodeikan }}</td>
                <td>{{ $i->namaikan }}</td>
                <td>{{ $i->jumlahikan }}</td>
                <td>
                    @if ($i->tersedia == 'Y')
                        <span class="badge bg-success">Ya</span>
                    @else
                        <span class="badge bg-danger">Tidak</span>
                    @endif
                </td>
                <td>
                    <a href="/ikan/edit/{{ $i->kodeikan }}" class="btn btn-warning">Edit</a>
                    &ensp;
                    <a href="/ikan/hapus/{{ $i->kodeikan }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $ikan->links() }} <!-- untuk menampilkan pagination -->
@endsection
