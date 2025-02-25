<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RegistrasiSiswa extends Model
{
    use HasFactory;

    protected $table = 'registrasi_siswa';
    protected $primaryKey = 'id_registrasi';

    protected $fillable = [
        'id_pengguna',
        'id_kelas',
        'nama_panggilan',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'no_hp',
        'tempat_les',
        'les_dimulai',
        'hari',  
        'waktu',
        'catatan'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id_pengguna');
    }

    public function registrasi()
    {
        return $this->hasMany(Registrasi::class); 
    }

}
