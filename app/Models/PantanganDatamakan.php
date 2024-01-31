<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PantanganDatamakan extends Model
{
    use HasFactory;

    protected $fillable = ['datamakan_id','user_id','pantangan'];
}
