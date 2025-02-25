@extends('layouts.master')

@section('title', 'halaman utama')

@section('isi')
<div class="welcome " style="background-color: #DDEAFF;">
    <div class="container">
        <div class="row">
            <!-- layer -->
            <div class="colkiri col-lg-5 align-self-center" style="color: #081631;">
                <h1 class="fw-bold display-4">Hallo<br>Studie's!</h1>
                <div style="width: 400px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    line-height: 16px;">
                    <p><span class="fw-bold">ALC Gampengrejo,</span> hadir untuk menemanimu dan membantumu dalam setiap proses belajar kalian! <span class="fw-bold">Ayo belajar bersama ALC Gampengrejo!!</span></p>
                </div>
            </div>

            <div class="coltengah col-lg-3">
                <!-- <svg width="300" height="200" xmlns="http://www.w3.org/2000/svg">
                    <rect width="50" height="500" fill="blue" />
                </svg> -->
                <img src="{{ asset('img/uatama.svg') }}" width="300" height="" alt="">
            </div>

            <div class="colkanan col-lg-4 ps-5 align-self-center">
                <div class="row">
                    <div class="card" style="width: 20.5rem;">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">Pelajar</h6>
                            <div class="d-flex">
                                <div class=" justify-content-start">
                                    <img src="{{ asset('img/komen.svg') }}" width="18" height="18" alt="">
                                </div>
                                <div class="ps-2 justify-content-end">
                                    <footer class="card-subtitle pt-1 footer text-body-secondary" style="font-size: 13px">Sangat membantu!! cara pengajarannya sangat mudah dipahami!</footer>
                                </div>
                            </div>
                            <!-- <footer class="card-subtitle pt-1 footer mb-2 text-body-secondary" style="font-size: 13px"><span class="pe-1">
                                <img src="{{ asset('img/komen.svg') }}" width="18" height="18" alt=""></span>
                                Sangat membantu!! cara pengajarannya sangat mudah dipahami!</footer> -->
                        </div>
                    </div>
                </div>

                <div class="row pt-3">
                    <div class="card" style="width: 19rem;">
                        <div class="card-body">
                            <h6 class="card-title fw-bold">ALC Gampengrejo</h6>
                            <div class="d-flex">
                                <div class=" justify-content-start">
                                    <img src="{{ asset('img/komen.svg') }}" width="18" height="18" alt="">
                                </div>
                                <div class="ps-2 justify-content-end">
                                    <footer class="card-subtitle pt-1 footer text-body-secondary" style="font-size: 13px">Ayo buruan daftar sekarang!! Belajar dengan mudah bersama kita.</footer>
                                </div>
                            </div>
                            <!-- <footer class="card-subtitle pt-1 footer mb-2 text-body-secondary" style="font-size: 13px"><span class="pe-1">
                                <img src="{{ asset('img/komen.svg') }}" width="18" height="18" alt=""></span>
                                Sangat membantu!! cara pengajarannya sangat mudah dipahami!</footer> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</div>

<!-- line -->
<div class="container mb-5">
    <img src="{{ asset('img/line.svg') }}" width="575" alt="">
</div>
<!-- akhir line -->

<!-- icon -->
<div class="icon container" style="margin-top: 80;">
    <div class="row d-flex col-lg-12 justify-content-center">
        <div class="col-lg-3 justify-content-start">
            <div class="d-flex">
                <div class="justify-content-start">
                    <img src="{{ asset('img/iconserti.svg') }}" width="40" alt="">
                </div>
                <div class="justify-content-end ps-3" style="color: #081631;">
                    <p><span class="fw-bold ">Sertifikat</span><br>Dengan sertifikat resmi.</p>
                </div>
            </div>
        </div>
        <!-- kanan -->
        <div class="col-lg-3 justify-content-end">
            <div class="d-flex">
                <div class="justify-content-start">
                    <img src="{{ asset('img/pengajarr.svg') }}" width="45" alt="">
                </div>
                <div class="justify-content-end ps-3" style="color: #081631;">
                    <p><span class="fw-bold ">Sertifikat</span><br>Dengan sertifikat resmi.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- akhir icon -->

<!-- paket kelas -->
<div class="container">
    <div class="row" style="margin-top: 100;">
        <div class="kiri col-lg-6">
            <H2 class="fw-bold">Paket Kelas</H2>
        </div>
        <div class="kanan col-lg-6 text-end">
            <a href="#" type="button" class="button btn btn-dark btn-sm" style="background-color: #0B3D91; --bs-btn-padding-y: .40rem; --bs-btn-padding-x: .90rem;">
                Paket Rekomendasi
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            Kami menawarkan berbagai pilihan paket pelajaran yang dapat disesuaikan dengan kebutuhan dan tujuan belajar Anda
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-3">
            <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 17rem; background-color: #0B3D91; color: #FFFFFF;">
                <div class="text-center">
                    <img src="{{ asset('img/akutan.svg') }}" alt="">
                </div>
                
                <h5 class="pt-4 fw-bold">Kelas Akutansi</h5>
                <p style="font-size: 13px">Dalam era digital, memahami komputer office menjadi keterampilan krusial bagi pelajar dan karyawan.</p>
            </div>
        </div>

        <!-- tengah -->
        <div class="col-lg-3">
            <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 17rem; background-color: #DDEAFF;">
                <div class="text-center">
                    <img src="{{ asset('img/ui.svg') }}" style="width: 80px;" alt="">
                </div>
                
                <h5 class="pt-4 fw-bold">Kelas UIUX</h5>
                <p style="font-size: 13px">Dalam era digital, memahami komputer office menjadi keterampilan krusial bagi pelajar dan karyawan.</p>
            </div>
        </div>

        <!-- tengah lagi -->
        <div class="col-lg-3">
            <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 17rem; background-color: #DDEAFF;">
                <div class="text-center">
                    <img src="{{ asset('img/ui.svg') }}" style="width: 80px;" alt="">
                </div>
                
                <h5 class="pt-4 fw-bold">Kelas UIUX</h5>
                <p style="font-size: 13px">Dalam era digital, memahami komputer office menjadi keterampilan krusial bagi pelajar dan karyawan.</p>
            </div>
        </div>

        <!-- akhir -->
        <div class="col-lg-3">
            <div class="kartu px-4 py-4" data-aos="zoom-in" style="width: 16rem; height: 17rem; background-color: #DDEAFF;">
                <div class="text-center">
                    <img src="{{ asset('img/ui.svg') }}" style="width: 80px;" alt="">
                </div>
                
                <h5 class="pt-4 fw-bold">Kelas UIUX</h5>
                <p style="font-size: 13px">Dalam era digital, memahami komputer office menjadi keterampilan krusial bagi pelajar dan karyawan.</p>
            </div>
        </div>
    </div>
    <!-- paket kelas akhir -->

</div>

<!-- Daftar -->
<div class="bg" style="background-color: #0B3D91; margin-top: 120;">
    <div class="container">
        <div class="row" >
            <div class="col-lg-6 pt-5" data-aos="zoom-in-right">
                <img src="{{asset('img/daf.svg')}}" alt="">
            </div>
            <div class="col-lg-6 align-self-center" data-aos="zoom-in-left">
                <div style=" color: #FFFFFF;">
                    <h2 class="fw-bold pb-1">Daftar Dengan Mudah</h2>
                    <p class="pb-2" style="text-align: justify">Kamu bisa mendaftar dengan mudah lewat Google Form yang telah kami sediakan!!   Tanpa repot, kamu bisa langsung daftar dari HP atau laptop kamu kapan saja. Cukup mengisi beberapa informasi dasar, dan dalam hitungan menit, proses pendaftaran kamu akan selesai. Yuk, buruan daftar dan bergabung dengan kami!!</p>
                    <a href="https://bit.ly/DaftarALC_Gampengrejo" class="button btn" style="background-color: #3B82F6; color: #FFFFFF;">Daftar Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Daftar -->

<!-- pengajar -->
<div class="container" style="margin-top: 120;">
    <div class="row">
        <h2 class="text-center fw-bold pb-3">Pengajar <span style="color:#0B3D91;">Berpengalaman</span></h2>
    </div>
    <div class="row pt-4">
        <div class="col-lg-4 align-self-center">
            <div class="kartu1 px-4 py-4 mx-auto" data-aos="zoom-in-right" style="width: 20rem; height: 16rem; background-color: #DDEAFF; border-radius: 25px">
                <div class="text-center">
                    <img src="{{asset('img/guru.svg')}}" class="rounded-circle " style="width: 80px;" alt="...">
                </div>
                <div class="text-center">
                    <h6 class="fw-bold pt-2" style="margin-bottom: 0;">Natasya</h6>
                    <p style="font-size: 10px; margin-top: 0; color:#444444;">Pengajar Berpengalaman</p>
                </div>
                <p style="font-size: 14px;">Berpengalaman lebih dari 15 tahun dalam mengajar bidang akuntansi dan UIUX Designer.</p>
            </div>
        </div>

        <div class="tenagh col-lg-4">
            <div class="kartu1 px-4 py-4 mx-auto" data-aos="zoom-in" style="width: 22rem; height: 20rem; background-color: #0B3D91; border-radius: 25px; color: #FFFFFF;">
                <div class="text-center">
                    <img src="{{asset('img/guru1.svg')}}" class="rounded-circle " style="width: 120px;" alt="...">
                </div>
                <div class="text-center">
                    <h5 class="fw-bold pt-2" style="margin-bottom: 0;">Hariyanto</h5>
                    <p style="font-size: 13px; margin-top: 0;">Pengajar Berpengalaman</p>
                </div>
                <p>Berpengalaman lebih dari 15 tahun dalam mengajar bidang komputer dan akuntansi.</p>
            </div>
        </div>

        <div class="col-lg-4 align-self-center">
            <div class="kartu1 px-4 py-4 mx-auto" data-aos="zoom-in-left" style="width: 20rem; height: 16rem; background-color: #DDEAFF; border-radius: 25px">
                <div class="text-center">
                    <img src="{{asset('img/guru.svg')}}" class="rounded-circle " style="width: 80px;" alt="...">
                </div>
                <div class="text-center">
                    <h6 class="fw-bold pt-2" style="margin-bottom: 0;">Natasya</h6>
                    <p style="font-size: 10px; margin-top: 0; color:#444444;">Pengajar Berpengalaman</p>
                </div>
                <p style="font-size: 14px;">Berpengalaman lebih dari 15 tahun dalam mengajar bidang akuntansi dan UIUX Designer.</p>
            </div>
        </div>
    </div> 
</div>
<!-- akhir pengajar -->

<!-- metode belajar -->
<div class="container" style="margin-top: 120;">
    <div class="row">
        <h2 class="fw-bold">Motode Belajar <span style="color:#0B3D91;">Yang Seru</span></h2>
        <div class="row">
            
            <div class="col-lg-7">
                <p class="pt-1 pb-3">Tutor yang humble dan mempunyai pengalaman dibidangnya. Metode belajar yang asik sesuai perkembangan zaman</p>
                <button href="#" class="btn btn-outline-primary" style="">Lihat Kelas</button>
            </div>
            <div class="col-lg-5" data-aos="zoom-in-left">
                <div class="d-flex">
                    <div class="justify-content-start">
                        <img src="{{ asset('img/serti.svg') }}" width="40" alt="">
                    </div>
                    <div class="justify-content-end ps-3" style="color: #081631;">
                        <p>Bersertifikat Resmi yang dapat menambah halaman CV mu!</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="justify-content-start">
                        <img src="{{ asset('img/kom.svg') }}" width="40" alt="">
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="ps-3" style="color: #081631;">
                            <p style="height: 40px;">Proses Belajar yang asik dan menyenangkan dengan tutor berpengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- metode belajar -->

<!-- ulasan -->
<div class="container" style="margin-top: 120px;">
    <h2 class="fw-bold text-center pb-4">Apa Kata <span class="warna">Murid Kami</span></h2>
    <div class="row justify-content-center">
        @foreach ($ulasans as $ulasan)
        <div class="col-lg-4 mb-4">
            <div class="card" style="width: 20.5rem;">
                <div class="card-body">
                    <h6 class="card-title fw-bold">{{ $ulasan->pengguna->name }}</h6> <!-- Nama pengguna -->
                    <div class="d-flex">
                        <div class="justify-content-start">
                            <img src="{{ asset('img/komen.svg') }}" width="18" height="18" alt="">
                        </div>
                        <div class="ps-2 justify-content-end">
                            <footer class="card-subtitle pt-1 footer text-body-secondary" style="font-size: 13px">
                                {{ $ulasan->isi_ulasan }} 
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- ulasan akhir -->


<!-- footer -->
<div class="bg" style="background-color: #0B3D91; margin-top: 120;">
    <div class="container" style="">
        <div class="row pt-5">
            <div class="colkanandewee col-lg-2">
                <img src="{{asset('img/logo.png')}}" style="height:120px;" alt="">
            </div>

            <div class="coltengahkanan col-lg-4 text-light ">
                <h5 class="fw-bold pb-2">Ana Learning Center</h5>
                <p style="font-size:14px;">Wanengpaten, gampengrejo kab. kediri
                Privat Kursus Komputer/Akuntansi/Inggris SD - SMP - SMA - UMUM</p>
                <div>
                    <img src="{{asset('img/google.svg')}}" class="pe-2" width="26" alt=""> <span><img src="{{asset('img/insta.svg')}}" class="pe-2" width="26" alt=""></span> <span><img src="{{asset('img/wa.svg')}}" class="pe-2" width="26" alt=""></span> <span><img src="{{asset('img/tt.svg')}}" class="pe-2" width="26" alt=""></span>
                </div>
            </div>

            <div class="coltengahkiri ps-5 col-lg-3 text-light">
                <div style="padding-left:100px;">
                    <h6 class="pb-2 fw-bold">Les Privat</h6>
                    <div style="font-size:14px;">
                        <div>Blog</div>
                        <div>Karir</div>
                        <div>Akademi</div>
                    </div>
                </div>
            </div>

            <div class="colkiri ps-5 col-lg-3 text-light">
                <div style="">
                    <h6 class="pb-2 fw-bold">Legal</h6>
                    <div style="font-size:14px;">
                        <div>Ketentuan Layanan</div>
                        <div>Kebijakan privasi</div>
                        <div>Kebjiakan Cookie</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- line -->
        <div class="row pt-5">
            <hr class="text-light">
        </div>
        
        <div class="row">
            <div class="text-center text-light pb-4" style="font-size:12px;">
                Copyright 2024 All Rights reserved | Template by ALC Gampengrejo
            </div>
        </div>
        <!-- akhir line -->
    </div>
</div>
<!-- akhir footer -->
@endsection