<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Hadirin')</title>
    <link rel="icon" href="{{ asset('images/ic_logo.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/ic_logo.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    {{-- Tailwind CSS CDN untuk development, pastikan sudah dihilangkan jika menggunakan @vite secara penuh --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <section id="home" class="relative overflow-hidden bg-primary text-primary-color py-12 md:py-16 lg:py-20">
        <div class="container mx-auto px-4">
            <div class="-mx-5 flex flex-wrap items-center">
                <div class="w-full px-5">
                    <div class="scroll-revealed mx-auto max-w-[780px] text-center">
                        <h1 class="mt-8 mb-4 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-tight">
                            Dashboard Page Hadirin
                        </h1>
                        <p class="mx-auto mb-6 max-w-[600px] text-base text-white sm:text-lg sm:leading-normal">
                            Selamat datang! Pilih menu di bawah untuk mengakses halaman.
                        </p>

                        <ul class="mb-8 flex flex-wrap items-center justify-center gap-3 md:gap-4 lg:gap-5">
                            @if(isset($category) && $category === 'tools')
                                <li>
                                    <a href="{{ route('kegiatans.index') }}" class="inline-flex items-center justify-center rounded-md bg-primary-color text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-primary-light-5 md:px-5 md:py-3 md:text-base">
                                        Kegiatan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kehadirans.index') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Kehadiran
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kehadirans.scanQrForm') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Scan QR Hadir
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Anggota
                                    </a>
                                </li>
                            @elseif(isset($category) && $category === 'prints')
                                <li>
                                    <a href="{{ route('prints.daily.form') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Daily
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('prints.monthly.form') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Monthly
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('prints.annual.form') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Yearly
                                    </a>
                                </li>
                                {{-- Jika Anda ingin 'Scan QR Hadir' muncul juga di kategori 'prints', tambahkan di sini: --}}
                                {{-- <li>
                                    <a href="{{ route('kehadirans.scanQrForm') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Scan QR Hadir
                                    </a>
                                </li> --}}
                            @else
                                {{-- Default category, bisa sama dengan tools atau kosong --}}
                                <li>
                                    <a href="{{ route('kegiatans.index') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Kegiatan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kehadirans.index') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Kehadiran
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('kehadirans.scanQrForm') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Scan QR Hadir
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('anggotas.index') }}" class="inline-flex items-center justify-center rounded-md bg-blue-500 text-white px-4 py-2 text-sm font-medium shadow-md hover:bg-blue-600 md:px-5 md:py-3 md:text-base">
                                        Anggota
                                    </a>
                                </li>
                            @endif
                        </ul>
                        <div class="mt-4">
                            <a href="{{ route('landing') }}" class="inline-flex items-center justify-center rounded-md bg-gray-300 text-gray-800 px-4 py-2 text-sm font-medium shadow-md hover:bg-gray-400 md:px-5 md:py-2 md:text-base">
                                Kembali ke Landing Page
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-6 md:py-8">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @stack('scripts')
</body>
</html>