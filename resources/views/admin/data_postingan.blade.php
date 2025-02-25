@extends('layouts.master_admin')

@section('title', 'halaman data postingan')

@section('isi')

<div class="" >
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

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/pendaftar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('datadaftar') }}" class="p-1 ps-2 gak-garis">Data Pendaftar</a>
            </div>

            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #FFFFFF;">
                <img src="{{ asset('img/postingan.svg') }}" width="26" height="26" alt="">
                <div class="p-1 ps-2">Data Postingan</div>
            </div>


            <div class="d-flex flex-row mt-4 mb-3 align-self-center" style="color: #7BC6FA;">
                <img src="{{ asset('img/keluar.svg') }}" width="26" height="26" alt="">
                <a href="{{ route('login') }}" class="p-1 ps-2 gak-garis">Keluar</a>
            </div>
        </div>

        <!-- sebelah kiri -->

        <div class="colkanan col-lg-8 flex-grow-1" style="margin-left: 22%; padding: 20px; padding-top: 100px;">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
            <div class="container me-4">        
            <h3>Data Postingan</h3>
            <table class="mt-4 table table-bordered table-striped table-hover" style="border: none;">
                <thead class="table-dark">
                    <tr style="font-size:14px; border: none;">
                        <th style="border: none;">ID</th>
                        <th style="border: none;">Jenis Postingan</th>
                        <th style="border: none;">Isi Postingan</th>
                        <th style="border: none;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($postingan as $item)
                        <tr style="font-size:14px; border: none;">
                            <td style="border: none;">{{ $item->id }}</td>
                            <td style="border: none;">{{ $item->jenis_postingan }}</td>
                            <td style="border: none;">{{ $item->isi_postingan }}</td>
                            <td style="border: none;">
                                <a href="{{ route('admin.postingan.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            </div>
        </div>
        <!-- akhir kiri -->
    </div>

</div>

@endsection