<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perizinan extends Model
{
    use HasFactory;
    protected $fillable = ['tipeizin','tanggal_mulai','jam_mulai','tanggal_selesai','jam_selesai','alamat_tujuan','alasan','isApproved','isDikurangi','isDibox','isDone'];
}
