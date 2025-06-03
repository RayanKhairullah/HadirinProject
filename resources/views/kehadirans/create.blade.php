@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Kehadiran Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kehadirans.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="anggota_id">Anggota:</label>
            {{-- GANTI DARI SELECT BIASA MENJADI SELECT2 --}}
            <select name="anggota_id" id="anggota_id" class="form-control" style="width: 100%" required>
                {{-- Opsi awal kosong, akan diisi oleh Select2 --}}
                <option value="">Cari Anggota...</option>
            </select>
            {{-- Jika ada error validasi, tampilkan pesan --}}
            @error('anggota_id')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="kegiatan_id">Kegiatan:</label>
            <select name="kegiatan_id" id="kegiatan_id" class="form-control" required>
                <option value="">-- Pilih Kegiatan --</option>
                @foreach ($kegiatans as $kegiatan)
                    <option value="{{ $kegiatan->id }}" {{ old('kegiatan_id') == $kegiatan->id ? 'selected' : '' }}>
                        {{ $kegiatan->judul }} ({{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d M Y') }})
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="status">Status Kehadiran:</label>
            <select name="status" id="status" class="form-control" required>
                <option value="hadir" {{ old('status') == 'hadir' ? 'selected' : '' }}>Hadir</option>
                <option value="tidak hadir" {{ old('status') == 'tidak hadir' ? 'selected' : '' }}>Tidak Hadir</option>
                <option value="izin" {{ old('status') == 'izin' ? 'selected' : '' }}>Izin</option>
                <option value="sakit" {{ old('status') == 'sakit' ? 'selected' : '' }}>Sakit</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="keterangan">Keterangan (Opsional):</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="waktu_hadir">Waktu Hadir (Opsional):</label>
            <input type="datetime-local" name="waktu_hadir" id="waktu_hadir" class="form-control" value="{{ old('waktu_hadir', now()->format('Y-m-d\TH:i')) }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Kehadiran</button>
        <a href="{{ route('kehadirans.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

@push('scripts') {{-- Memasukkan script ke stack 'scripts' di layout --}}
<script type="text/javascript">
    $(document).ready(function() {
        $('#anggota_id').select2({
            placeholder: 'Cari Anggota berdasarkan nama atau email...',
            minimumInputLength: 2, // Mulai pencarian setelah 2 karakter
            ajax: {
                url: '{{ route('kehadirans.searchAnggota') }}', // URL endpoint pencarian anggota
                dataType: 'json',
                delay: 250, // Penundaan saat mengetik
                data: function (params) {
                    return {
                        term: params.term // Parameter pencarian yang dikirim ke server
                    };
                },
                processResults: function (data) {
                    return {
                        results: data.results // Mengambil array 'results' dari respons JSON
                    };
                },
                cache: true
            }
        });

        // Jika ada nilai old('anggota_id') (misal setelah validasi gagal)
        @if(old('anggota_id'))
            // Dapatkan ID anggota yang lama
            var oldAnggotaId = "{{ old('anggota_id') }}";
            // Lakukan AJAX call untuk mendapatkan detail anggota berdasarkan ID
            $.ajax({
                type: 'GET',
                url: '{{ route('kehadirans.searchAnggota') }}?term=' + oldAnggotaId, // Kirim ID sebagai 'term'
                dataType: 'json'
            }).then(function (data) {
                if (data.results && data.results.length > 0) {
                    // Buat opsi dan set sebagai terpilih
                    var option = new Option(data.results[0].text, data.results[0].id, true, true);
                    $('#anggota_id').append(option).trigger('change');
                }
            });
        @endif
    });
</script>
@endpush