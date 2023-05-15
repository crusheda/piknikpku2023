<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Reservasi Bus Piknik 2023</title>

	<!-- Google font -->
	{{-- <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet"> --}}

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    {{-- <style>
        .container{
            min-width:1200px;
            width: auto !important;   /* Firefox will set width as auto */
            width:1200px;             /* As IE ignores !important it will set width as 1000px; */
        }
    </style> --}}
</head>

<body class="wrapper">
    <div class="container" style="width: auto !important;margin-top: 50px;margin-bottom: 50px;margin-right: 50px;margin-left: 50px">
        <div class="row">
            <div class="card">
                <form name="formTambah" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                    <div class="card-header">
                        <h2><center>Reservasi Bus Piknik 2023</center></h2>
                    </div>
                    <div class="form-group">
                        <span class="form-label">Keikutsertaan</span>
                        <select class="form-control" name="ikut" onchange="keikutsertaan(this);" required>
                            <option value="" hidden>Pilih</option>
                            <option value="ya">Ikut</option>
                            <option value="tidak">Tidak Ikut</option>
                        </select>
                    </div>
                    <div class="card-body">
                        <div class="row" id="show_ikut" hidden>
                            <hr>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Kloter</span>
                                    <select class="form-control" name="kloter" required>
                                        <option value="" hidden>Pilih</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Bus</span>
                                    <select class="form-control" name="bus" required>
                                        <option value="" hidden>Pilih</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Peserta</span>
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">No. Kursi</span>
                                    <select class="form-control" name="no_kursi" required>
                                        <option value="" hidden>Pilih</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <span class="form-label">Ukuran Kaos</span>
                                    <select class="form-control" name="kaos" required>
                                        <option value="" hidden>Pilih</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                        <option value="">XL</option>
                                        <option value="">XXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Unit</span>
                                    <input class="form-control" type="text" name="unit" placeholder="Nama Unit/Bagian">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">No. HP</span>
                                    <input class="form-control" type="tel" name="hp" placeholder="Nomor HP yang masih aktif">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Riwayat Penyakit</span>
                                    <input class="form-control" type="text" name="penyakit">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="show_tidakikut" hidden>
                            <hr>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Nama Lengkap</span>
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Unit</span>
                                    <input class="form-control" type="text" name="unit" placeholder="Nama Unit/Bagian">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Ukuran Kaos</span>
                                    <select class="form-control" name="kaos" required>
                                        <option value="" hidden>Pilih</option>
                                        <option value="">S</option>
                                        <option value="">M</option>
                                        <option value="">L</option>
                                        <option value="">XL</option>
                                        <option value="">XXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <span class="form-label">Alasan</span>
                                    <textarea class="form-control" name="alasan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-btn">
                        <button type="submit" id="btn-simpan" onclick="saveData()" class="btn btn-primary">Submit</button>
                        <button class="btn btn-warning">Lihat Bus</button>
                    </div>
                </form>
            </div>
        </div>
	</div>
    <script>
        $(document).ready( function () {

        })

        // FUNCTION-FUNCTION
        function keikutsertaan(sel) {
            if (sel.value === "ya") {
                $("#show_tidakikut").prop('hidden', true);
                $("#show_ikut").prop('hidden', false);
            } else {
                if (sel.value === "tidak") {
                    $("#show_tidakikut").prop('hidden', false);
                    $("#show_ikut").prop('hidden', true);
                }
            }
        }
        function saveData() {
            $("#formTambah").one('submit', function() {
                $("#btn-simpan").attr('disabled','disabled');
                $("#btn-simpan").find("i").toggleClass("fa-save fa-spinner fa-spin");
                return true;
            });
        }
    </script>
</body>

</html>
