@extends('layouts.app') {{-- Sesuaikan dengan layout aplikasi Anda --}}

@section('content')
<div class="container">
    <h1>Daftar Kegiatan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('kegiatans.create') }}" class="btn btn-primary mb-3">Tambah Kegiatan Baru</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($kegiatans as $kegiatan)
            <tr>
                <td>{{ $kegiatan->id }}</td>
                <td>{{ $kegiatan->judul }}</td>
                <td>{{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d F Y') }}</td>
                <td>
                    <a href="{{ route('kegiatans.show', $kegiatan->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('kegiatans.edit', $kegiatan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('kegiatans.destroy', $kegiatan->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kegiatan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">Tidak ada kegiatan yang ditemukan.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $kegiatans->links() }} {{-- Untuk paginasi --}}
</div>
@endsection