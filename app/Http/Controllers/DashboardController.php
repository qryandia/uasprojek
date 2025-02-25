<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\RegistrasiSiswa;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     $user = auth()->user();

    //     $registrasiSiswa = RegistrasiSiswa::where('id', $user->id)->first();

    //     $isRegistered = $registrasiSiswa ? true : false;

    //     $registrasiSiswaWithKelas = $user->registrasiSiswa()->with('kelas')->get();


    //     return view('siswa.dashboard', compact('registrasiSiswaWithKelas', 'isRegistered'));
    // }
    public function dashboard()
    {
        $user = auth()->user(); 
        
        $registrasiSiswa = RegistrasiSiswa::where('id_pengguna', $user->id)->get();
        
        $isRegistered = $registrasiSiswa->isNotEmpty();
        
        return view('siswa.dashboard', compact('registrasiSiswa', 'isRegistered'));
    }

    public function index()
    {
        return view('siswa.dashboard');
    }

}
