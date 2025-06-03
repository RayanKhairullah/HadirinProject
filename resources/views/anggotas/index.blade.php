@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Anggota</h1>
    <a href="{{ route('anggotas.create') }}" class="btn btn-primary mb-3">Tambah Anggota</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Alamat</th>
                <th>ID Card</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($anggotas as $anggota)
            <tr>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->email }}</td>
                <td>{{ $anggota->no_hp }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>{{ $anggota->id_card }}</td>
                <td>
                    <a href="{{ route('anggotas.show', $anggota->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('anggotas.edit', $anggota->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('anggotas.destroy', $anggota->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus anggota ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
