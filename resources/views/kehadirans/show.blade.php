@extends('layouts.app') {{-- Sesuaikan dengan layout Anda --}}

@section('content')
<div class="container">
    <h1>Detail Kehadiran</h1>

    <div class="card">
        <div class="card-header">
            Kehadiran #{{ $kehadiran->id }}
        </div>
        <div class="card-body">
            <p><strong>Anggota:</strong> {{ $kehadiran->anggota->nama ?? 'N/A' }}</p>
            <p><strong>Email Anggota:</strong> {{ $kehadiran->anggota->email ?? 'N/A' }}</p>
            <p><strong>Kegiatan:</strong> {{ $kehadiran->kegiatan->judul ?? 'N/A' }}</p>
            <p><strong>Tanggal Kegiatan:</strong> {{ $kehadiran->kegiatan->tanggal ? \Carbon\Carbon::parse($kehadiran->kegiatan->tanggal)->format('d M Y') : 'N/A' }}</p>
            <p><strong>Status:</strong> {{ ucfirst($kehadiran->status) }}</p>
            <p><strong>Keterangan:</strong> {{ $kehadiran->keterangan ?? '-' }}</p>
            <p><strong>Waktu Hadir:</strong> {{ $kehadiran->waktu_hadir ? \Carbon\Carbon::parse($kehadiran->waktu_hadir)->format('d M Y H:i') : '-' }}</p>
            <p><strong>Dibuat Pada:</strong> {{ $kehadiran->created_at->format('d M Y H:i') }}</p>
            <p><strong>Terakhir Diperbarui:</strong> {{ $kehadiran->updated_at->format('d M Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('kehadirans.edit', $kehadiran->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('kehadirans.destroy', $kehadiran->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kehadiran ini?')">Hapus</button>
            </form>
            <a href="{{ route('kehadirans.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
        </div>
    </div>
</div>
@endsection