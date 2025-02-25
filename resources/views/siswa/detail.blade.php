@extends('layouts.master_admin')

@section('title', 'Detail Pesanan')

@section('isi')

<div class="container mt-5" style=" padding: 20px; padding-top: 60px;">
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div class="step d-flex align-items-center me-4">
            <div class="circle">1</div>
            <span class="text step-name ms-2">Form Pendaftaran</span>
        </div>
        <div class="step d-flex align-items-center">
            <div class="circle active">2</div>
            <span class="text step-name active ms-2">Detail Pesanan</span>
        </div>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-body mx-4 my-4">
            <h3 class="pb-4">Detail Pesanan: {{ $kelas->nama_kelas }}</h3>
            
            <div class="card px-4 py-4">
                <p>Nama Lengkap: {{ $pengguna->name }}</p>
                <p>No Hp: {{ $registrasi->no_hp }}</p>
                <p>Kelas: {{ $kelas->nama_kelas }}</p>
                <p>Tempat Les: {{ $registrasi->tempat_les }}</p>
            </div> 
            <p class="text-danger ratakanan fw-bold pt-2">Total Biaya: Rp{{ number_format($harga->harga, 2, ',', '.') }}</p> 
            <div style="text-align: right;">
                <button type="submit" class="btn btn-danger mt-3" onclick="window.location.href='{{ route('siswa.dashboard') }}'">Kembali Ke Dashboard</button>
                <button type="submit" class="btn btn-primary mt-3" onclick="window.location.href='{{ route('siswa.pdf_detail', ['id_registrasi' => $registrasi->id_registrasi]) }}'">Download Detail</button>
            </div>

        </div>
    </div>
</div>

@endsection
