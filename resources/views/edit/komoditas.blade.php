<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komoditas</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Edit Data Komoditas</h2>
    <form method="POST" action="/komoditas/update/{{ $kom->id }}">
        @csrf
        @method('PUT')
        <div class="modal-body">
            <div class="mb-3">
                <label for="id" class="form-label">Kode</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan Nama Produksi!" readonly value="{{ $kom->id }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Produksi!" value="{{ $kom->komoditas_nama }}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" onclick="window.location.href='/komoditas'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
