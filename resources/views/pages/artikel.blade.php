<!-- resources/views/artikel.blade.php -->
@extends('layouts.main')


@section('content')
    <!-- Banner -->
    <section class="relative bg-cover bg-center h-64" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1');">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex items-center justify-center h-full text-white text-center">
            <h1 class="text-4xl font-bold">Artikel Terbaru</h1>
        </div>
    </section>

    <!-- Artikel Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid lg:grid-cols-3 gap-10">

                <!-- Artikel Left (Main List) -->
                <div class="lg:col-span-2 space-y-8">

                    <!-- Post 1 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" class="w-full h-64 object-cover" />
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold mb-2">Kegiatan MPLS Tahun Ajaran Baru</h2>
                            <p class="text-gray-600 text-sm mb-4">Diposting pada 20 Januari 2025 • Admin</p>
                            <p class="text-gray-700">Pelaksanaan Masa Pengenalan Lingkungan Sekolah (MPLS) berjalan dengan penuh antusias oleh seluruh peserta didik baru...</p>
                            <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Baca selengkapnya →</a>
                        </div>
                    </div>

                    <!-- Post 2 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b" class="w-full h-64 object-cover" />
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold mb-2">Workshop Guru & Tenaga Kependidikan</h2>
                            <p class="text-gray-600 text-sm mb-4">Diposting pada 12 Januari 2025 • Admin</p>
                            <p class="text-gray-700">Pelatihan pengembangan kompetensi guru dilaksanakan untuk meningkatkan kualitas pembelajaran di lingkungan sekolah...</p>
                            <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Baca selengkapnya →</a>
                        </div>
                    </div>

                    <!-- Post 3 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1487528278747-ba99ed528ebc" class="w-full h-64 object-cover" />
                        <div class="p-6">
                            <h2 class="text-2xl font-semibold mb-2">Siswa SMK Raih Prestasi Nasional</h2>
                            <p class="text-gray-600 text-sm mb-4">Diposting pada 5 Januari 2025 • Admin</p>
                            <p class="text-gray-700">Prestasi membanggakan berhasil diraih pada ajang lomba tingkat nasional yang diikuti oleh perwakilan sekolah...</p>
                            <a href="#" class="text-blue-600 font-semibold mt-4 inline-block">Baca selengkapnya →</a>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="space-y-8">

                    <!-- Pencarian -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Pencarian</h3>
                        <input type="text" placeholder="Cari artikel..." class="w-full border rounded-md p-2 focus:outline-blue-400" />
                    </div>

                    <!-- Kategori -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Kategori</h3>
                        <ul class="space-y-2 text-gray-700">
                            <li>• Informasi Sekolah</li>
                            <li>• Kegiatan</li>
                            <li>• Prestasi</li>
                            <li>• Pengumuman</li>
                        </ul>
                    </div>

                    <!-- Artikel Terbaru -->
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-4">Artikel Terbaru</h3>
                        <ul class="space-y-4 text-gray-700 text-sm">
                            <li class="flex gap-3">
                                <img src="https://images.unsplash.com/photo-1581091870633-7d14bb1eacd7" class="w-16 h-16 object-cover rounded" />
                                <a href="#">Kegiatan MPLS Tahun 2025</a>
                            </li>
                            <li class="flex gap-3">
                                <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" class="w-16 h-16 object-cover rounded" />
                                <a href="#">Siswa Berprestasi Mendunia</a>
                            </li>
                            <li class="flex gap-3">
                                <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b" class="w-16 h-16 object-cover rounded" />
                                <a href="#">Pelatihan Guru Semester Genap</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection