<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMakanController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PantanganController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\PuasaController;

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
Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
    //     Route::get('/alert', function () {
    //         return view('admin.component.alert');
    //     })->name('alert');
    //     Route::get('/accordion', function () {
    //         return view('admin.component.accordion');
    //     })->name('accordion');
    // });
    Route::group(['prefix'=> 'datamakan','as'=> 'datamakan.'], function() {
        Route::get('/buat', function () {
            return view('datamakan.buat');
        })->name('buat');
        Route::get('/index', function () {
            return view('datamakan.index');
        })->name('index');
        Route::get('/menu', function () {
            return view('datamakan.menu');
        })->name('menu');
    });
    Route::group(['prefix'=> 'pantangan','as'=> 'pantangan.'], function() {
        Route::get('/pengajuan', function () {
            return view('pantangan.pengajuan');
        })->name('pengajuan');
        Route::get('/index', [PantanganController::class,'index'])->name('index');
    });
    Route::group(['prefix'=> 'keluhan','as'=> 'keluhan.'], function() {
        Route::get('/laporan', function () {
            return view('keluhan.laporan');
        })->name('laporan');
        Route::get('/index', [KeluhanController::class,'index'])->name('index');
    });
    Route::group(['prefix'=> 'puasa','as'=> 'puasa.'], function() {
        Route::get('/daftar', function () {
            return view('puasa.daftar');
        })->name('daftar');
        Route::get('/index', [PuasaController::class,'index'])->name('index');
    });
    Route::group(['prefix'=> 'perizinan','as'=> 'perizinan.'], function() {
        Route::get('/all', [PerizinanController::class,'index'])->name('all');
        Route::get('/izinbermalam', function () {
            return view('perizinan.izinbermalam');
        })->name('izinbermalam');
        Route::get('/izinpesiar', function () {
            return view('perizinan.izinpesiar');
        })->name('izinpesiar');
        Route::get('/index', function () {
            return view('perizinan.izinkeluar');
        })->name('izinkeluar');
    });
});