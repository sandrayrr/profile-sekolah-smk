<!-- resources/views/galeri.blade.php -->
@extends('layouts.main')


@section('content')

<!-- Banner -->
<section class="relative bg-cover bg-center h-64" style="background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f');">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 flex items-center justify-center h-full text-white text-center">
        <h1 class="text-4xl font-bold">Galeri Sekolah</h1>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Dokumentasi Kegiatan</h2>

        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">

            <!-- Image 1 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Kegiatan Upacara</div>
            </div>

            <!-- Image 2 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Praktik Siswa</div>
            </div>

            <!-- Image 3 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1581078426770-6c0df1cf9b92" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Kegiatan Ekstrakurikuler</div>
            </div>

            <!-- Image 4 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Lomba & Prestasi</div>
            </div>

            <!-- Image 5 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Kunjungan Industri</div>
            </div>

            <!-- Image 6 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1496307042754-b4aa456c4a2d" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Kegiatan Keagamaan</div>
            </div>

            <!-- Image 7 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1500336624523-d727130c3328" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Pelatihan Guru</div>
            </div>

            <!-- Image 8 -->
            <div class="group relative overflow-hidden rounded-lg shadow-md cursor-pointer">
                <img src="https://images.unsplash.com/photo-1488722796624-0aa6f1bb6399" class="h-48 w-full object-cover group-hover:scale-110 transition duration-300" />
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center text-white text-lg font-semibold">Kegiatan Sosial</div>
            </div>
        </div>
    </div>
</section>

@endsection