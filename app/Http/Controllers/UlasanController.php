<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ulasan;
use App\Models\Pengguna;

class UlasanController extends Controller
{
    public function ulas()
    {
        $ulasans = Ulasan::with('pengguna')->get(); 
        return view('siswa.ulasan', compact('ulasans'));
    }

    public function index()
    {
        $ulasans = Ulasan::with('pengguna')
                ->inRandomOrder() 
                ->take(3)
                ->get(); 
        return view('index', compact('ulasans'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'isi_ulasan' => 'required',
            'rating' => 'required|integer|between:1,5',
        ]);

        Ulasan::create([
            'id_pengguna' => auth()->id(), 
            'isi_ulasan' => $request->isi_ulasan,
            'rating' => $request->rating,
            'tanggal' => now(), 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('ulasan.index')->with('success', 'Ulasan berhasil ditambahkan!');
    }
}
