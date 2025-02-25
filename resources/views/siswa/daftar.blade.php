@extends('layouts.master_admin')

@section('title', 'Pendaftaran Kelas')

@section('isi')

<div class="container mt-5" style="padding: 20px;  padding-top: 60px;">
    <div class="d-flex justify-content-center align-items-center mb-4">
        <div class="step d-flex align-items-center me-4">
            <div class="circle active">1</div>
            <span class="text step-name active ms-2">Form Pendaftaran</span>
        </div>
        <div class="step d-flex align-items-center">
            <div class="circle">2</div>
            <span class="step-name ms-2">Detail Pesanan</span>
        </div>
    </div>
    <div class="card col-lg-10 mx-auto">
        <div class="card-body mx-4 my-4">
            <h3 class="pb-4">Pendaftaran Kelas: {{ $kelas->nama_kelas }}</h3>
            <form action="{{ route('daftar.proses', ['kelas_id' => $kelas->id_kelas]) }}" method="POST">
                @csrf
                <div class="form-group pb-2">
                    <label for="nama_panggilan">Nama Panggilan</label>
                    <input 
                        type="text" 
                        class="form-control @error('nama_panggilan') is-invalid @enderror" 
                        id="nama_panggilan" 
                        name="nama_panggilan" 
                        value="{{ old('nama_panggilan') }}" 
                        required>
                    @error('nama_panggilan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group pb-2">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input 
                        type="text" 
                        class="form-control @error('tempat_lahir') is-invalid @enderror" 
                        id="tempat_lahir" 
                        name="tempat_lahir" 
                        value="{{ old('tempat_lahir') }}" 
                        required>
                    @error('tempat_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group pb-2">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input 
                        type="date" 
                        class="form-control @error('tanggal_lahir') is-invalid @enderror" 
                        id="tanggal_lahir" 
                        name="tanggal_lahir" 
                        value="{{ old('tanggal_lahir') }}" 
                        required>
                    @error('tanggal_lahir')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group pb-2">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select 
                        class="form-control @error('jenis_kelamin') is-invalid @enderror" 
                        id="jenis_kelamin" 
                        name="jenis_kelamin" 
                        required>
                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                        <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group pb-2">
                    <label for="agama">Agama</label>
                    <input 
                        type="text" 
                        class="form-control @error('agama') is-invalid @enderror" 
                        id="agama" 
                        name="agama" 
                        value="{{ old('agama') }}" 
                        required>
                    @error('agama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group pb-2">
                    <label for="alamat">Alamat Siswa</label>
                    <textarea 
                        class="form-control @error('alamat') is-invalid @enderror" 
                        id="alamat" 
                        name="alamat" 
                        required>{{ old('alamat') }}</textarea>
                    @error('alamat')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group pb-2">
                    <label for="no_hp">No HP Siswa</label>
                    <input 
                        type="text" 
                        class="form-control @error('no_hp') is-invalid @enderror" 
                        id="no_hp" 
                        name="no_hp" 
                        value="{{ old('no_hp') }}" 
                        required>
                    @error('no_hp')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Input Jadwal Manual -->
                <div class="form-group pb-2">
                    <label for="hari">Hari</label>
                    <select 
                        name="hari" 
                        id="hari" 
                        class="form-control @error('hari') is-invalid @enderror" 
                        required>
                        <option value="">Pilih Hari Les</option>
                        @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $day)
                            <option value="{{ $day }}" {{ old('hari') == $day ? 'selected' : '' }}>
                                {{ $day }}
                            </option>
                        @endforeach
                    </select>
                    @error('hari')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group pb-2">
                    <label for="waktu">Waktu Les</label>
                    <input 
                        type="text" 
                        class="form-control @error('waktu') is-invalid @enderror" 
                        id="waktu" 
                        name="waktu" 
                        placeholder="Misal: 09:00 - 11:00" 
                        value="{{ old('waktu') }}" 
                        required>
                    @error('waktu')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group pb-2">
                    <label for="tempat_les">Tempat Les</label>
                    <select 
                        name="tempat_les" 
                        id="tempat_les" 
                        class="form-control @error('tempat_les') is-invalid @enderror" 
                        required>
                        <option value="">Pilih Tempat Les</option>
                        @foreach (['Kantor Pusat', 'Kantor Cabang', 'Rumah Siswa'] as $lokasi)
                            <option value="{{ $lokasi }}" {{ old('tempat_les') == $lokasi ? 'selected' : '' }}>
                                {{ $lokasi }}
                            </option>
                        @endforeach
                    </select>
                    @error('tempat_les')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group pb-2">
                    <label for="les_dimulai">Tanggal Les Dimulai</label>
                    <input
                        type="date" 
                        class="form-control @error('les_dimulai') is-invalid @enderror" 
                        id="les_dimulai" 
                        name="les_dimulai" 
                        value="{{ old('les_dimulai') }}" 
                        required>
                    @error('les_dimulai')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <div class="form-group pb-2">
                    <label for="catatan">Catatan</label>
                    <textarea 
                        placeholder="Cnth: Saya ingin pertemuannya fleksibel / tidak ada"
                        class="form-control @error('catatan') is-invalid @enderror" 
                        id="catatan" 
                        name="catatan" 
                        required>{{ old('catatan') }}</textarea>
                    @error('catatan')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary  mt-3">Daftar</button>
            </form>
        </div>
    </div>
</div>

@endsection
