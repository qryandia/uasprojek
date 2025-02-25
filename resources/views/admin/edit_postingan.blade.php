@extends('layouts.master_admin')

@section('title', 'halaman edit postingan')

@section('isi')
    <div class="container">
        <h3>Edit Postingan</h3>


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div style="padding-top: 60px;">
            <div class="card col-lg-10 mx-auto">
                <div class="card-body mx-4 my-4">
                    <form action="{{ route('admin.postingan.update', $postingan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="jenis_postingan" class="form-label">Jenis Postingan</label>
                            <input type="text" name="jenis_postingan" id="jenis_postingan" class="form-control" value="{{ $postingan->jenis_postingan }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="isi_postingan" class="form-label">Isi Postingan</label>
                            <textarea name="isi_postingan" id="isi_postingan" class="form-control" required>{{ $postingan->isi_postingan }}</textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.postingan') }}" type="submit" class="btn me-2 btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-primary">Update Postingan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
