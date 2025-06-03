@extends('layouts.app') {{-- Sesuaikan dengan layout aplikasi Anda --}}

@section('content')
<div class="container">
    <h1>Detail Kegiatan</h1>

    <div class="card">
        <div class="card-header">
            {{ $kegiatan->judul }}
        </div>
        <div class="card-body">
            <p><strong>Judul:</strong> {{ $kegiatan->judul }}</p>
            <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d F Y') }}</p>
            <p><strong>Deskripsi:</strong></p>
            <p>{{ $kegiatan->deskripsi }}</p>
            <p><strong>Dibuat Pada:</strong> {{ $kegiatan->created_at->format('d M Y H:i') }}</p>
            <p><strong>Terakhir Diperbarui:</strong> {{ $kegiatan->updated_at->format('d M Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('kegiatans.edit', $kegiatan->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('kegiatans.destroy', $kegiatan->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</button>
            </form>
            <a href="{{ route('kegiatans.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection