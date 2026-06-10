@extends('template')
@section('title', 'Edit Data Ikan')
@section('konten')
    <a href="/ikan" class="btn btn-secondary mb-4"> Kembali</a>
    <br/>
    <br/>

    @foreach ($ikan as $i)
    <div class="card">
        <div class="card-header">
            Form Edit Data Ikan
        </div>

        <div class="card-body">
            <form action="/ikan/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $i->kodeikan }}">

                <div class="row mb-3">
                    <label for="namaikan" class="col-sm-2 col-form-label">Nama Ikan</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="namaikan"
                            id="namaikan"
                            class="form-control"
                            required
                            value="{{ $i->namaikan }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlahikan" class="col-sm-2 col-form-label">Jumlah Ikan</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="jumlahikan"
                            id="jumlahikan"
                            class="form-control"
                            min="0"
                            required
                            value="{{ $i->jumlahikan }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>
                            <option value="Y" {{ $i->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                            <option value="N" {{ $i->tersedia == 'N' ? 'selected' : '' }}>Tidak</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
    @endforeach
@endsection
