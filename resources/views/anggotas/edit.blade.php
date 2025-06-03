@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Anggota</h1>
    <form action="{{ route('anggotas.update', $anggota->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Add this line for PUT method spoofing --}}
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $anggota->nama) }}" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $anggota->email) }}" required>
        </div>
        <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp', $anggota->no_hp) }}">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ old('alamat', $anggota->alamat) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button> {{-- Changed button text --}}
    </form>
</div>
@endsection