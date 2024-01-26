<?php

use Illuminate\Support\Facades\Route;

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'components', 'as' => 'components.'], function() {
        Route::get('/alert', function () {
            return view('admin.component.alert');
        })->name('alert');
        Route::get('/accordion', function () {
            return view('admin.component.accordion');
        })->name('accordion');
    });
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
        Route::get('/index', function () {
            return view('pantangan.index');
        })->name('index');
    });
    Route::group(['prefix'=> 'keluhan','as'=> 'keluhan.'], function() {
        Route::get('/laporan', function () {
            return view('keluhan.laporan');
        })->name('laporan');
        Route::get('/index', function () {
            return view('keluhan.index');
        })->name('index');
    });
    Route::group(['prefix'=> 'puasa','as'=> 'puasa.'], function() {
        Route::get('/daftar', function () {
            return view('puasa.daftar');
        })->name('daftar');
        Route::get('/index', function () {
            return view('puasa.index');
        })->name('index');
    });
});