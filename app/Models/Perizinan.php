<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'tipe_izin',
        'tanggal_mulai',
        'jam_mulai',
        'tanggal_selesai',
        'jam_selesai',
        'alamat',
        'alasan',
        'isApproved',
        'isDiuangkan',
        'isDikurangi',
        'isDibox',
        'keterangan_diuangkan',
        'keterangan_dibox',
        'isDone'];
}
