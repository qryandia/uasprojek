<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'pengguna'; 

    protected $fillable = ['name', 'email', 'password', 'role'];  

    protected $hidden = ['password', 'remember_token']; 

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registrasiSiswa()
    {
        return $this->hasMany(RegistrasiSiswa::class, 'id_pengguna');
    }

    public function ulasans()
    {
        return $this->hasMany(Ulasan::class, 'id_pengguna', 'id');
    }
}

