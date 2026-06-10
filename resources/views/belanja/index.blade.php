@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0 text-dark">Daftar Rekapitulasi Belanja</h3>
    </div>

    <div class="mb-3">
        <a href="{{ route('belanja.beli') }}" class="btn btn-primary fw-bold">+ Beli</a>
    </div>


    <table class="table table-bordered table-striped align-middle">
        <thead class="thead-dark">
            <tr>
                <th style="text-align: center;">Kode Pembelian</th>
                <th style="text-align: center;">Kode Barang</th>
                <th style="text-align: center;">Jumlah Pembelian</th>
                <th style="text-align: center;">Harga per item</th>
                <th style="text-align: center;">Total</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($keranjang as $item)
                <tr>
                    <td style="text-align: center;">{{ $item->ID }}</td>
                    <td style="text-align: center;">{{ $item->KodeBarang }}</td>
                    <td style="text-align: center;">{{ $item->Jumlah }}</td>
                    <td style="text-align: center;">Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                    <td style="text-align: center;" class="fw-bold text-success">Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                    <td style="text-align: center;">
                        <a href="{{ route('belanja.beli') }}" class="btn btn-success btn-sm fw-bold">Beli</a>

                        <a href="{{ route('belanja.batal', $item->ID) }}" class="btn btn-danger btn-sm px-3"
                            onclick="return confirm('Apakah Anda yakin ingin membatalkan transaksi pembelian ini?')">Batal</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-3">Belum ada riwayat rekaman keranjang belanja.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-3">
        {{ $keranjang->links() }}
    </div>

@endsection
