<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $primaryKey = 'id_kelas';
    protected $fillable = ['nama_kelas', 'mapel', 'program_komputer'];

    public function harga()
    {
        return $this->hasOne(Harga::class, 'id_kelas', 'id_kelas');
    }

    public function registrasiSiswa()
    {
        return $this->hasMany(RegistrasiSiswa::class, 'id_kelas'); 
    }

}
