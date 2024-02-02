<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMakanController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PantanganController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\PuasaController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\TarunaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return redirect()->route('dashboard');
    
});
Route::post('/identity',[TarunaController::class,'create'])->name('identity');
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', [RedirectController::class, 'cek'])->name('dashboard');
    Route::middleware('checkrole:1')->get('/admin', [DashboardController::class, 'index'])->name('admin');
    Route::middleware('checkrole:2')->get('/taruna', [TarunaController::class, 'index'])->name('taruna');
    Route::group(['middleware' => 'checkrole:1','prefix'=> 'datamakan','as'=> 'datamakan.'], function() {
        Route::get('/buat', [DataMakanController::class,'buat'])->name('buat');
        Route::get('/index', [DataMakanController::class,'index'])->name('index');
        Route::get('/menu', [MenuController::class,'index'])->name('menu');
    });
    Route::group(['prefix'=> 'pantangan','as'=> 'pantangan.'], function() {
        Route::get('/pengajuan',[PantanganController::class,'pengajuan'])->name('pengajuan');
        Route::post('create',[PantanganController::class,'create'])->name('create');
        Route::middleware('checkrole:1')->get('/index', [PantanganController::class,'index'])->name('index');
    });
    Route::group(['prefix'=> 'keluhan','as'=> 'keluhan.'], function() {
        Route::get('/laporan', [KeluhanController::class,'laporan'])->name('laporan');
        Route::post('/create', [KeluhanController::class,'create'])->name('create');

        Route::middleware('checkrole:1')->get('/index', [KeluhanController::class,'index'])->name('index');
    });
    Route::group(['prefix'=> 'puasa','as'=> 'puasa.'], function() {
        Route::get('/daftar', [PuasaController::class,'daftar'])->name('daftar');
        Route::post('/create',[PuasaController::class,'create'])->name('create');
        Route::get('/hapus/{id}',[PuasaController::class,'delete'])->name('hapus');

        Route::middleware('checkrole:1')->get('/index', [PuasaController::class,'index'])->name('index');
    });
    Route::group(['prefix'=> 'perizinan','as'=> 'perizinan.'], function() {
        Route::middleware('checkrole:1')->get('/all', [PerizinanController::class,'index'])->name('all');
        Route::post('/create',[PerizinanController::class,'create'])->name('create');
        Route::get('/izinbermalam', [PerizinanController::class,'izinbermalamindex'])->name('izinbermalam');
        Route::get('/izinpesiar', [PerizinanController::class,'izinpesiarindex'])->name('izinpesiar');
        Route::get('/izinkeluar', [PerizinanController::class,'izinkeluarindex'])->name('izinkeluar');
    });
});