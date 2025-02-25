<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\RegistrasiSiswa;
use App\Exports\MuridExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class RegistrasiController extends Controller
{
    
    public function showForm($kelasId)
    {
        $kelas = Kelas::findOrFail($kelasId);
        return view('siswa.daftar', compact('kelas'));
    }

    public function excel()
    {
        return Excel::download(new MuridExport, 'murid_alc.xlsx');
    }

    public function submitForm(Request $request, $kelasId)
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
            'id_kelas' => $kelasId, 
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
