<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;
use Validator;


class RegisterController extends Controller
{

    public function showRegisterForm()
    {
        return view('login.registrasi'); 
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:pengguna,email',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'email.unique' => 'Email yang dimasukkan sudah terdaftar. Silakan coba yang lain.',
            'password.min' => 'Password harus memiliki minimal 8 karakter.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        Pengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'murid',
        ]);

        return redirect()->back()->with('success', 'Kamu berhasil terdaftar! Silahkan Login');
    }



}
