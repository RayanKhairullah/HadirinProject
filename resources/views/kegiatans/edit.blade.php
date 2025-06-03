@extends('layouts.app') {{-- Sesuaikan dengan layout aplikasi Anda --}}

@section('content')
<div class="container">
    <h1>Edit Kegiatan</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kegiatans.update', $kegiatan->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Penting untuk metode PUT --}}
        <div class="form-group mb-3">
            <label for="judul">Judul Kegiatan:</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $kegiatan->judul) }}" required>
        </div>
        <div class="form-group mb-3">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5" required>{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $kegiatan->tanggal) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Kegiatan</button>
        <a href="{{ route('kegiatans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection