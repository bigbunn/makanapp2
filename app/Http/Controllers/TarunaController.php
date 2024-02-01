<?php

namespace App\Http\Controllers;

use App\Models\Taruna;
use App\Models\Kelas;
use App\Models\Unit;
use App\Models\Pantangan;
use App\Models\Keluhan;
use App\Models\Puasa;
use App\Models\Perizinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $user_id = Auth()->user()->id;
        $taruna = Taruna::where('user_id',$user_id)->get();
        if(isset($taruna[0])){
            $kelas_taruna= Kelas::where('id',$taruna[0]->kelas_id)->get();
            $unit_taruna= Unit::where('id',$taruna[0]->unit_id)->get();

            $pantangan_taruna = Pantangan::where('user_id',$user_id)->get();
            $keluhan_taruna = Keluhan::where('user_id',$user_id)->get();
            $perizinan_taruna = Perizinan::where('user_id',$user_id)->get();
            $puasa_taruna = Puasa::where('user_id',$user_id)->get();
            return view('taruna.dashboard', [
                'taruna'=>$taruna,
                'kelas_taruna'=>$kelas_taruna,
                'unit_taruna'=>$unit_taruna,
                'pantangan_taruna'=>$pantangan_taruna,
                'keluhan_taruna'=>$keluhan_taruna,
                'perizinan_taruna'=>$perizinan_taruna,
                'puasa_taruna'=>$puasa_taruna
            ]);
        }
        else{
            $kelas = Kelas::all();
            $unit = Unit::all();
            return view('taruna.identity',['kelas'=>$kelas,'unit'=>$unit]);
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'npm' => 'required',
            'kelas' => 'required',
            'unit'=>'required',
            'asrama' => 'required',
            'jenis_kelamin'=>'required'
        ]);

        Taruna::create([
            'user_id'=>Auth()->user()->id,
            'nama_lengkap'=>Auth()->user()->name,
            'npm'=>$request->npm,
            'kelas_id'=>$request->kelas,
            'unit_id'=>$request->unit,
            'asrama'=>$request->asrama,
            'jenis_kelamin'=>$request->jenis_kelamin
        ]);

        return redirect("/dashboard");
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
     * @param  \App\Models\Taruna  $taruna
     * @return \Illuminate\Http\Response
     */
    public function show(Taruna $taruna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taruna  $taruna
     * @return \Illuminate\Http\Response
     */
    public function edit(Taruna $taruna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taruna  $taruna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taruna $taruna)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taruna  $taruna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taruna $taruna)
    {
        //
    }
}
