@extends('layouts.app') {{-- Sesuaikan dengan layout Anda --}}

@section('content')
<div class="container">
    <h1>Edit Kehadiran</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kehadirans.update', $kehadiran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="anggota_id">Anggota:</label>
            <select name="anggota_id" id="anggota_id" class="form-control" required>
                <option value="">-- Pilih Anggota --</option>
                @foreach ($anggotas as $anggota)
                    <option value="{{ $anggota->id }}" {{ old('anggota_id', $kehadiran->anggota_id) == $anggota->id ? 'selected' : '' }}>
                        {{ $anggota->nama }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="kegiatan_id">Kegiatan:</label>
            <select name="kegiatan_id" id="kegiatan_id" class="form-control" required>
                <option value="">-- Pilih Kegiatan --</option>
                @foreach ($kegiatans as $kegiatan)
                    <option value="{{ $kegiatan->id }}" {{ old('kegiatan_id', $kehadiran->kegiatan_id) == $kegiatan->id ? 'selected' : '' }}>
                        {{ $kegiatan->judul }} ({{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d M Y') }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="status">Status Kehadiran:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="hadir" {{ old('status', $kehadiran->status) == 'hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="tidak hadir" {{ old('status', $kehadiran->status) == 'tidak hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                <option value="izin" {{ old('status', $kehadiran->status) == 'izin' ? 'selected' : '' }}>Izin</option>
                <option value="sakit" {{ old('status', $kehadiran->status) == 'sakit' ? 'selected' : '' }}>Sakit</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="keterangan">Keterangan (Opsional):</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan', $kehadiran->keterangan) }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="waktu_hadir">Waktu Hadir (Opsional):</label>
            <input type="datetime-local" name="waktu_hadir" id="waktu_hadir" class="form-control" value="{{ old('waktu_hadir', $kehadiran->waktu_hadir ? \Carbon\Carbon::parse($kehadiran->waktu_hadir)->format('Y-m-d\TH:i') : '') }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Kehadiran</button>
        <a href="{{ route('kehadirans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection