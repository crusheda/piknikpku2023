<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Reservasi Bus Piknik 2023</title>

	<!-- Google font -->
	{{-- <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> --}}

    <!-- Optional theme -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> --}}

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> --}}

    {{-- <style>
        .container{
            min-width:1200px;
            width: auto !important;   /* Firefox will set width as auto */
            width:1200px;             /* As IE ignores !important it will set width as 1000px; */
        }
    </style> --}}
    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
        }
    </style>
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

        <form name="formTambah" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h2 class="mb-2"><strong><center>Reservasi Bus Piknik 2023</center></strong></h2>
                <h6 class="mb-3"><center>Rumah Sakit PKU Muhammadiyah Sukoharjo</center></h6>
                <hr>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <span class="form-label">Peserta</span>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <span class="form-label">Unit</span>
                        <input class="form-control" type="text" name="unit" placeholder="Nama Unit/Bagian" required>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <span class="form-label">Ukuran Kaos</span>
                        <div class="input-group">
                            <button class="btn btn-outline-dark" type="button" data-bs-toggle="modal" data-bs-target="#panduan_kaos">Panduan</button>
                            <select class="form-control" name="kaos" required>
                                <option value="" hidden>Pilih</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                                <option value="XXXL">XXXL</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-group">
                        <span class="form-label">Keikutsertaan</span>
                        <select class="form-control" name="ikut" onchange="keikutsertaan(this);" required>
                            <option value="" hidden>Pilih</option>
                            <option value="1">Ikut</option>
                            <option value="0">Tidak Ikut</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="col-md-4 mb-3 show_ikut" hidden>
                    <div class="form-group">
                        <span class="form-label">Kloter</span>
                        <select class="form-control req_ikut" name="kloter">
                            <option value="" hidden>Pilih</option>
                            <option value="1">Kloter Pertama - 5 Juni 2023</option>
                            <option value="2">Kloter Kedua - 7 Juni 2023</option>
                            <option value="3">Kloter Ketiga - 12 Juni 2023</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3 show_ikut" hidden>
                    <div class="form-group">
                        <span class="form-label">Bus</span>
                        <select class="form-control req_ikut" name="bus">
                            <option value="" hidden>Pilih</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 mb-3 show_ikut" hidden>
                    <div class="form-group">
                        <span class="form-label">No. Kursi</span>
                        <div class="input-group">
                            <button class="btn btn-outline-dark" type="button" onclick="window.location='{{ route('denah') }}'">Denah</button>
                            <select class="form-control req_ikut" name="no_kursi">
                                <option value="" hidden>Pilih</option>
                                @for ($i = 1; $i <= 48; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3 show_ikut" hidden>
                    <div class="form-group">
                        <span class="form-label">Riwayat Penyakit</span>
                        <input class="form-control" type="text" name="penyakit">
                    </div>
                </div>
                <div class="col-md-12 mb-3 show_tidakikut" hidden>
                    <div class="form-group">
                        <span class="form-label">Alasan</span>
                        <textarea class="form-control noreq_ikut" name="alasan"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-btn d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" id="btn-simpan" onclick="saveData()" class="btn btn-primary">Submit</button>
                <a class="btn btn-warning text-white" href="javascript:void(0);" onclick="window.location='{{ route('denah') }}'">Lihat Denah Kursi</a>
            </div>
        </form>
	</div>

    {{-- MODAL --}}
    <div class="modal fade" id="panduan_kaos" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Sesuaikan Kaos Piknik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid" src="{{ asset('img/kaos_piknik.jpg') }}" alt="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {

        })

        // FUNCTION-FUNCTION
        function keikutsertaan(sel) {
            if (sel.value === '1') {
                $(".show_tidakikut").prop('hidden', true);
                $(".show_ikut").prop('hidden', false);
                $(".req_ikut").prop('required',true);
                $(".noreq_ikut").prop('required',false);
            } else {
                if (sel.value === '0') {
                    $(".show_tidakikut").prop('hidden', false);
                    $(".show_ikut").prop('hidden', true);
                    $(".req_ikut").prop('required',false);
                    $(".noreq_ikut").prop('required',true);
                }
            }
        }
        function saveData() {
            $("#formTambah").one('submit', function() {
                $("#btn-simpan").attr('disabled','disabled');
                return true;
            });
        }
    </script>
    <div class="footer">
        <p>Powered by <a href="https://simrsmu.com/" target="_blank">simrsmu.com</a></p>
    </div>
</body>


</html>
