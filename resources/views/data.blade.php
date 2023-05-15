<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Reservasi Bus Piknik 2023</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
</head>

<body class="wrapper">
    <div class="container-fluid" style="margin-top: 10px;margin-bottom: 10px">

        @if(session('message'))
            <div class="row mb-2">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        @endif
        @if($errors->count() > 0)
            <div class="row mb-2">
                <div class="col-lg-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="card">
            <div class="card-header gap-2 d-md-block">
                <a class="btn btn-primary" href="javascript:void(0);" onclick="window.location='{{ route('index') }}'">Kembali</a>
                <a>&nbsp;&nbsp;<strong>Data Reservasi Peserta Ikut Piknik</strong></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>UNIT</th>
                                <th>KAOS</th>
                                <th>KLOTER</th>
                                <th>BUS</th>
                                <th>KURSI</th>
                                <th>RIWAYAT PENYAKIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($list['show_ya']) > 0)
                                @foreach ($list['show_ya'] as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->kaos }}</td>
                                        <td>{{ $item->kloter }}</td>
                                        <td>{{ $item->bus }}</td>
                                        <td>{{ $item->no_kursi }}</td>
                                        <td>{{ $item->penyakit }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header">
                <a><strong>Data Reservasi Peserta Tidak Ikut</strong></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table2">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>UNIT</th>
                                <th>KAOS</th>
                                <th>ALASAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($list['show_ya']) > 0)
                                @foreach ($list['show_tdk'] as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->unit }}</td>
                                        <td>{{ $item->kaos }}</td>
                                        <td>{{ $item->alasan }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>

    <script>
        $(document).ready( function () {
            $('#table1').DataTable({
                order: [[6, "asc"]],
                displayLength: 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
            $('#table2').DataTable({
                order: [[0, "desc"]],
                displayLength: 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>
