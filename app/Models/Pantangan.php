<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pantangan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','tanggal_mulai','lauk_pantangan','keterangan_pantangan','isApproved','isDone'];
}
