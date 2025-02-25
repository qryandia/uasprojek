@extends('layouts.master_admin')

@section('title', 'halaman ulasan alc gampengrejo')

@section('isi')

<div class="">
    <div class="">
        <div class="colkiri col-lg-4 container-fluid position-fixed" style="background-color: 0B3D91; height: 100vh; width: auto; padding-top: 90px;">
            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Profil</p>
            <div class="d-flex flex-row mb-3 align-items-center">
                <img src="{{ asset('img/user1.svg') }}" width="40" height="42" alt="">
                <div class="p-2 fw-bold nama-pengguna" style="color: #FFFFFF;">
                    {{ Auth::user()->name }} 
                </div>
            </div>

            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Menu</p>
            <div class="d-flex flex-row mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/dasmati.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('siswa.dashboard') }}" class="p-1 ps-2 gak-garis">Dashboard</a>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/kelasmati.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('kelas') }}" class="p-1 ps-2 gak-garis">Kelas</a>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #FFFFFF;">
                <img src="{{ asset('img/ulasan.svg') }}" width="26" height="26" alt="">
                <div style="color: #FFFFFF;" class="p-1 ps-2 gak-garis">Ulasan</div>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/keluar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('login') }}" class="p-1 ps-2 gak-garis">Keluar</a>
            </div>
        </div>
        <div class="colkanan col-lg-8" style="margin-left: 22%; padding: 20px; padding-top: 100px;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <h3>Berikan Ulasan Kepada ALC Gampengrejo</h3>

            <!-- Formulir Ulasan -->
            <form action="{{ route('ulasan.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="isi_ulasan" class="form-label">Isi Ulasan</label>
                    <textarea class="form-control" id="isi_ulasan" name="isi_ulasan" rows="4" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Rating (1-5)</label>
                    <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Ulasan</button>
            </form>
        </div>
    </div>
</div>

@endsection

@if(Auth::check())
@else
    <script>
        window.location = "{{ route('login') }}";
    </script>
@endif
