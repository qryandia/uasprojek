<?php

namespace App\Http\Controllers;

use App\Models\Kelas;  
use App\Models\RegistrasiSiswa;
use App\Models\Postingan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function showChart()
    {
    
        $kelas = Kelas::all();

        $dataLabel = [];
        $dataStock = [];
        $totalPendaftar = 0;

        foreach ($kelas as $k) {
            $dataLabel[] = $k->nama_kelas;
            $dataStock[] = $k->registrasiSiswa()->count(); 
            $totalPendaftar += $k->registrasiSiswa()->count(); 
        }

        return view('admin.dashboard', compact('dataLabel', 'dataStock', 'totalPendaftar'));
    }

    public function showPostingan()
    {
        $postingan = Postingan::all();
        return view('admin.data_postingan', compact('postingan'));
    }

    public function editPostingan($id)
    {
        $postingan = Postingan::findOrFail($id);
        return view('admin.edit_postingan', compact('postingan'));
    }

    public function updatePostingan(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_postingan' => 'required|string|max:255',
            'isi_postingan' => 'required|string',
        ]);

        $postingan = Postingan::findOrFail($id);

        $postingan->update($validated);
        session()->flash('success', 'Postingan berhasil diperbarui!');

        return redirect()->route('admin.postingan');
    
    }
    

}
