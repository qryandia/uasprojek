<?php

namespace App\Http\Controllers;
use App\Models\Kelas;
use App\Models\RegistrasiSiswa;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

// class KelasController extends Controller
// {
//     public function showKelas()
//     {
//         $kelas = Kelas::all();  
//         return view('siswa.kelas', compact('kelas')); 
//     }

// }

class KelasController extends Controller
{
    
    public function showKelas()
    {
        $kelas = Kelas::all();  
        return view('siswa.kelas', compact('kelas')); 
    }
    public function showForm($kelas_id)
    {
        $kelas = Kelas::find($kelas_id);
        return view('siswa.daftar', compact('kelas'));
    }

    public function show($id)
    {
        $kelas = Kelas::findOrFail($id);
        
        $harga = $kelas->harga; 

        return view('kelas.show', compact('kelas', 'harga'));
    }

    public function prosesPendaftaran(Request $request, $kelas_id)
    {
        $request->validate([
            'nama_panggilan' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'agama' => 'required|string',
            'alamat' => 'required|string',
            'no_hp' => 'required|string',
            'tempat_les' => 'required|string',
            'les_dimulai' => 'required|date',
            'hari' => 'required|string',
            'waktu' => 'required|string',
            'catatan' => 'required|string',
        ]);


        $registrasi = RegistrasiSiswa::create([
            'id_pengguna' => Auth::id(),
            'id_kelas' => $kelas_id,
            'nama_panggilan' => $request->nama_panggilan,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'tempat_les' => $request->tempat_les,
            'les_dimulai' => $request->les_dimulai,
            'hari' => $request->hari,  
            'waktu' => $request->waktu,  
            'catatan' => $request->catatan,  
        ]);

        return redirect()->route('siswa.detail', ['id_registrasi' => $registrasi->id_registrasi]);
    }
}

