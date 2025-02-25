@extends('layouts.master_admin')

@section('title', 'halaman dashboard alc gampengrejo')

@section('isi')

<div class="">
    <div class="d-flex">
        <div class="colkiri col-lg-4 container-fluid position-fixed" style="background-color: 0B3D91; height: 100vh; width: auto; padding-top: 90px;">
            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Profil</p>
            <div class="d-flex flex-row mb-3 align-items-center">
                <img src="{{ asset('img/user1.svg') }}" width="40" height="42" alt="">
                <div class="p-2 fw-bold nama-pengguna" style="color: #FFFFFF;">
                    {{ Auth::user()->name }} 
                </div>
                <!-- <div class="p-2 fw-bold" style="color: #FFFFFF;">Siswa ALC Gampengrejo</div> -->
            </div>

            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Menu</p>
            <div class="d-flex flex-row mb-3 align-self-center">
                <img src="{{ asset('img/menuda.svg') }}" width="26" height="26" alt="">
                <div class="p-1 ps-2" style="color: #FFFFFF;">Dashboard</div>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/kelasmati.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('kelas') }}" class="p-1 ps-2 gak-garis">Kelas</a>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;;">
                <img src="{{ asset('img/ulasanmati.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('ulasan.index') }}" class="p-1 ps-2 gak-garis">Ulasan</a>
            </div>


            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/keluar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('login') }}" class="p-1 ps-2 gak-garis">Keluar</a>
            </div>
        </div>
        <div class="colkanan col-lg-8" style="margin-left: 22%; padding: 20px; padding-top: 100px;">
            <h1 class="pb-4">Haloo <span class="warna fw-bold"> {{ explode(' ', Auth::user()->name)[0] }}!!</span></h1>
            <h3 class="pb-2">Ini Daftar Kelas Kamu😍</h3>
        

            @if($isRegistered)
                @foreach($registrasiSiswa as $registrasi)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Kelas: {{ $registrasi->kelas->nama_kelas }}</h5>
                            <p class="card-text">Tempat Les: {{ $registrasi->tempat_les }}</p>
                            <!-- <p class="card-text">Kelas Dimulai: {{ $registrasi->les_dimulai}}</p> -->
                            <p class="card-text">Tanggal Daftar: {{ $registrasi->created_at->format('d M Y') }}</p>
                            <p class="card-text">Kelas Dimulai: {{ \Carbon\Carbon::parse($registrasi->les_dimulai)->format('d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-danger">Kamu belum terdaftar di kelas manapun.</p>
            @endif

            <!-- @if(isset($registrasiSiswa) && !$isRegistered)
                @foreach($registrasiSiswa as $registrasi)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Kelas: {{ $registrasi->kelas->nama_kelas }}</h5>
                            <p class="card-text">Tempat Les: {{ $registrasi->tempat_les }}</p>
                            <p class="card-text">Tanggal Daftar: {{ $registrasi->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="text-danger">Kamu belum terdaftar di kelas manapun.</p>
            @endif -->


        </div>
    </div>

</div>

@endsection