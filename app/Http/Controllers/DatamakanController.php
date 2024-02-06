<?php

namespace App\Http\Controllers;

use App\Models\Datamakan;
use App\Models\Taruna;
use App\Models\Pantangan;
use App\Models\Puasa;
use App\Models\Perizinan;
use Illuminate\Http\Request;

class DatamakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view("datamakan.index");
    }

    public function buat()
    {
        $taruna = Taruna::all();
        $pantangan = Pantangan::all();
        $puasa = Puasa::all();
        $perizinan = Perizinan::all();

        $dataTaruna = [
            'jumlahPutra' => count(Taruna::where("jenis_kelamin","laki-laki")->get()),
            'jumlahPutri' => count(Taruna::where("jenis_kelamin","perempuan")->get()),
        ];

        return view("datamakan.buat",compact(['dataTaruna']),['taruna'=>$taruna,'pantangan'=>$pantangan,'puasa'=>$puasa,'perizinan'=>$perizinan]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Datamakan  $datamakan
     * @return \Illuminate\Http\Response
     */
    public function show(Datamakan $datamakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Datamakan  $datamakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Datamakan $datamakan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Datamakan  $datamakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datamakan $datamakan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Datamakan  $datamakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datamakan $datamakan)
    {
        //
    }
}
