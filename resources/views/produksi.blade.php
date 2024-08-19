<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produksi</title>

    <!-- Boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-2 mb-3">
        <h2>
            Daftar Produksi
        </h2>
    </div>

    <div class="container">
        <div class="container card-body mt-2">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Komoditas</th>
                    <th>Produksi</th>
                    <th>Aksi</th>
                </tr>


                @foreach ($produksi as $p)
                    <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->tanggal_produksi }}</td>
                        <td>{{ $p->komoditas_nama }}</td>
                        <td>{{ $p->jumlah_produksi }}</td>

                        <th>
                            <a href="/produksi/detail/{{ $p->id }}" class="btn btn-secondary">Detail</a>
                            <a href="/produksi/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Hapus
                            </button>
                        </th>
                    </tr>
                @endforeach
            </table>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah anda yakin untuk menghapus data? 
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <a href="/produksi/delete/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <tbody>





    </div>
    <div class="container  mb-3">

        <button type="button" class="btn btn-success" onclick="window.location.href='/produksi/tambahkpro'">
            Tambah Data
        </button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
            name="bout"onclick="window.location.href='/'">Go Home</button>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
