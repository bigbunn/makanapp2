<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use Illuminate\Http\Request;

class PerizinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPerizinan = [
            'labels'=>['January', 'February', 'March', 'April', 'May'],
            'dataIzinKeluar'=>[2, 1, 4, 24, 10],
            'dataIzinPesiar'=>[40, 45, 80, 71, 96],
            'dataIzinBermalam'=>[20, 25, 20, 11, 36],
        ];
        return view('perizinan.index', compact(['dataPerizinan']));
    }

    public function izinpesiarindex(){
        $datapesiar=Perizinan::where([['tipe_izin','pesiar'],['user_id',Auth()->user()->id]])->get();
        return view('perizinan.izinpesiar',['datapesiar'=>$datapesiar]);
    }

    public function izinbermalamindex(){
        return view('perizinan.izinbermalam');
    }

    public function izinkeluarindex(){
        return view('perizinan.izinkeluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function createIzinPesiar(Request $request){
        $this->validate($request,[
            'jam_mulai'=>'required',
            'jam_selesai'=>'jam_selesai',
            'tanggal'=>'required',
            'alamat'=>'required',
            'alasan'=>'required'
        ]);

        if(!isset($request->user_id)){
            $user_id=Auth()->user()->id;

            $cekPesiar = Perizinan::where([['tipe_izin','pesiar'],['user_id',$user_id],['tanggal_mulai',$request->tanggal]])->get();

            if(!isset($cekPesiar[0])){
                Pesiar::create([
                    'user_id'=>$user_id,
                    'tipe_izin'=>'pesiar',
                    'tanggal_mulai'=>$request->tanggal,
                    'tanggal_selesai'=>$request->tanggal,
                    'jam_mulai'=>$request->jam_mulai,
                    'jam_selesai'=>$request->jam_selesai,
                    'alamat'=>$request->alamat,
                    'alasan'=>$request->alasan
                ]);
            }
        }

        return redirect('perizinan/izinpesiar');
    }

    public function createIzinBermalam(Request $request){
        $this->validate($request,[
            'tanggal'=>'required',
            'alamat'=>'required',
            'alasan'=>'required'
        ]);
    }

    public function createIzinKeluar(Request $request){
        $this->validate($request,[
            'tanggal'=>'required',
            'alamat'=>'required',
            'alasan'=>'required'
        ]);
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
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function show(Perizinan $perizinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perizinan $perizinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perizinan $perizinan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perizinan  $perizinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perizinan $perizinan)
    {
        //
    }
}
