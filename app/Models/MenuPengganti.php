<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPengganti extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','menu_id','pantangan_id','menu_pengganti','isRead'];
}
