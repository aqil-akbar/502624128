@extends('template')
@section('title', 'Data penggajian')
@section('konten')

    <div class="p-4 mb-4 bg-light rounded-3">
        <h2 class="display-6 fw-bold">Data Penggajian</h2>
    </div>

    <a href="/eas" class="btn btn-secondary mb-4"> Kembali</a>
    <br/>
    <br/>

    <div class="card">
        <div class="card-header">

        </div>

        <div class="card-body">
            <form action="/eas/store" method="post" id="formTambah">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="nip"
                            id="nip"
                            class="form-control"
                            maxlength="8"
                            placeholder="Contoh: NIP00021"
                            required
                        >
                        <div id="errorNip" class="text-danger mt-1" style="display:none;"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="gajipokok" class="col-sm-2 col-form-label">Gaji Pokok</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="gajipokok"
                            id="gajipokok"
                            class="form-control"
                            min="0"
                            placeholder="Contoh: 5000000"
                            required
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="potongan" class="col-sm-2 col-form-label">Potongan</label>
                    <div class="col-sm-10">
                        <input
                            type="number"
                            name="potongan"
                            id="potongan"
                            class="form-control"
                            min="0"
                            placeholder="Contoh: 1000000"
                            required
                        >
                        <div id="errorPotongan" class="text-danger mt-1" style="display:none;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary" id="btnSimpan">
                    </div>
                </div>

            </form>
        </div>
    </div>

    <script>
        // Daftar NIP yang sudah ada di database (dikirim dari controller)
        const daftarNip = @json($daftarNip);

        const formTambah   = document.getElementById('formTambah');
        const inputNip     = document.getElementById('nip');
        const inputGaji    = document.getElementById('gajipokok');
        const inputPotongan= document.getElementById('potongan');
        const errorNip     = document.getElementById('errorNip');
        const errorPotongan= document.getElementById('errorPotongan');

        formTambah.addEventListener('submit', function (e) {
            let valid = true;

            // Reset pesan error
            errorNip.style.display      = 'none';
            errorNip.textContent        = '';
            errorPotongan.style.display = 'none';
            errorPotongan.textContent   = '';

            const nipValue      = inputNip.value.trim();
            const gajiValue     = parseFloat(inputGaji.value);
            const potonganValue = parseFloat(inputPotongan.value);

            // Validasi i: NIP harus unik
            if (daftarNip.includes(nipValue)) {
                errorNip.textContent    = '❌ NIP "' + nipValue + '" sudah terdaftar. Gunakan NIP yang lain.';
                errorNip.style.display  = 'block';
                valid = false;
            }

            // Validasi ii: Potongan < Gaji Pokok * 30%
            const batasPotongan = gajiValue * 0.30;
            if (potonganValue >= batasPotongan) {
                errorPotongan.textContent   = '❌ Potongan harus kurang dari 30% Gaji Pokok (maks: Rp ' +
                    batasPotongan.toLocaleString('id-ID') + ')';
                errorPotongan.style.display = 'block';
                valid = false;
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    </script>

@endsection
