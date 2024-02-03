<?php

namespace App\Http\Controllers;

use App\Models\Pantangan;
use App\Models\User;
use App\Models\Taruna;
use App\Models\Kelas;
use App\Models\Unit;
use Illuminate\Http\Request;

class PantanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        $taruna=Taruna::all();
        $pantangan=Pantangan::all();
        $kelas=Kelas::all();
        $unit=Unit::all();

        $dataPantangan = [
            'labels'=> ['Udang','Cumi','Bubur','Lainya'],
            'data'=> [10, 2, 4, 13],
            ];
        return view('pantangan.index',[
            'user'=>$user,
            'taruna'=>$taruna,
            'pantangan'=>$pantangan,
            'kelas'=>$kelas,
            'unit'=>$unit
        ], compact(['dataPantangan']));
    }

    public function pengajuan(){
        $datapantangan=Pantangan::where("user_id",Auth()->user()->id)->get();
        return view ('pantangan.pengajuan',['datapantangan'=>$datapantangan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request,[
            'user_id'=>'required',
            'tanggal'=>'required',
            'lauk_pantangan'=>'required',
        ]);

        if($request->lauk_pantangan=="lainnya"){
            Pantangan::create([
                'user_id'=>$request->user_id,
                'tanggal_mulai'=>$request->tanggal,
                'lauk_pantangan'=>$request->lauk_pantangan,
                'pantangan_lainnya'=>$request->pantangan_lainnya,
                'keterangan_pantangan'=>$request->keterangan_pantangan
            ]);
        }else{
            Pantangan::create([
                'user_id'=>$request->user_id,
                'tanggal_mulai'=>$request->tanggal,
                'lauk_pantangan'=>$request->lauk_pantangan,
                'keterangan_pantangan'=>$request->keterangan_pantangan
            ]);
        }
        return redirect('pantangan/pengajuan');
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
     * @param  \App\Models\Pantangan  $pantangan
     * @return \Illuminate\Http\Response
     */
    public function show(Pantangan $pantangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pantangan  $pantangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pantangan $pantangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pantangan  $pantangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pantangan $pantangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pantangan  $pantangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pantangan $pantangan)
    {
        //
    }
}
