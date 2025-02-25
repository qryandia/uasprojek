<?php

namespace App\Http\Controllers;
use App\Model\Pengguna;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa.dashboard');
    }
}
