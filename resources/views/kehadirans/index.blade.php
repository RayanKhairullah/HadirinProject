@extends('layouts.app') {{-- Sesuaikan dengan layout Anda --}}

@section('content')
<div class="container">
    <h1>Daftar Kehadiran</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="{{ route('kehadirans.create') }}" class="btn btn-primary mb-3">Tambah Kehadiran</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Anggota</th>
                <th>Kegiatan</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Waktu Hadir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kehadirans as $kehadiran)
            <tr>
                <td>{{ $kehadiran->id }}</td>
                <td>{{ $kehadiran->anggota->nama ?? 'N/A' }}</td> {{-- Menampilkan nama anggota --}}
                <td>{{ $kehadiran->kegiatan->judul ?? 'N/A' }}</td> {{-- Menampilkan judul kegiatan --}}
                <td>{{ ucfirst($kehadiran->status) }}</td>
                <td>{{ $kehadiran->keterangan ?? '-' }}</td>
                <td>{{ $kehadiran->waktu_hadir ? \Carbon\Carbon::parse($kehadiran->waktu_hadir)->format('d M Y H:i') : '-' }}</td>
                <td>
                    <a href="{{ route('kehadirans.show', $kehadiran->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('kehadirans.edit', $kehadiran->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kehadirans.destroy', $kehadiran->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kehadiran ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Tidak ada data kehadiran.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $kehadirans->links() }} {{-- Untuk paginasi --}}
</div>
@endsection