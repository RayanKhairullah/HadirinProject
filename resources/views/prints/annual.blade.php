@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Cetak Laporan Kehadiran Tahunan</h1>

    @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('prints.annual.generate') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="year" class="block text-gray-700 text-sm font-bold mb-2">Pilih Tahun:</label>
                <select name="year" id="year" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    @for ($y = date('Y'); $y >= date('Y') - 10; $y--) {{-- 10 tahun terakhir --}}
                        <option value="{{ $y }}" {{ old('year', date('Y')) == $y ? 'selected' : '' }}>
                            {{ $y }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cetak Laporan
                </button>
                <a href="{{ url('/') }}" class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection