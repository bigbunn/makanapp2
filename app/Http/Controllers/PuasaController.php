<?php

namespace App\Http\Controllers;

use App\Models\Puasa;
use Illuminate\Http\Request;

class PuasaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPuasa = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [40, 45, 80, 71, 96],
        ];
        return view('puasa.index', compact(['dataPuasa']));
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
     * @param  \App\Models\Puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function show(Puasa $puasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function edit(Puasa $puasa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puasa $puasa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puasa  $puasa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puasa $puasa)
    {
        //
    }
}
