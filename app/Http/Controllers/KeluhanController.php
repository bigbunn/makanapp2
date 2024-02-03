<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::all();
        $keluhan= Keluhan::all();
        $dataKeluhan = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        return view('keluhan.index', [
            'keluhan'=>$keluhan,
            'user'=>$user
        ],compact(['dataKeluhan']));
    }

    public function laporan(){
        $datamenu = Menu::all();
        // $datakeluhan = Keluhan::where(['user_id',Auth()->user()->id])->get();
        $datakeluhan = Keluhan::all();
        return view("keluhan.laporan",['datamenu'=>$datamenu,'datakeluhan'=>$datakeluhan]);
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
            'menu_id'=>'required',
            'tanggal'=>'required',
            'waktumakan'=>'required',
            'menumakan'=>'required',
            'deskripsikeluhan'=>'required'
        ]);

        if($request->menu_id!=""){
            Keluhan::create([
                'user_id'=>$request->user_id,
                'menu_id'=>$request->menu_id,
                'tanggal'=>$request->tanggal,
                'menu_type'=>$request->menumakan,
                'keterangan_keluhan'=>$request->deskripsikeluhan
            ]);
        }
        else{
            $menu=Menu::where([['tanggal',$request->tanggal],['waktu_makan',$request->waktumakan]])->get();
            Keluhan::create([
                'user_id'=>$request->user_id,
                'menu_id'=>$menu[0]->id,
                'tanggal'=>$request->tanggal,
                'menu_type'=>$request->menumakan,
                'keterangan_keluhan'=>$request->deskripsikeluhan
            ]);
        }

        return redirect('keluhan/laporan');
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
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function show(Keluhan $keluhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluhan $keluhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keluhan $keluhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluhan  $keluhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluhan $keluhan)
    {
        //
    }
}
