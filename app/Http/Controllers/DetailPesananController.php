<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiSiswa;
use App\Models\Harga;
use App\Models\Kelas;
use App\Models\Pengguna;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
// use Barryvdh\DomPDF\Facade as PDF;
use Barryvdh\DomPDF\Facade\Pdf;




class DetailPesananController extends Controller
{
    public function show($id_registrasi) 
    {
        $registrasi = RegistrasiSiswa::where('id_registrasi', $id_registrasi)->first(); 

        $harga = Harga::where('id_kelas', $registrasi->id_kelas)->first(); 

        $kelas = Kelas::where('id_kelas', $registrasi->id_kelas)->first(); 

        $pengguna = $registrasi->pengguna;

        return view('siswa.detail', compact('registrasi', 'harga', 'kelas', 'pengguna'));
    }
    
    public function downloadPesanan($id_registrasi)
    {
        $registrasi = RegistrasiSiswa::findOrFail($id_registrasi);
        $harga = Harga::where('id_kelas', $registrasi->id_kelas)->first(); 

        $kelas = Kelas::where('id_kelas', $registrasi->id_kelas)->first(); 

        $pengguna = $registrasi->pengguna;

        $pdf = PDF::loadView('siswa.pdf_detail', compact('registrasi', 'harga', 'kelas', 'pengguna'));
        
        return $pdf->download('detail_pesanan_' . $registrasi->id_registrasi . '.pdf');
    }

}
