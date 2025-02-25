<?php

namespace App\Http\Controllers;

use App\Http\Controllers\UlasanController;
use App\Http\Controllers\PostinganController;

class HomeController extends Controller
{
    public function index()
    {
        $ulasan = app(UlasanController::class)->index();

        $postingan = app(PostinganController::class)->index();  

        return view('index', compact('ulasan', 'postingan'));
    }
}

