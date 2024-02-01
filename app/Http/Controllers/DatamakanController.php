<?php

namespace App\Http\Controllers;

use App\Models\Datamakan;
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
        return view('datamakan.buat');
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
