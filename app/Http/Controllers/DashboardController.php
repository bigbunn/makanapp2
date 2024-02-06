<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pantangan;
use App\Models\Keluhan;
use App\Models\Puasa;
use App\Models\Perizinan;
use App\Models\Datamakan;

class DashboardController extends Controller
{
    
    public function index(){
        $pantangan = Pantangan::all();
        $keluhan = Keluhan::all();
        $puasa = Puasa::all();
        $perizinan = Perizinan::all();
        $datamakan = Datamakan::all();
        $dataKeluhan = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];
        $dataPuasa = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [40, 45, 80, 71, 96],
        ];
        $dataPantangan = [
            'labels'=> ['Udang','Cumi','Bubur','Lainya'],
            'data'=> [10, 2, 4, 13],
            ];
        $dataPerizinan = [
            'labels'=>['January', 'February', 'March', 'April', 'May'],
            'dataIzinKeluar'=>[2, 1, 4, 24, 10],
            'dataIzinPesiar'=>[40, 45, 80, 71, 96],
            'dataIzinBermalam'=>[20, 25, 20, 11, 36],
        ];
        return view('dashboard', compact(['dataKeluhan','dataPuasa','dataPantangan','dataPerizinan','pantangan','keluhan','puasa','perizinan','datamakan']));
    }

    
}
