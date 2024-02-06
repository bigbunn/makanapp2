<?php

namespace App\Http\Controllers;

use App\Models\MenuPengganti;
use Illuminate\Http\Request;

class MenuPenggantiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'menu_pengganti'=>'required',
            'pantangan_id'=> 'required',
        ]);

        MenuPengganti::create([
            'user_id'=>$request->user_id,
            'menu_id'=>$request->menu_id,
            'pantangan_id'=>$request->pantangan_id,
            'menu_pengganti'=>$request->menu_pengganti
        ]);

        return redirect('datamakan/menu');
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
     * @param  \App\Models\MenuPengganti  $menuPengganti
     * @return \Illuminate\Http\Response
     */
    public function show(MenuPengganti $menuPengganti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuPengganti  $menuPengganti
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuPengganti $menuPengganti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuPengganti  $menuPengganti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuPengganti $menuPengganti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuPengganti  $menuPengganti
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuPengganti $menuPengganti)
    {
        //
    }
}
