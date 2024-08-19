<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produksi</title>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h2> Tambah Data Produksi
        </h2>
    </div>
    <form method="POST" action="/produksi/saveproduksi">
        {{ csrf_field() }}
        <div class="modal-body">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="exampleFormControlInput1"
                    placeholder="Masukkan Tanggal Transaksi!">

                @if ($errors->has('tanggal'))
                    <div class="text-danger">
                        {{ $errors->first('tanggal') }}
                    </div>
                @endif

            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Komoditas</label>
                <select class="form-select" id="komoditas_id" name="nama">
                    <option selected>Pilih komoditas...</option>
                    @foreach ($komoditas as $item)
                        <option value="{{ $item->id }}">{{ $item->komoditas_nama }}</option>
                    @endforeach
                </select>

                @if ($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama') }}
                    </div>
                @endif

            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Produksi</label>
                <input type="number" class="form-control" name="jumlah" id="exampleFormControlInput1"
                    placeholder="Masukkan jumlah Produksi!">
                @if ($errors->has('jumlah'))
                    <div class="text-danger">
                        {{ $errors->first('jumlah') }}
                    </div>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    name="bout"onclick="window.location.href='/kriteria'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>

    </form>


    <div class="modal fade" id="duplicateModal" tabindex="-1" aria-labelledby="duplicateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="duplicateModalLabel">Data Duplikat</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Data produksi dengan komoditas dan tanggal tersebut sudah ada.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->has('duplicate'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var duplicateModal = new bootstrap.Modal(document.getElementById('duplicateModal'));
                duplicateModal.show();
            });
        </script>
        
    @endif


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
