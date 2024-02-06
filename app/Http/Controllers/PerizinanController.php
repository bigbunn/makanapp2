<?php

namespace App\Http\Controllers;

use App\Models\Perizinan;
use App\Models\Taruna;
use App\Models\Kelas;
use App\Models\Unit;
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
        $keluarall = Perizinan::where('tipe_izin','keluar')->get();
        $bermalamall = Perizinan::where('tipe_izin','bermalam')->get();
        $pesiarall = Perizinan::where('tipe_izin','pesiar')->get();

        $taruna = Taruna::all();        
        $kelas_taruna= Kelas::all();
        $unit_taruna= Unit::all();


        $dataPerizinan = [
            'labels'=>['January', 'February', 'March', 'April', 'May'],
            'dataIzinKeluar'=>[2, 1, 4, 24, 10],
            'dataIzinPesiar'=>[40, 45, 80, 71, 96],
            'dataIzinBermalam'=>[20, 25, 20, 11, 36],
        ];

        return view('perizinan.index',[
            'keluarall'=>$keluarall,
            'bermalamall'=>$bermalamall,
            'pesiarall'=>$pesiarall,
            'taruna'=>$taruna,
            'kelas_taruna'=>$kelas_taruna,
            'unit_taruna'=>$unit_taruna
        ], compact(['dataPerizinan']));
    }

    public function izinpesiarindex(){
        $pesiarall = Perizinan::where('tipe_izin','pesiar')->get();
        $taruna = Taruna::all();
        
        $kelas_taruna= Kelas::all();
        $unit_taruna= Unit::all();

        $datapesiar=Perizinan::where([['user_id',Auth()->user()->id],['tipe_izin','pesiar']])->get();
        return view('perizinan.izinpesiar',['datapesiar'=>$datapesiar,'pesiarall'=>$pesiarall,'taruna'=>$taruna,'kelas_taruna'=>$kelas_taruna,'unit_taruna'=>$unit_taruna]);
    }

    public function izinbermalamindex(){
        $bermalamall = Perizinan::where('tipe_izin','bermalam')->get();
        $taruna = Taruna::all();
        
        $kelas_taruna= Kelas::all();
        $unit_taruna= Unit::all();

        $databermalam=Perizinan::where([['user_id',Auth()->user()->id],['tipe_izin','bermalam']])->get();
        return view('perizinan.izinbermalam',['databermalam'=>$databermalam,'bermalamall'=>$bermalamall,'taruna'=>$taruna,'kelas_taruna'=>$kelas_taruna,'unit_taruna'=>$unit_taruna]);
    }

    public function izinkeluarindex(){
        $datakeluar=Perizinan::where([['user_id',Auth()->user()->id],['tipe_izin','keluar']])->get();
        return view('perizinan.izinkeluar',['datakeluar'=>$datakeluar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    public function createIzinPesiar(Request $request){
        $this->validate($request,[
            'jam_mulai'=>'required',
            'jam_selesai'=>'required',
            'tanggal'=>'required',
            'alamat'=>'required',
            'alasan'=>'required'
        ]);

        if(isset($request->user_id)){
            $user_id=$request->user_id;
        }else{
            $user_id=Auth()->user()->id;
        }

        $cekPesiar = Perizinan::where([['tipe_izin','pesiar'],['user_id',$user_id],['tanggal_mulai',$request->tanggal]])->get();
        if(!isset($cekPesiar[0])){
            if($request->dikurangi==true){
                $dikurangi=true;
            }else{
                $dikurangi=false;
            }
            Perizinan::create([
                'user_id'=>$user_id,
                'tipe_izin'=>'pesiar',
                'tanggal_mulai'=>$request->tanggal,
                'tanggal_selesai'=>$request->tanggal,
                'jam_mulai'=>$request->jam_mulai,
                'jam_selesai'=>$request->jam_selesai,
                'alamat'=>$request->alamat,
                'alasan'=>$request->alasan,
                'isDikurangi'=>$dikurangi,
            ]);
        }

        return redirect('perizinan/izinpesiar');
    }

    public function createIzinBermalam(Request $request){
        $this->validate($request,[
            'tanggal_mulai'=>'required',
            'tanggal_selesai'=>'required',
            'alamat'=>'required',
            'alasan'=>'required'
        ]);

        $jam_mulai="13:30:00";
        $jam_selesai="19:30:00";

        if(isset($request->user_id)){
            $user_id=$request->user_id;
        }else{
            $user_id=Auth()->user()->id;
        }

        $cekBermalam = Perizinan::where([['tipe_izin','bermalam'],['user_id',$user_id],['tanggal_mulai',$request->tanggal_mulai]])->get();

        if(!isset($cekBermalam[0])){
            Perizinan::create([
                'user_id'=>$user_id,
                'tipe_izin'=>'bermalam',
                'tanggal_mulai'=>$request->tanggal_mulai,
                'tanggal_selesai'=>$request->tanggal_selesai,
                'jam_mulai'=>$jam_mulai,
                'jam_selesai'=>$jam_selesai,
                'alamat'=>$request->alamat,
                'alasan'=>$request->alasan,
                'isDikurangi'=>true,
            ]);
        }

        return redirect('perizinan/izinbermalam');
    }

    public function createIzinKeluar(Request $request){
        $this->validate($request,[
            'jam_mulai'=>'required',
            'jam_selesai'=>'required',
            'tanggal_mulai'=>'required',
            'tanggal_selesai'=>'required',
            'alamat'=>'required',
            'alasan'=>'required',
        ]);

        if(isset($request->user_id)){
            $user_id=$request->user_id;
        }else{
            $user_id=Auth()->user()->id;
        }

        $cekKeluar = Perizinan::where([['tipe_izin','keluar'],['user_id',$user_id],['tanggal_mulai',$request->tanggal_mulai]])->get();
        
        if(!isset($cekKeluar[0])){
            if($request->diuangkan==true || $request->dibox==true){
                $dikurangi=false;

                if($request->diuangkan==true){
                    $diuangkan=true;
                    $keterangan_diuangkan=$request->keterangan_diuangkan;
                }else{
                    $diuangkan=false;
                    $keterangan_diuangkan="";
                }

                if($request->dibox==true){
                    $dibox=true;
                    $keterangan_dibox=$request->keterangan_dibox;
                }else{
                    $dibox=false;
                    $keterangan_dibox="";
                }
            }
            else{
                $diuangkan=false;
                $keterangan_diuangkan="";
                $dibox=true;
                $keterangan_dibox=$request->keterangan_dibox;
                $dikurangi=true;
            }
            Perizinan::create([
                'user_id'=>$user_id,
                'tipe_izin'=>'keluar',
                'tanggal_mulai'=>$request->tanggal_mulai,
                'tanggal_selesai'=>$request->tanggal_selesai,
                'jam_mulai'=>$request->jam_mulai,
                'jam_selesai'=>$request->jam_selesai,
                'alamat'=>$request->alamat,
                'alasan'=>$request->alasan,
                'isDikurangi'=>$dikurangi,
                'isDibox'=>$dibox,
                'isDiuangkan'=>$diuangkan,
                'keterangan_dibox'=>$keterangan_dibox,
                'keterangan_diuangkan'=>$keterangan_diuangkan,
                
            ]);
        }

        return redirect('perizinan/izinkeluar');
    }

    public function approve(Request $request){
        $this->validate($request,[
            'perizinan_id'=>'required'
        ]);

        $perizinan = Perizinan::where('id',$request->perizinan_id)->update([
            'isApproved'=>True
        ]);

        return redirect("perizinan/all");
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
