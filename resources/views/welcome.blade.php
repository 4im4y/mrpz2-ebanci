<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Banci MRPZ2</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gradient-to-br from-emerald-50 to-teal-100">
        <!-- Navigation -->
        <nav class="bg-white shadow-lg">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <h1 class="text-2xl font-bold text-emerald-600">
                                🕌 E-Banci MRPZ2
                            </h1>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-emerald-600 px-3 py-2 rounded-md text-sm font-medium">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-emerald-600 px-3 py-2 rounded-md text-sm font-medium">
                                Log Masuk
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                    Sistem E-Banci
                </h2>
                <h3 class="mt-2 text-2xl font-bold text-emerald-600">
                    Masjid Raja Perempuan Zainab 2
                </h3>
                <p class="mt-6 max-w-2xl mx-auto text-xl text-gray-600">
                    Sistem Pengurusan Data Ahli dan Keluarga Masjid
                </p>

                @auth
                    <div class="mt-10">
                        <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg">
                            Pergi ke Dashboard
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                @else
                    <div class="mt-10">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg">
                            Log Masuk ke Sistem
                            <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Features Section -->
            <div class="mt-20">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Feature 1 -->
                    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-center w-12 h-12 bg-emerald-100 rounded-md mb-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Pengurusan Ahli</h3>
                            <p class="mt-2 text-gray-600">
                                Daftar dan urus maklumat ahli masjid dengan mudah dan teratur.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-center w-12 h-12 bg-emerald-100 rounded-md mb-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Data Keluarga</h3>
                            <p class="mt-2 text-gray-600">
                                Rekod maklumat keluarga dan isi rumah secara lengkap mengikut zon.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white overflow-hidden shadow-lg rounded-lg hover:shadow-xl transition-shadow duration-300">
                        <div class="p-6">
                            <div class="flex items-center justify-center w-12 h-12 bg-emerald-100 rounded-md mb-4">
                                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                            </div>
                            <h3 class="text-lg font-medium text-gray-900">Laporan & Statistik</h3>
                            <p class="mt-2 text-gray-600">
                                Jana laporan dan statistik ahli untuk perancangan yang lebih baik.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-16 bg-white rounded-lg shadow-lg p-8">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Statistik Semasa</h3>
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-3">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-600">3</div>
                        <div class="mt-2 text-sm text-gray-600">Zon Kawasan</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-600">10</div>
                        <div class="mt-2 text-sm text-gray-600">Keluarga Berdaftar</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-emerald-600">22</div>
                        <div class="mt-2 text-sm text-gray-600">Ahli Berdaftar</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-white border-t border-gray-200 mt-20">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <p class="text-center text-gray-500 text-sm">
                    © {{ date('Y') }} E-Banci Sistem MRPZ2. Hak Cipta Terpelihara.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>