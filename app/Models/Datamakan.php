<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datamakan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'ruang_makan_sahur',
        'ruang_makan_pagi',
        'ruang_makan_pagi_snack',
        'ruang_makan_siang',
        'ruang_makan_malam',
        'ruang_makan_malam_snack',
        'ruang_makan_takjil',
        'sampataloka_sahur',
        'sampataloka_pagi',
        'sampataloka_pagi_snack',
        'sampataloka_siang',
        'sampataloka_malam',
        'sampataloka_malam_snack',
        'sampataloka_takjil',
        'is_puasa',
        'is_approved',
        'is_include_tambahan'
    ];

    public function keteranganDatamakans(){
        return $this->hasMany(KeteranganDatamakan::class);
    }
    
}
