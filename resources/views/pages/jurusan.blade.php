<!-- resources/views/jurusan.blade.php -->
@extends('layouts.main')

@section('content')

<!-- Header Banner -->
<section class="w-full h-64 bg-cover bg-center flex items-center justify-center" style="background-image:url('/images/jurusan-banner.jpg')">
    <div class="bg-black/50 w-full h-full flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white">Program Keahlian / Jurusan</h1>
    </div>
</section>

<!-- Grid Jurusan Ala Sitesch -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Daftar Jurusan</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- Card Jurusan -->
            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 text-center">
                <img src="/images/jurusan1.jpg" class="rounded-xl mb-4" alt="Jurusan 1">
                <h3 class="text-xl font-bold mb-2 text-blue-600">Teknik Komputer & Jaringan</h3>
                <p class="text-gray-700 mb-4">Mempelajari jaringan komputer, server, troubleshooting, dan teknologi IT.</p>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Detail</a>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 text-center">
                <img src="/images/jurusan2.jpg" class="rounded-xl mb-4" alt="Jurusan 2">
                <h3 class="text-xl font-bold mb-2 text-blue-600">Rekayasa Perangkat Lunak</h3>
                <p class="text-gray-700 mb-4">Fokus pada pemrograman, pengembangan aplikasi, web, dan software engineering.</p>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Detail</a>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 text-center">
                <img src="/images/jurusan3.jpg" class="rounded-xl mb-4" alt="Jurusan 3">
                <h3 class="text-xl font-bold mb-2 text-blue-600">Teknik Kendaraan Ringan</h3>
                <p class="text-gray-700 mb-4">Belajar tentang mesin otomotif, perawatan, perbaikan kendaraan dan teknologi transportasi.</p>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Detail</a>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 text-center">
                <img src="/images/jurusan4.jpg" class="rounded-xl mb-4" alt="Jurusan 4">
                <h3 class="text-xl font-bold mb-2 text-blue-600">Akuntansi & Keuangan Lembaga</h3>
                <p class="text-gray-700 mb-4">Mempelajari dasar akuntansi, perpajakan, pengelolaan keuangan dan administrasi bisnis.</p>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Detail</a>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 text-center">
                <img src="/images/jurusan5.jpg" class="rounded-xl mb-4" alt="Jurusan 5">
                <h3 class="text-xl font-bold mb-2 text-blue-600">Teknik Bisnis Sepeda Motor</h3>
                <p class="text-gray-700 mb-4">Fokus pada perawatan, servis, dan teknologi sepeda motor modern.</p>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Detail</a>
            </div>

            <div class="bg-white rounded-xl shadow hover:shadow-lg transition p-6 text-center">
                <img src="/images/jurusan6.jpg" class="rounded-xl mb-4" alt="Jurusan 6">
                <h3 class="text-xl font-bold mb-2 text-blue-600">Perkantoran / OTKP</h3>
                <p class="text-gray-700 mb-4">Belajar administrasi, layanan publik, pengarsipan, dan komunikasi profesional.</p>
                <a href="#" class="inline-block mt-2 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Detail</a>
            </div>

        </div>
    </div>
</section>

@endsection