<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use App\Models\peserta;
use Carbon\Carbon;
use Redirect;
use Auth;

class busReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ikut' => 'required', // nullable
            'nama' => 'required',
            'unit' => 'required',
            'kaos' => 'required',
            ]);

        if ($request->kloter == 1 && $request->bus == 1) {
            $bus = 1;
        }
        if ($request->kloter == 1 && $request->bus == 2) {
            $bus = 2;
        }
        if ($request->kloter == 2 && $request->bus == 1) {
            $bus = 3;
        }
        if ($request->kloter == 2 && $request->bus == 2) {
            $bus = 4;
        }
        if ($request->kloter == 3 && $request->bus == 1) {
            $bus = 5;
        }
        if ($request->kloter == 3 && $request->bus == 2) {
            $bus = 6;
        }

        $validasi = peserta::where('bus', $bus)->where('no_kursi',$request->no_kursi)->first();

        if ($validasi == null) {
            $data = new peserta;
            $data->ikut = $request->ikut;
            $data->nama = $request->nama;
            $data->unit = $request->unit;
            $data->kaos = $request->kaos;

            if ($request->ikut == '1') {
                $data->kloter = $request->kloter;
                $data->bus = $bus;
                $data->no_kursi = $request->no_kursi;
                $data->penyakit = $request->penyakit;
            } else {
                if ($request->ikut == '0') {
                    $data->alasan = $request->alasan;
                }
            }

            $data->save();

            return redirect()->back()->with('message','Reservasi Berhasil');
        } else {
            return redirect()->back()->withErrors('Nomor Kursi sudah terisi, silakan pilih kursi lain yang masih kosong');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function denah()
    {
        $bus1 = peserta::where('ikut', 1)->where('bus', 1)->get();
        $bus2 = peserta::where('ikut', 1)->where('bus', 2)->get();
        $bus3 = peserta::where('ikut', 1)->where('bus', 3)->get();
        $bus4 = peserta::where('ikut', 1)->where('bus', 4)->get();
        $bus5 = peserta::where('ikut', 1)->where('bus', 5)->get();
        $bus6 = peserta::where('ikut', 1)->where('bus', 6)->get();

        $data = [
            'bus1' => $bus1,
            'bus2' => $bus2,
            'bus3' => $bus3,
            'bus4' => $bus4,
            'bus5' => $bus5,
            'bus6' => $bus6,
        ];

        // print_r($bus1);
        // die();

        return view('denah')->with('list', $data);
    }

    public function data()
    {
        $show_ya = peserta::where('ikut', 1)->get();
        $show_tdk = peserta::where('ikut', 0)->get();

        $data = [
            'show_ya' => $show_ya,
            'show_tdk' => $show_tdk,
        ];

        return view('data')->with('list', $data);
    }
}
