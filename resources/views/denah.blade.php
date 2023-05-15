<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Reservasi Bus Piknik 2023</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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
                <a>&nbsp;&nbsp;<strong>Denah Kursi Bus</strong></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th colspan="2">Kloter Pertama</th>
                                <th colspan="2">Kloter Kedua</th>
                                <th colspan="2">Kloter Ketiga</th>
                            </tr>
                            <tr>
                                <th>BUS 1</th>
                                <th>BUS 2</th>
                                <th>BUS 1</th>
                                <th>BUS 2</th>
                                <th>BUS 1</th>
                                <th>BUS 2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                {{-- BUS 1 --}}
                                <td>
                                    <div class="btn-group mb-2 d-grid gap-2 mx-auto" role="group">
                                        <button type="button" class="btn btn-secondary btn-sm" disabled>DEPAN</button>
                                    </div>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 1) btn-primary @else @endif @endforeach" style="width: 60px;border: 1px">1</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 2) btn-primary @else @endif @endforeach" style="width: 60px">2</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 3) btn-primary @else @endif @endforeach" style="width: 60px">3</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 4) btn-primary @else @endif @endforeach" style="width: 60px">4</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 5) btn-primary @else @endif @endforeach" style="width: 60px">5</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 6) btn-primary @else @endif @endforeach" style="width: 60px">6</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 7) btn-primary @else @endif @endforeach" style="width: 60px">7</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 8) btn-primary @else @endif @endforeach" style="width: 60px">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 9) btn-primary @else @endif @endforeach" style="width: 60px">9</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 10) btn-primary @else @endif @endforeach" style="width: 60px">10</button>

                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 11) btn-primary @else @endif @endforeach" style="width: 60px">11</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 12) btn-primary @else @endif @endforeach" style="width: 60px">12</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 13) btn-primary @else @endif @endforeach" style="width: 60px">13</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 14) btn-primary @else @endif @endforeach" style="width: 60px">14</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 15) btn-primary @else @endif @endforeach" style="width: 60px">15</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 16) btn-primary @else @endif @endforeach" style="width: 60px">16</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 17) btn-primary @else @endif @endforeach" style="width: 60px">17</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 18) btn-primary @else @endif @endforeach" style="width: 60px">18</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 19) btn-primary @else @endif @endforeach" style="width: 60px">19</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 20) btn-primary @else @endif @endforeach" style="width: 60px">20</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 21) btn-primary @else @endif @endforeach" style="width: 60px">21</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 22) btn-primary @else @endif @endforeach" style="width: 60px">22</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 23) btn-primary @else @endif @endforeach" style="width: 60px">23</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 24) btn-primary @else @endif @endforeach" style="width: 60px">24</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 25) btn-primary @else @endif @endforeach" style="width: 60px">25</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 26) btn-primary @else @endif @endforeach" style="width: 60px">26</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 27) btn-primary @else @endif @endforeach" style="width: 60px">27</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 28) btn-primary @else @endif @endforeach" style="width: 60px">28</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 29) btn-primary @else @endif @endforeach" style="width: 60px">29</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 30) btn-primary @else @endif @endforeach" style="width: 60px">30</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 31) btn-primary @else @endif @endforeach" style="width: 60px">31</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 32) btn-primary @else @endif @endforeach" style="width: 60px">32</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 33) btn-primary @else @endif @endforeach" style="width: 60px">33</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 34) btn-primary @else @endif @endforeach" style="width: 60px">34</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 35) btn-primary @else @endif @endforeach" style="width: 60px">35</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 36) btn-primary @else @endif @endforeach" style="width: 60px">36</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 37) btn-primary @else @endif @endforeach" style="width: 60px">37</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 38) btn-primary @else @endif @endforeach" style="width: 60px">38</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 39) btn-primary @else @endif @endforeach" style="width: 60px">39</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 40) btn-primary @else @endif @endforeach" style="width: 60px">40</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 41) btn-primary @else @endif @endforeach" style="width: 60px">41</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 42) btn-primary @else @endif @endforeach" style="width: 60px">42</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 43) btn-primary @else @endif @endforeach" style="width: 60px">43</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 44) btn-primary @else @endif @endforeach" style="width: 60px">44</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 45) btn-primary @else @endif @endforeach" style="width: 60px">45</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 46) btn-primary @else @endif @endforeach" style="width: 60px">46</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 47) btn-primary @else @endif @endforeach" style="width: 60px">47</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus1'] as $item) @if ($item->no_kursi == 48) btn-primary @else @endif @endforeach" style="width: 60px">48</button>
                                    </div>
                                </td>
                                {{-- BUS 2 --}}
                                <td>
                                    <div class="btn-group mb-2 d-grid gap-2 mx-auto" role="group">
                                        <button type="button" class="btn btn-secondary btn-sm" disabled>DEPAN</button>
                                    </div>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 1) btn-primary @else @endif @endforeach" style="width: 60px;border: 1px">1</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 2) btn-primary @else @endif @endforeach" style="width: 60px">2</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 3) btn-primary @else @endif @endforeach" style="width: 60px">3</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 4) btn-primary @else @endif @endforeach" style="width: 60px">4</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 5) btn-primary @else @endif @endforeach" style="width: 60px">5</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 6) btn-primary @else @endif @endforeach" style="width: 60px">6</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 7) btn-primary @else @endif @endforeach" style="width: 60px">7</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 8) btn-primary @else @endif @endforeach" style="width: 60px">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 9) btn-primary @else @endif @endforeach" style="width: 60px">9</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 10) btn-primary @else @endif @endforeach" style="width: 60px">10</button>

                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 11) btn-primary @else @endif @endforeach" style="width: 60px">11</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 12) btn-primary @else @endif @endforeach" style="width: 60px">12</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 13) btn-primary @else @endif @endforeach" style="width: 60px">13</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 14) btn-primary @else @endif @endforeach" style="width: 60px">14</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 15) btn-primary @else @endif @endforeach" style="width: 60px">15</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 16) btn-primary @else @endif @endforeach" style="width: 60px">16</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 17) btn-primary @else @endif @endforeach" style="width: 60px">17</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 18) btn-primary @else @endif @endforeach" style="width: 60px">18</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 19) btn-primary @else @endif @endforeach" style="width: 60px">19</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 20) btn-primary @else @endif @endforeach" style="width: 60px">20</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 21) btn-primary @else @endif @endforeach" style="width: 60px">21</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 22) btn-primary @else @endif @endforeach" style="width: 60px">22</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 23) btn-primary @else @endif @endforeach" style="width: 60px">23</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 24) btn-primary @else @endif @endforeach" style="width: 60px">24</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 25) btn-primary @else @endif @endforeach" style="width: 60px">25</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 26) btn-primary @else @endif @endforeach" style="width: 60px">26</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 27) btn-primary @else @endif @endforeach" style="width: 60px">27</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 28) btn-primary @else @endif @endforeach" style="width: 60px">28</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 29) btn-primary @else @endif @endforeach" style="width: 60px">29</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 30) btn-primary @else @endif @endforeach" style="width: 60px">30</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 31) btn-primary @else @endif @endforeach" style="width: 60px">31</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 32) btn-primary @else @endif @endforeach" style="width: 60px">32</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 33) btn-primary @else @endif @endforeach" style="width: 60px">33</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 34) btn-primary @else @endif @endforeach" style="width: 60px">34</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 35) btn-primary @else @endif @endforeach" style="width: 60px">35</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 36) btn-primary @else @endif @endforeach" style="width: 60px">36</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 37) btn-primary @else @endif @endforeach" style="width: 60px">37</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 38) btn-primary @else @endif @endforeach" style="width: 60px">38</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 39) btn-primary @else @endif @endforeach" style="width: 60px">39</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 40) btn-primary @else @endif @endforeach" style="width: 60px">40</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 41) btn-primary @else @endif @endforeach" style="width: 60px">41</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 42) btn-primary @else @endif @endforeach" style="width: 60px">42</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 43) btn-primary @else @endif @endforeach" style="width: 60px">43</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 44) btn-primary @else @endif @endforeach" style="width: 60px">44</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 45) btn-primary @else @endif @endforeach" style="width: 60px">45</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 46) btn-primary @else @endif @endforeach" style="width: 60px">46</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 47) btn-primary @else @endif @endforeach" style="width: 60px">47</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus2'] as $item) @if ($item->no_kursi == 48) btn-primary @else @endif @endforeach" style="width: 60px">48</button>
                                    </div>
                                </td>
                                {{-- BUS 3 --}}
                                <td>
                                    <div class="btn-group mb-2 d-grid gap-2 mx-auto" role="group">
                                        <button type="button" class="btn btn-secondary btn-sm" disabled>DEPAN</button>
                                    </div>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 1) btn-primary @else @endif @endforeach" style="width: 60px;border: 1px">1</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 2) btn-primary @else @endif @endforeach" style="width: 60px">2</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 3) btn-primary @else @endif @endforeach" style="width: 60px">3</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 4) btn-primary @else @endif @endforeach" style="width: 60px">4</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 5) btn-primary @else @endif @endforeach" style="width: 60px">5</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 6) btn-primary @else @endif @endforeach" style="width: 60px">6</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 7) btn-primary @else @endif @endforeach" style="width: 60px">7</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 8) btn-primary @else @endif @endforeach" style="width: 60px">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 9) btn-primary @else @endif @endforeach" style="width: 60px">9</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 10) btn-primary @else @endif @endforeach" style="width: 60px">10</button>

                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 11) btn-primary @else @endif @endforeach" style="width: 60px">11</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 12) btn-primary @else @endif @endforeach" style="width: 60px">12</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 13) btn-primary @else @endif @endforeach" style="width: 60px">13</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 14) btn-primary @else @endif @endforeach" style="width: 60px">14</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 15) btn-primary @else @endif @endforeach" style="width: 60px">15</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 16) btn-primary @else @endif @endforeach" style="width: 60px">16</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 17) btn-primary @else @endif @endforeach" style="width: 60px">17</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 18) btn-primary @else @endif @endforeach" style="width: 60px">18</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 19) btn-primary @else @endif @endforeach" style="width: 60px">19</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 20) btn-primary @else @endif @endforeach" style="width: 60px">20</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 21) btn-primary @else @endif @endforeach" style="width: 60px">21</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 22) btn-primary @else @endif @endforeach" style="width: 60px">22</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 23) btn-primary @else @endif @endforeach" style="width: 60px">23</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 24) btn-primary @else @endif @endforeach" style="width: 60px">24</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 25) btn-primary @else @endif @endforeach" style="width: 60px">25</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 26) btn-primary @else @endif @endforeach" style="width: 60px">26</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 27) btn-primary @else @endif @endforeach" style="width: 60px">27</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 28) btn-primary @else @endif @endforeach" style="width: 60px">28</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 29) btn-primary @else @endif @endforeach" style="width: 60px">29</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 30) btn-primary @else @endif @endforeach" style="width: 60px">30</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 31) btn-primary @else @endif @endforeach" style="width: 60px">31</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 32) btn-primary @else @endif @endforeach" style="width: 60px">32</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 33) btn-primary @else @endif @endforeach" style="width: 60px">33</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 34) btn-primary @else @endif @endforeach" style="width: 60px">34</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 35) btn-primary @else @endif @endforeach" style="width: 60px">35</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 36) btn-primary @else @endif @endforeach" style="width: 60px">36</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 37) btn-primary @else @endif @endforeach" style="width: 60px">37</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 38) btn-primary @else @endif @endforeach" style="width: 60px">38</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 39) btn-primary @else @endif @endforeach" style="width: 60px">39</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 40) btn-primary @else @endif @endforeach" style="width: 60px">40</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 41) btn-primary @else @endif @endforeach" style="width: 60px">41</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 42) btn-primary @else @endif @endforeach" style="width: 60px">42</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 43) btn-primary @else @endif @endforeach" style="width: 60px">43</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 44) btn-primary @else @endif @endforeach" style="width: 60px">44</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 45) btn-primary @else @endif @endforeach" style="width: 60px">45</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 46) btn-primary @else @endif @endforeach" style="width: 60px">46</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 47) btn-primary @else @endif @endforeach" style="width: 60px">47</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus3'] as $item) @if ($item->no_kursi == 48) btn-primary @else @endif @endforeach" style="width: 60px">48</button>
                                    </div>
                                </td>
                                {{-- BUS 4 --}}
                                <td>
                                    <div class="btn-group mb-2 d-grid gap-2 mx-auto" role="group">
                                        <button type="button" class="btn btn-secondary btn-sm" disabled>DEPAN</button>
                                    </div>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 1) btn-primary @else @endif @endforeach" style="width: 60px;border: 1px">1</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 2) btn-primary @else @endif @endforeach" style="width: 60px">2</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 3) btn-primary @else @endif @endforeach" style="width: 60px">3</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 4) btn-primary @else @endif @endforeach" style="width: 60px">4</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 5) btn-primary @else @endif @endforeach" style="width: 60px">5</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 6) btn-primary @else @endif @endforeach" style="width: 60px">6</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 7) btn-primary @else @endif @endforeach" style="width: 60px">7</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 8) btn-primary @else @endif @endforeach" style="width: 60px">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 9) btn-primary @else @endif @endforeach" style="width: 60px">9</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 10) btn-primary @else @endif @endforeach" style="width: 60px">10</button>

                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 11) btn-primary @else @endif @endforeach" style="width: 60px">11</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 12) btn-primary @else @endif @endforeach" style="width: 60px">12</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 13) btn-primary @else @endif @endforeach" style="width: 60px">13</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 14) btn-primary @else @endif @endforeach" style="width: 60px">14</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 15) btn-primary @else @endif @endforeach" style="width: 60px">15</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 16) btn-primary @else @endif @endforeach" style="width: 60px">16</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 17) btn-primary @else @endif @endforeach" style="width: 60px">17</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 18) btn-primary @else @endif @endforeach" style="width: 60px">18</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 19) btn-primary @else @endif @endforeach" style="width: 60px">19</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 20) btn-primary @else @endif @endforeach" style="width: 60px">20</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 21) btn-primary @else @endif @endforeach" style="width: 60px">21</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 22) btn-primary @else @endif @endforeach" style="width: 60px">22</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 23) btn-primary @else @endif @endforeach" style="width: 60px">23</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 24) btn-primary @else @endif @endforeach" style="width: 60px">24</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 25) btn-primary @else @endif @endforeach" style="width: 60px">25</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 26) btn-primary @else @endif @endforeach" style="width: 60px">26</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 27) btn-primary @else @endif @endforeach" style="width: 60px">27</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 28) btn-primary @else @endif @endforeach" style="width: 60px">28</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 29) btn-primary @else @endif @endforeach" style="width: 60px">29</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 30) btn-primary @else @endif @endforeach" style="width: 60px">30</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 31) btn-primary @else @endif @endforeach" style="width: 60px">31</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 32) btn-primary @else @endif @endforeach" style="width: 60px">32</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 33) btn-primary @else @endif @endforeach" style="width: 60px">33</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 34) btn-primary @else @endif @endforeach" style="width: 60px">34</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 35) btn-primary @else @endif @endforeach" style="width: 60px">35</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 36) btn-primary @else @endif @endforeach" style="width: 60px">36</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 37) btn-primary @else @endif @endforeach" style="width: 60px">37</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 38) btn-primary @else @endif @endforeach" style="width: 60px">38</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 39) btn-primary @else @endif @endforeach" style="width: 60px">39</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 40) btn-primary @else @endif @endforeach" style="width: 60px">40</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 41) btn-primary @else @endif @endforeach" style="width: 60px">41</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 42) btn-primary @else @endif @endforeach" style="width: 60px">42</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 43) btn-primary @else @endif @endforeach" style="width: 60px">43</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 44) btn-primary @else @endif @endforeach" style="width: 60px">44</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 45) btn-primary @else @endif @endforeach" style="width: 60px">45</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 46) btn-primary @else @endif @endforeach" style="width: 60px">46</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 47) btn-primary @else @endif @endforeach" style="width: 60px">47</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus4'] as $item) @if ($item->no_kursi == 48) btn-primary @else @endif @endforeach" style="width: 60px">48</button>
                                    </div>
                                </td>
                                {{-- BUS 5 --}}
                                <td>
                                    <div class="btn-group mb-2 d-grid gap-2 mx-auto" role="group">
                                        <button type="button" class="btn btn-secondary btn-sm" disabled>DEPAN</button>
                                    </div>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 1) btn-primary @else @endif @endforeach" style="width: 60px;border: 1px">1</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 2) btn-primary @else @endif @endforeach" style="width: 60px">2</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 3) btn-primary @else @endif @endforeach" style="width: 60px">3</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 4) btn-primary @else @endif @endforeach" style="width: 60px">4</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 5) btn-primary @else @endif @endforeach" style="width: 60px">5</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 6) btn-primary @else @endif @endforeach" style="width: 60px">6</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 7) btn-primary @else @endif @endforeach" style="width: 60px">7</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 8) btn-primary @else @endif @endforeach" style="width: 60px">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 9) btn-primary @else @endif @endforeach" style="width: 60px">9</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 10) btn-primary @else @endif @endforeach" style="width: 60px">10</button>

                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 11) btn-primary @else @endif @endforeach" style="width: 60px">11</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 12) btn-primary @else @endif @endforeach" style="width: 60px">12</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 13) btn-primary @else @endif @endforeach" style="width: 60px">13</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 14) btn-primary @else @endif @endforeach" style="width: 60px">14</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 15) btn-primary @else @endif @endforeach" style="width: 60px">15</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 16) btn-primary @else @endif @endforeach" style="width: 60px">16</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 17) btn-primary @else @endif @endforeach" style="width: 60px">17</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 18) btn-primary @else @endif @endforeach" style="width: 60px">18</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 19) btn-primary @else @endif @endforeach" style="width: 60px">19</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 20) btn-primary @else @endif @endforeach" style="width: 60px">20</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 21) btn-primary @else @endif @endforeach" style="width: 60px">21</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 22) btn-primary @else @endif @endforeach" style="width: 60px">22</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 23) btn-primary @else @endif @endforeach" style="width: 60px">23</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 24) btn-primary @else @endif @endforeach" style="width: 60px">24</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 25) btn-primary @else @endif @endforeach" style="width: 60px">25</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 26) btn-primary @else @endif @endforeach" style="width: 60px">26</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 27) btn-primary @else @endif @endforeach" style="width: 60px">27</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 28) btn-primary @else @endif @endforeach" style="width: 60px">28</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 29) btn-primary @else @endif @endforeach" style="width: 60px">29</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 30) btn-primary @else @endif @endforeach" style="width: 60px">30</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 31) btn-primary @else @endif @endforeach" style="width: 60px">31</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 32) btn-primary @else @endif @endforeach" style="width: 60px">32</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 33) btn-primary @else @endif @endforeach" style="width: 60px">33</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 34) btn-primary @else @endif @endforeach" style="width: 60px">34</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 35) btn-primary @else @endif @endforeach" style="width: 60px">35</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 36) btn-primary @else @endif @endforeach" style="width: 60px">36</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 37) btn-primary @else @endif @endforeach" style="width: 60px">37</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 38) btn-primary @else @endif @endforeach" style="width: 60px">38</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 39) btn-primary @else @endif @endforeach" style="width: 60px">39</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 40) btn-primary @else @endif @endforeach" style="width: 60px">40</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 41) btn-primary @else @endif @endforeach" style="width: 60px">41</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 42) btn-primary @else @endif @endforeach" style="width: 60px">42</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 43) btn-primary @else @endif @endforeach" style="width: 60px">43</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 44) btn-primary @else @endif @endforeach" style="width: 60px">44</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 45) btn-primary @else @endif @endforeach" style="width: 60px">45</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 46) btn-primary @else @endif @endforeach" style="width: 60px">46</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 47) btn-primary @else @endif @endforeach" style="width: 60px">47</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus5'] as $item) @if ($item->no_kursi == 48) btn-primary @else @endif @endforeach" style="width: 60px">48</button>
                                    </div>
                                </td>
                                {{-- BUS 6 --}}
                                <td>
                                    <div class="btn-group mb-2 d-grid gap-2 mx-auto" role="group">
                                        <button type="button" class="btn btn-secondary btn-sm" disabled>DEPAN</button>
                                    </div>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 1) btn-primary @else @endif @endforeach" style="width: 60px;border: 1px">1</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 2) btn-primary @else @endif @endforeach" style="width: 60px">2</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 3) btn-primary @else @endif @endforeach" style="width: 60px">3</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 4) btn-primary @else @endif @endforeach" style="width: 60px">4</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 5) btn-primary @else @endif @endforeach" style="width: 60px">5</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 6) btn-primary @else @endif @endforeach" style="width: 60px">6</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 7) btn-primary @else @endif @endforeach" style="width: 60px">7</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 8) btn-primary @else @endif @endforeach" style="width: 60px">8</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 9) btn-primary @else @endif @endforeach" style="width: 60px">9</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 10) btn-primary @else @endif @endforeach" style="width: 60px">10</button>

                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 11) btn-primary @else @endif @endforeach" style="width: 60px">11</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 12) btn-primary @else @endif @endforeach" style="width: 60px">12</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 13) btn-primary @else @endif @endforeach" style="width: 60px">13</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 14) btn-primary @else @endif @endforeach" style="width: 60px">14</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 15) btn-primary @else @endif @endforeach" style="width: 60px">15</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 16) btn-primary @else @endif @endforeach" style="width: 60px">16</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 17) btn-primary @else @endif @endforeach" style="width: 60px">17</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 18) btn-primary @else @endif @endforeach" style="width: 60px">18</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 19) btn-primary @else @endif @endforeach" style="width: 60px">19</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 20) btn-primary @else @endif @endforeach" style="width: 60px">20</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 21) btn-primary @else @endif @endforeach" style="width: 60px">21</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 22) btn-primary @else @endif @endforeach" style="width: 60px">22</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 23) btn-primary @else @endif @endforeach" style="width: 60px">23</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 24) btn-primary @else @endif @endforeach" style="width: 60px">24</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 25) btn-primary @else @endif @endforeach" style="width: 60px">25</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 26) btn-primary @else @endif @endforeach" style="width: 60px">26</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 27) btn-primary @else @endif @endforeach" style="width: 60px">27</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 28) btn-primary @else @endif @endforeach" style="width: 60px">28</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 29) btn-primary @else @endif @endforeach" style="width: 60px">29</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 30) btn-primary @else @endif @endforeach" style="width: 60px">30</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 31) btn-primary @else @endif @endforeach" style="width: 60px">31</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 32) btn-primary @else @endif @endforeach" style="width: 60px">32</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 33) btn-primary @else @endif @endforeach" style="width: 60px">33</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 34) btn-primary @else @endif @endforeach" style="width: 60px">34</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 35) btn-primary @else @endif @endforeach" style="width: 60px">35</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 36) btn-primary @else @endif @endforeach" style="width: 60px">36</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 37) btn-primary @else @endif @endforeach" style="width: 60px">37</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 38) btn-primary @else @endif @endforeach" style="width: 60px">38</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 39) btn-primary @else @endif @endforeach" style="width: 60px">39</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 40) btn-primary @else @endif @endforeach" style="width: 60px">40</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 41) btn-primary @else @endif @endforeach" style="width: 60px">41</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 42) btn-primary @else @endif @endforeach" style="width: 60px">42</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 43) btn-primary @else @endif @endforeach" style="width: 60px">43</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 44) btn-primary @else @endif @endforeach" style="width: 60px">44</button>
                                    </div>
                                    <br>
                                    <div class="btn-group mb-2 gap-1 mx-auto" role="group">
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 45) btn-primary @else @endif @endforeach" style="width: 60px">45</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 46) btn-primary @else @endif @endforeach" style="width: 60px">46</button>
                                        <button type="button" class="btn btn-light" disabled></button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 47) btn-primary @else @endif @endforeach" style="width: 60px">47</button>
                                        <button type="button" class="btn border border-secondary @foreach ($list['bus6'] as $item) @if ($item->no_kursi == 48) btn-primary @else @endif @endforeach" style="width: 60px">48</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>

</body>

</html>
