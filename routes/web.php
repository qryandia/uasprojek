<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataDaftarController;
use App\Http\Controllers\UlasanController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('lat', function () {
    return view('latihan');
});

Route::get('home', function () {
    return view('index');
});
Route::get('home', [UlasanController::class, 'index'])->name('index');


Route::get('dashboard', function () {
    return view('admin.dashboard');
});

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Admin and Siswa Dashboard
Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/siswa/dashboard', [SiswaController::class, 'index'])->name('dashboard');
});

// Murid routes
Route::get('kelas', function () {
    return view('siswa.kelas');
})->name('kelas');

Route::get('dashboard', function () {
    return view('siswa.dashboard');
})->name('dashboard');

Route::get('/kelas', [KelasController::class, 'showKelas'])->name('kelas');
Route::get('/kelas/{kelas_id}/daftar', [KelasController::class, 'showForm'])->name('daftar.kelas');
Route::post('/kelas/{kelas_id}/daftar', [KelasController::class, 'prosesPendaftaran'])->name('daftar.proses');

// Detail pesanan
Route::get('/detail-pesanan/{id_registrasi}', [DetailPesananController::class, 'show'])->name('siswa.detail');
Route::get('/detail-pesanan/{id_registrasi}/download', [DetailPesananController::class, 'downloadPesanan'])->name('siswa.pdf_detail');

// Akhir
Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('siswa.dashboard');

// ulasan
Route::get('/ulasan', [UlasanController::class, 'ulas'])->name('ulasan.index');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');
// akhir ulasan


// admin tcuy
Route::get('/admin/dashboard', [AdminController::class, 'showChart'])->name('admin.dashboard');
Route::get('/admin/datadaftar', [DataDaftarController::class, 'index'])->name('datadaftar');

// download
Route::get('admin/export/excel', [RegistrasiController::class, 'excel'])->name('admin.excel');


// postingan admin nder
Route::get('/admin/datapostingan', [AdminController::class, 'showPostingan'])->name('admin.postingan');
Route::get('/admin/datapostingan/{id}/edit', [AdminController::class, 'editPostingan'])->name('admin.postingan.edit');
Route::put('/admin/datapostingan/{id}/update', [AdminController::class, 'updatePostingan'])->name('admin.postingan.update');
Route::get('/datapostingan', [PostinganController::class, 'index'])->name('datapostingan.index');
























// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\SiswaController;
// use App\Http\Controllers\KelasController;
// use App\Http\Controllers\RegistrasiController;
// use App\Http\Controllers\DetailPesananController;
// use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('lat', function () {
//     return view('latihan');
// });

// Route::get('home', function () {
//     return view('index');
// });

// Route::get('dashboard', function () {
//     return view('admin.dashboard');
// });

// // Route::get('login', function () {
// //     return view('login.login');
// // });

// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'register']);

// Route::middleware('auth')->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/siswa/dashboard', [SiswaController::class, 'index'])->name('siswa.dashboard');
// });



// // murid
// Route::get('kelas', function () {
//     return view('siswa.kelas');
// })->name('kelas');
// Route::get('dashboard', function () {
//     return view('siswa.dashboard');
// })->name('dashboard');
// Route::get('/kelas', [KelasController::class, 'showKelas'])->name('kelas');

// Route::get('/kelas/{kelas_id}/daftar', [KelasController::class, 'showForm'])->name('daftar.kelas');
// Route::post('/kelas/{kelas_id}/daftar', [KelasController::class, 'prosesPendaftaran'])->name('daftar.proses');

// // detail
// Route::get('/detail-pesanan/{id_registrasi}', [DetailPesananController::class, 'show'])->name('siswa.detail');
// // akhir detail ygy

// // donlod gus
// Route::get('/detail-pesanan/{id_registrasi}/download', [DetailPesananController::class, 'downloadPesanan'])->name('siswa.pdf_detail');
// // akhir gus

// Route::get('/siswa/dashboard', [DashboardController::class, 'index'])->name('siswa.dashboard');


// // akhir murid