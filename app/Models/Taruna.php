<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taruna extends Model
{
    use HasFactory;
    
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    protected $fillable = ['npm','kelas_id','unit_id','nomor_kamar','jenis_kelamin'];
}
