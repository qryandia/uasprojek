<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use Illuminate\Http\Request;


class PostinganController extends Controller
{
    public function tampilkanPostingan()
{
    $postingan = DB::table('postingan')->where('id', 1)->first(); 
    return view('index', compact('postingan'));
}


}
