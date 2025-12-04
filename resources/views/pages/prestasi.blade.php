<!-- resources/views/prestasi.blade.php -->
@extends('layouts.main')

@section('content')

<!-- Banner -->
<section class="relative bg-cover bg-center h-64" style="background-image: url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b');">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 flex items-center justify-center h-full text-white text-center">
        <h1 class="text-4xl font-bold">Prestasi Sekolah</h1>
    </div>
</section>

<!-- Prestasi Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Daftar Prestasi Siswa & Sekolah</h2>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <!-- Prestasi 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1515165562835-c3b8e0f0b45c" class="h-48 w-full object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Juara 1 LKS Tingkat Kabupaten</h3>
                    <p class="text-gray-600 text-sm mb-3">Kategori IT Network System Administration</p>
                    <p class="text-gray-700 text-sm">Siswa sukses meraih juara dalam kompetisi resmi yang diselenggarakan oleh Dinas Pendidikan.</p>
                </div>
            </div>

            <!-- Prestasi 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1520975918319-657ce52c2d2b" class="h-48 w-full object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Juara Umum PORSENI SMK</h3>
                    <p class="text-gray-600 text-sm mb-3">Cabang Futsal Putra</p>
                    <p class="text-gray-700 text-sm">Tim futsal sekolah meraih prestasi gemilang dalam ajang olahraga antar sekolah.</p>
                </div>
            </div>

            <!-- Prestasi 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1515169067865-5387ec356754" class="h-48 w-full object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Juara 2 Lomba Desain Grafis</h3>
                    <p class="text-gray-600 text-sm mb-3">Tingkat Provinsi</p>
                    <p class="text-gray-700 text-sm">Prestasi siswa jurusan Multimedia dalam lomba desain grafis kreatif.</p>
                </div>
            </div>

            <!-- Prestasi 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1472162072942-cd5147eb3902" class="h-48 w-full object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Lomba Karya Inovasi Teknologi</h3>
                    <p class="text-gray-600 text-sm mb-3">Harapan 1 Nasional</p>
                    <p class="text-gray-700 text-sm">Proyek inovasi teknologi berhasil masuk nominasi nasional.</p>
                </div>
            </div>

            <!-- Prestasi 5 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1581090124939-2ebca4a3ba17" class="h-48 w-full object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Juara 3 Cerdas Cermat</h3>
                    <p class="text-gray-600 text-sm mb-3">Tingkat Kota</p>
                    <p class="text-gray-700 text-sm">Tim akademik sekolah kembali membawa pulang piala kompetisi pengetahuan umum.</p>
                </div>
            </div>

            <!-- Prestasi 6 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1" class="h-48 w-full object-cover" />
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Penghargaan Sekolah Adiwiyata</h3>
                    <p class="text-gray-600 text-sm mb-3">Tingkat Kabupaten</p>
                    <p class="text-gray-700 text-sm">Sekolah mendapat penghargaan atas komitmen terhadap lingkungan hidup.</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection