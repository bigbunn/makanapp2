<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal','waktu_makan','nasi','lauk_satu','lauk_dua','sayur','buah','komplemen'];

    // public static function boot(){
    //     parent::boot();

    //     static::creating(function ($menu) {
    //         $tanggal = $menu->tanggal;
    //         $waktu_makan = $menu->waktu_makan;

    //         $validator = validator(
    //             compact('tanggal', 'waktu_makan'),
    //             [
    //                 'tanggal' => 'unique:menus,tanggal,NULL,id,waktu_makan,' . $waktu_makan,
    //             ]
    //         );

    //         if ($validator->fails()) {
    //             // Kembalikan false untuk membatalkan operasi penciptaan
    //             return false;
    //         }
    //     });
    // }
}
