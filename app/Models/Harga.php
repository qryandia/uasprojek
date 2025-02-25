<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Harga extends Model
{
    use HasFactory;

    protected $table = 'harga'; 

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas'); 
    }
}
