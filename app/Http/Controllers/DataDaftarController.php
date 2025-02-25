<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiSiswa; 

class DataDaftarController extends Controller
{
    public function index()
    {
        $dataRegistrasi = RegistrasiSiswa::all();

        return view('admin.datadaftar', compact('dataRegistrasi'));
    }
}
