<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $table = 'ulasan';
    public $timestamps = false;

    protected $fillable = [
        'id_pengguna',
        'judul',
        'isi_ulasan',
        'rating',
        'tanggal'
    ];
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna', 'id');
    }

    public function ulasans()
    {
        return $this->hasMany(Ulasan::class, 'id_pengguna', 'id');
    }

}
