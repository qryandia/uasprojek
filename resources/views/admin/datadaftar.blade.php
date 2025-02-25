@extends('layouts.master_admin')

@section('title', 'halaman data murid')

@section('isi')

<div class="">
    <div class="d-flex">
        <div class="colkiri col-lg-4 container-fluid position-fixed" style="background-color: 0B3D91; height: 100vh; width: auto; padding-top: 90px;">
            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Profil</p>
            <div class="d-flex flex-row mb-3">
                <img src="{{ asset('img/user1.svg') }}" width="40" height="42" alt="">
                <div class="p-2 fw-bold" style="color: #FFFFFF;">Admin ALC Gampengrejo</div>
            </div>

            <p class="fw-bold pt-4" style="color: #7BC6FA; font-size: 13px">Menu</p>
            <div class="d-flex flex-row mb-3 align-self-center">
                <img src="{{ asset('img/dasmati.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('admin.dashboard') }}" class="p-1 ps-2 gak-garis" style="color: #7BC6FA;">Dashboard</a>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #FFFFFF;">
                <img src="{{ asset('img/daftaraktif.svg') }}" width="26" height="26" alt="">
                <div class="p-1 ps-2 ">Data Pendaftar</div>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/posting1.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('admin.postingan') }}" class="p-1 ps-2 gak-garis">Data Postingan</a>
            </div>


            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/keluar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('login') }}" class="p-1 ps-2 gak-garis">Keluar</a>
            </div>
        </div>
        <div class="colkanan col-lg-8 flex-grow-1" style="margin-left: 22%; padding-top: 100px;">
            <div class="container">
                <h3>Data Siswa Daftar</h3>
                <div class="mt-4 pb-2">
                    <a href="{{ route('admin.excel') }}" class="btn btn-success">Excel</a>
                </div>
                <table class="table table-bordered table-striped" id="tabel-pendaftar">
                    <thead class="table-dark">
                        <tr class="" style="font-size:12px;">
                            <th style="width: 1%">No.</th>
                            <th style="width: 5%">Nama Panggilan</th>
                            <th style="width: 5%">Tempat Lahir</th>
                            <th style="width: 5%">Tanggal Lahir</th>
                            <th style="width: 5%">Jenis Kelamin</th>
                            <th style="width: 5%">Agama</th>
                            <th style="width: 5%">Alamat</th>
                            <th style="width: 5%">No HP</th>
                            <th style="width: 5%">Tempat Les</th>
                            <th style="width: 5%">Kelas</th>
                            <th style="width: 5%">Les Dimulai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataRegistrasi as $data)
                        <tr style="font-size:10px;">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama_panggilan }}</td>
                            <td>{{ $data->tempat_lahir }}</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->agama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->no_hp }}</td>
                            <td>{{ $data->tempat_les }}</td>
                            <td>{{ $data->kelas->nama_kelas ?? 'Tidak ada kelas' }}</td>
                            <td>{{ $data->les_dimulai }}</td>
                        
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    
        </div>
    </div>

</div>

@endsection