<?php

namespace App\Http\Controllers;

use App\Models\Puasa;
use App\Models\Taruna;
use App\Models\Kelas;
use App\Models\Unit;
use App\Models\User;
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

    public function daftar(){

        $puasa = Puasa::all();
        $i=0;
        $datapuasa;
        foreach($puasa as $p){
            $tarunaindex = Taruna::where('user_id',$p->user_id)->get();
            $kelasindex = Kelas::where('id',$tarunaindex[0]->kelas_id)->get();
            $unitindex = Unit::where('id',$tarunaindex[0]->unit_id)->get();
            $datapuasa[$i]=[
                'puasa_id'=>$p->id,
                'nama_taruna' => $tarunaindex[0]->nama_lengkap,
                'kelas_taruna' => $kelasindex[0]->nama_kelas,
                'unit_taruna' => $unitindex[0]->nama_unit,
                'asrama_taruna' => $tarunaindex[0]->nomor_kamar,
                'tanggal_puasa'=>$p->tanggal_puasa
            ];

            $i+=1;
        }
        if(isset($datapuasa[0])){
            return view ('puasa.daftar',['datapuasa'=>$datapuasa]);
        }else{
            return view ('puasa.daftar');
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
            'tanggal'=>'required'
        ]);

        $cekPuasa = Puasa::where([['user_id',Auth()->user()->id],['tanggal_puasa',$request->tanggal]],)->get();

        if(isset($cekPuasa[0])){
            return redirect('puasa/daftar');
        }else{
            Puasa::create([
                'user_id'=>Auth()->user()->id,
                'tanggal_puasa'=>$request->tanggal,
            ]);
        }
        return redirect('puasa/daftar');
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

    public function delete($id)
    {
        $puasa = Puasa::find($id);
        $puasa->delete();
        return redirect("puasa/daftar");
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
