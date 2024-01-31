<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal','waktu_makan','nasi','lauk_satu','lauk_dua','sayur','buah','komplemen'];
}
