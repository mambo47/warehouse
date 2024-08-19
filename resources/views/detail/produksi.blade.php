<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produksi</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Detail Data Produksi</h2>

        <div class="modal-body">
            </div><div class="mb-3">
                <label for="id" class="form-label">Komoditas</label>
                <input type="text" class="form-control" name="id" id="id" placeholder="Masukkan Nama Produksi!" readonly value="{{ $pro->komoditas->komoditas_nama }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Produksi</label>
                <input type="number" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan Nama Produksi!" readonly value="{{ $pro->jumlah_produksi }}">
            </div><div class="mb-3">
                <label for="nama" class="form-label">Tanggal Produksi</label>
                <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Nama Produksi!" readonly value="{{ $pro->tanggal_produksi }}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="window.location.href='/produksi'">Keluar</button>
              
            </div>
        </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
