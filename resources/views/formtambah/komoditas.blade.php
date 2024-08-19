<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Komoditas</title>
    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="container">
        <h2> Tambah Data Komoditas
        </h2>
    </div>
    <form method="POST" action="/komoditas/savekomoditas">
        {{ csrf_field() }}
        <div class="modal-body">


            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                placeholder="Masukkan Nama Produksi!">
           

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                    name="bout"onclick="window.location.href='/komoditas'">Keluar</button>
                <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
            </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</body>
</html>
    
