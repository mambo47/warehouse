<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Warehouse</title>
     <!-- Bootstrap 5 -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-2">
        <h2> Report Produksi Komoditas</h2>
        <div class="container card-body mt-2">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>Komoditas</th>
                        @foreach(range(1, 12) as $month)
                            <th>{{ DateTime::createFromFormat('!m', $month)->format('F') }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $row)
                        <tr>
                            <td>{{ $row['tahun'] }}</td>
                            <td>{{ $row['komoditas_nama'] }}</td>
                            @foreach(range(1, 12) as $month)
                                <td>{{ $row[$month] }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
    name="bout"onclick="window.location.href='/'">Go Home</button>
        



    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>