

@extends('layouts.master_admin')

@section('title', 'halaman kelas alc gampengrejo')

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

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #FFFFFF;">
                <img src="{{ asset('img/kelashidup.svg') }}" width="26" height="26" alt="">
                <div class="p-1 ps-2 ">Kelas</div>
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
        <div class="colkanan col-lg-8" style="margin-left: 22%; padding: 20px;  padding-top: 100px;">
            <h3>Kelas Rekomendasi</h3>
            <div class="row pt-4" style="">
                <div class="colkanan col-lg-2">
                    <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 21rem; background-color: #DDEAFF;">
                        <div class="text-center pt-2">
                            <img src="{{ asset('img/ui.svg') }}" style="width: 80px;" alt="">
                        </div>
                        
                        <h6 class="pt-4">Kelas UIUX</h6>
                        <h4 class="fw-bold warna">Rp700.000</h4>
                        <div class="warnamati" style="font-size: 12px">Program Komputer : <span><img style="width: 20px;" src="{{asset('img/Figma.svg')}}" alt=""></span></div>
                        <div class="warnamati pt-4 ratakanan kecil pb-1">10x/Pertemuan</div>
                        <div style="justify-self: end;">
                            <a href="{{ route('daftar.kelas', ['kelas_id' => 4]) }}" class="btn btn-primary">Daftar</a>
                        </div>

                        
                    </div>
                </div>

                <div class="coltengah col-lg-2" style="margin-left: 18%;">
                    <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 21rem; background-color: #DDEAFF;">
                        <div class="text-center pt-2">
                            <img src="{{ asset('img/akutansi.svg') }}" style="width: 80px;" alt="">
                        </div>
                        
                        <h6 class="pt-4">Kelas Akutansi</h6>
                        <h4 class="fw-bold warna">Rp1.000.000</h4>
                        <div class="warnamati" style="font-size: 12px">Program Komputer : <span><img style="width: 20px;" src="{{asset('img/Excel.svg')}}" alt=""></span></div>
                        <div class="warnamati pt-4 ratakanan kecil pb-1">15x/Pertemuan</div>
                        <div style="justify-self: end;">
                            <a href="{{ route('daftar.kelas', ['kelas_id' => 5]) }}" class="btn btn-primary">Daftar</a>
                        </div>
                        
                    </div>
                    
                </div>



                <div class="colkanan col-lg-2" style="margin-left: 18%;">
                    <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 21rem; background-color: #DDEAFF;">

                        <div class="text-center pt-2">
                            <img src="{{ asset('img/ui.svg') }}" style="width: 80px;" alt="">
                        </div>
                        
                        <h6 class="pt-4">Kelas Web Pemograman</h6>
                        <h4 class="fw-bold warna">Rp1.500.000</h4>
                        <div class="warnamati" style="font-size: 12px">Program Komputer : <span><img style="width: 20px;" src="{{asset('img/Laravel.svg')}}" alt=""><img style="width: 20px;" src="{{asset('img/Vscode.svg')}}" alt=""></span></div>
                        <div class="warnamati pt-4 ratakanan kecil pb-1">10x/Pertemuan</div>
                        <div style="justify-self: end;">
                            <a href="{{ route('daftar.kelas', ['kelas_id' => 1]) }}" class="btn btn-primary">Daftar</a>
                        </div>
                        
                    </div>
                    
                </div>
            </div>

            
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