@extends('layouts.main')

@section('content')
<style>
/* Gaya modern dengan desain yang lebih menarik */
:root {
    --primary-color: #2563eb;
    --primary-dark: #1e40af;
    --secondary-color: #10b981;
    --accent-color: #f59e0b;
    --text-dark: #1f2937;
    --text-light: #6b7280;
    --bg-light: #f9fafb;
    --bg-white: #ffffff;
    --shadow-sm: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    --shadow-md: 0 4px 6px rgba(0,0,0,0.1);
    --shadow-lg: 0 10px 15px rgba(0,0,0,0.1);
    --shadow-xl: 0 20px 25px rgba(0,0,0,0.1);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

body {
    font-family: 'Inter', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: var(--text-dark);
    line-height: 1.6;
    overflow-x: hidden;
}

/* Perbaikan tampilan Hero Section dengan gradien modern */
.hero-section {
    position: relative;
    background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
    border-radius: 0 0 30px 30px;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.hero-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(37, 99, 235, 0.8) 0%, rgba(30, 64, 175, 0.8) 100%);
    z-index: 1;
}

.hero-section img {
    position: relative;
    z-index: 0;
}

.hero-section .container {
    position: relative;
    z-index: 2;
}

/* Perbaikan tampilan Card dengan efek modern */
.info-card {
    background: var(--bg-white);
    border-radius: 16px;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
    border-top: 4px solid var(--primary-color);
    overflow: hidden;
}

.info-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

/* Perbaikan tampilan Section Headers */
.section-header {
    position: relative;
    padding-bottom: 16px;
    margin-bottom: 24px;
    font-weight: 700;
    color: var(--text-dark);
}

.section-header:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    border-radius: 2px;
}

/* Perbaikan tampilan Buttons */
.btn-primary {
    background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
    display: inline-block;
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-md);
}

.btn-secondary {
    background: transparent;
    color: white;
    padding: 12px 24px;
    border-radius: 50px;
    font-weight: 600;
    transition: var(--transition);
    border: 2px solid rgba(255, 255, 255, 0.7);
    display: inline-block;
}

.btn-secondary:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: white;
}

/* Perbaikan tampilan News Cards */
.news-card {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.news-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-xl);
}

/* Perbaikan tampilan Swiper */
.swiper-slide {
    border-radius: 16px;
}

/* Perbaikan tampilan Gallery */
.gallery-item {
    border-radius: 12px;
    overflow: hidden;
    transition: var(--transition);
    box-shadow: var(--shadow-sm);
}

.gallery-item:hover {
    transform: scale(1.05);
    box-shadow: var(--shadow-md);
}

/* Animasi untuk statistik */
.stat-item {
    position: relative;
    overflow: hidden;
}

.stat-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
    transition: left 0.5s;
}

.stat-item:hover::before {
    left: 100%;
}

/* Animasi untuk jurusan cards */
.jurusan-card {
    position: relative;
    overflow: hidden;
}

.jurusan-card::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 4px;
    background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
    transform: scaleX(0);
    transform-origin: left;
    transition: transform 0.3s;
}

.jurusan-card:hover::after {
    transform: scaleX(1);
}

/* Animasi untuk testimonial */
.testimonial-card {
    position: relative;
}

.testimonial-card::before {
    content: '"';
    position: absolute;
    top: -10px;
    left: 10px;
    font-size: 80px;
    color: var(--primary-color);
    opacity: 0.1;
    font-family: Georgia, serif;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-section {
        border-radius: 0 0 20px 20px;
    }
    
    .section-header:after {
        width: 60px;
    }
}

/* Animasi fade in */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.fade-in {
    animation: fadeIn 0.6s ease-out;
}

/* Efek parallax untuk hero section */
.parallax {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

{{-- ============================
      HERO SLIDER (modernized)
=============================== --}}
<div class="hero-section relative w-full overflow-hidden parallax">
    <div id="heroSlider" class="flex transition-transform duration-700">
        @foreach([1,2,3] as $i)
        <div class="min-w-full relative h-[540px]">
            <img src="https://picsum.photos/1600/700?random={{ $i }}"
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 flex items-center">
                <div class="container mx-auto px-6">
                    <!-- Text Content -->
                    <div class="max-w-2xl text-white fade-in">
                        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight drop-shadow-lg mb-4">SMK Dummy Indonesia</h1>
                        <p class="text-lg md:text-xl drop-shadow-sm mb-6">
                            Sekolah berbasis digital dan teknologi modern. Menyiapkan siswa menjadi tenaga ahli yang kompeten.
                        </p>

                        <div class="flex flex-wrap gap-3">
                            <a href="#profil" class="btn-primary">Selengkapnya</a>
                            <a href="#jurusan" class="btn-secondary">Lihat Jurusan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button id="heroPrev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full hover:bg-black/60 transition z-10">‹</button>
    <button id="heroNext" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full hover:bg-black/60 transition z-10">›</button>
</div>

{{-- ============================
      SAMBUTAN KEPALA SEKOLAH
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-16">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- card sambutan -->
        <div class="lg:col-span-2 info-card p-8">
            <div class="section-header text-3xl">Sambutan Kepala Sekolah</div>
            <div class="flex items-start gap-6 mt-6">
                <img src="https://picsum.photos/300/300" class="w-40 h-40 rounded-full object-cover shadow-lg" alt="Kepala Sekolah">
                <div>
                    @if($beranda && $beranda->sambutan)
                        <p class="text-gray-600 mt-2">{{ $beranda->sambutan }}</p>
                    @else
                        <p class="text-gray-600 mt-2">Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SMK Negeri 1 Kawali. Website ini kami hadirkan untuk memberikan informasi kegiatan, prestasi, dan perkembangan sekolah.</p>
                    @endif

                    <div class="mt-6">
                        <a href="#" class="btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- statistik quick (in card) -->
        <div class="info-card p-8">
            <div class="section-header text-xl font-semibold">Data Statistik Sekolah</div>
            <div class="grid grid-cols-2 gap-4 mt-6">
                <div class="stat-item p-4 rounded-lg bg-gradient-to-br from-blue-50 to-blue-100 text-center">
                    <div class="text-3xl font-bold text-blue-600 counter" data-target="1200">0</div>
                    <div class="text-sm text-gray-600 mt-1">Jumlah Siswa</div>
                </div>
                <div class="stat-item p-4 rounded-lg bg-gradient-to-br from-green-50 to-green-100 text-center">
                    <div class="text-3xl font-bold text-green-600 counter" data-target="85">0</div>
                    <div class="text-sm text-gray-600 mt-1">Jumlah Guru</div>
                </div>
                <div class="stat-item p-4 rounded-lg bg-gradient-to-br from-amber-50 to-amber-100 text-center">
                    <div class="text-3xl font-bold text-amber-600 counter" data-target="12">0</div>
                    <div class="text-sm text-gray-600 mt-1">Jurusan</div>
                </div>
                <div class="stat-item p-4 rounded-lg bg-gradient-to-br from-purple-50 to-purple-100 text-center">
                    <div class="text-3xl font-bold text-purple-600 counter" data-target="4500">0</div>
                    <div class="text-sm text-gray-600 mt-1">Alumni</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================
      PROGRAM KEAHLIAN (JURUSAN)
=============================== --}}
<section id="jurusan" class="max-w-7xl mx-auto px-6 mt-16">
    <div class="flex items-center justify-between">
        <div class="section-header text-3xl">Program Keahlian</div>
        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Semua →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
        @foreach([
            ['Teknik Komputer dan Jaringan', 'fa-laptop-code', 'Mempelajari perakitan, perbaikan, dan jaringan komputer.'],
            ['Multimedia', 'fa-photo-video', 'Mempelajari desain grafis, animasi, dan editing video.'],
            ['Akuntansi dan Keuangan', 'fa-chart-line', 'Mempelajari pencatatan keuangan dan manajemen bisnis.'],
            ['Teknik Kendaraan Ringan', 'fa-car', 'Mempelajari mesin dan kelistrikan sepeda motor.'],
            ['Tata Boga', 'fa-utensils', 'Mempelajari seni memasak dan pengelolaan kuliner.'],
            ['Perhotelan', 'fa-bed', 'Mempelajari tata cara layanan hotel dan restoran.'],
        ] as $jurusan)
        <div class="jurusan-card info-card p-8 text-center hover:shadow-xl transition">
            <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center text-white mb-6 group-hover:scale-110 transition-transform">
                <i class="fa-solid {{ $jurusan[1] }} text-4xl"></i>
            </div>
            <h3 class="font-bold text-xl text-gray-800">{{ $jurusan[0] }}</h3>
            <p class="mt-4 text-gray-600">{{ $jurusan[1] }}</p>
            <a href="#" class="mt-6 inline-block text-blue-600 font-semibold hover:text-blue-700 transition">Selengkapnya →</a>
        </div>
        @endforeach
    </div>
</section>

{{-- ============================
      AGENDA
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-16">
    <div class="flex justify-between items-center">
        <div class="section-header text-3xl">Agenda</div>
        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Semua →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
        @foreach([
            ['Rapat Guru','12 Mei 2025'],
            ['MPLS Siswa Baru','20 Juli 2025'],
            ['Ujian Semester','1 Desember 2025'],
        ] as $agenda)
        <article class="info-card p-6 hover:shadow-xl transition">
            <div class="flex items-center gap-2 text-sm text-gray-500 mb-3">
                <i class="far fa-calendar-alt text-blue-500"></i>
                <span>{{ $agenda[1] }}</span>
            </div>
            <h3 class="mt-2 font-bold text-xl text-gray-800">{{ $agenda[0] }}</h3>
            <p class="mt-3 text-gray-600">Ringkasan singkat agenda kegiatan sekolah.</p>
            <a href="#" class="mt-4 inline-block text-blue-600 font-semibold hover:text-blue-700 transition">Detail →</a>
        </article>
        @endforeach
    </div>
</section>

{{-- ============================
      BERITA, ARTIKEL & INFORMASI
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-16">
    <div class="flex items-center justify-between">
        <div class="section-header text-3xl">Berita, Artikel & Informasi</div>
        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Semua →</a>
    </div>

    <div class="grid md:grid-cols-3 gap-8 mt-8">
        @foreach([1,2,3] as $i)
        <article class="news-card overflow-hidden hover:shadow-xl transition">
            <div class="relative">
                <img src="https://picsum.photos/700/420?random={{ $i }}" class="w-full h-56 object-cover">
                <span class="absolute left-4 top-4 bg-blue-600 text-white text-sm px-4 py-2 rounded-full shadow-lg">{{ now()->format('d M') }}</span>
            </div>
            <div class="p-6">
                <div class="text-sm text-gray-500 font-medium">Kategori Sekolah</div>
                <h3 class="mt-2 font-bold text-xl text-gray-800">Judul Berita Sekolah {{ $i }}</h3>
                <p class="mt-3 text-gray-600">Ringkasan singkat berita, mulai baris ini sebagai teaser untuk pembaca.</p>
                <div class="mt-4 flex items-center justify-between">
                    <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Baca Selengkapnya →</a>
                    <div class="text-sm text-gray-500">Admin • {{ now()->format('Y') }}</div>
                </div>
            </div>
        </article>
        @endforeach
    </div>
</section>

{{-- ============================
      EKSTRAKURIKULER (swiper)
=============================== --}}
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-8">
            <div class="section-header text-3xl">Ekstrakurikuler</div>
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Semua →</a>
        </div>

        <div class="swiper mySwiperEkstrakurikuler">
            <div class="swiper-wrapper">
                @foreach([
                    ['Pramuka', 'fa-hand-paper'],
                    ['Futsal', 'fa-futbol'],
                    ['Basket', 'fa-basketball'],
                    ['Paskibra', 'fa-flag'],
                    ['Robotika', 'fa-robot'],
                    ['Seni Tari', 'fa-music'],
                    ['PMR', 'fa-kit-medical'],
                    ['Jurnalistik', 'fa-newspaper'],
                ] as $ekskul)
                <div class="swiper-slide">
                    <div class="info-card p-6 text-center hover:shadow-xl transition">
                        <img src="https://picsum.photos/400/300?random={{ $ekskul[0] }}" class="rounded-xl mx-auto mb-4 w-full h-40 object-cover">
                        <h3 class="font-bold text-xl text-gray-800">{{ $ekskul[0] }}</h3>
                        <div class="mt-4 w-16 h-1 bg-blue-600 mx-auto rounded-full"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ============================
      FASILITAS
=============================== --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-8">
            <div class="section-header text-3xl">Fasilitas</div>
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Semua →</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
            @foreach([
                ['Perpustakaan', 'Koleksi buku lengkap dan area belajar yang nyaman untuk menunjang kegiatan literasi siswa.'],
                ['Laboratorium Komputer', 'Ruang praktikum dengan perangkat modern untuk mendukung pembelajaran Teknik Komputer dan Jaringan.'],
                ['Bengkel TKR', 'Dilengkapi dengan alat dan mesin modern untuk praktik perbaikan kendaraan ringan.'],
                ['Lapangan Olahraga', 'Lapangan serbaguna untuk berbagai macam olahraga seperti futsal, bola voli, dan basket.'],
                ['Masjid', 'Tempat ibadah yang nyaman dan luas untuk seluruh warga sekolah dalam menunaikan ibadah sehari-hari.'],
                ['Kantin Sehat', 'Menyediakan berbagai makanan dan minuman yang sehat, bersih, dan bergizi dengan harga terjangkau.'],
            ] as $fasilitas)
            <div class="info-card overflow-hidden hover:shadow-xl transition group">
                <div class="overflow-hidden h-56">
                    <img src="https://picsum.photos/seed/{{ $fasilitas[0] }}/600/400.jpg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-6">
                    <h3 class="font-bold text-xl text-gray-800">{{ $fasilitas[0] }}</h3>
                    <p class="mt-3 text-gray-600">{{ $fasilitas[1] }}</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 font-semibold hover:text-blue-700 transition">Selengkapnya →</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================
      GURU (swiper)
=============================== --}}
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-8">
            <div class="section-header text-3xl">Guru</div>
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Semua Guru →</a>
        </div>

        <div class="swiper mySwiperGuru">
            <div class="swiper-wrapper">
                @for($i=1;$i<=8;$i++)
                <div class="swiper-slide">
                    <div class="info-card p-6 text-center hover:shadow-xl transition">
                        <div class="relative mb-4">
                            <img src="https://via.placeholder.com/300x300" class="rounded-full mx-auto w-40 h-40 object-cover">
                            <div class="absolute bottom-0 right-1/3 w-6 h-6 bg-green-500 rounded-full border-2 border-white"></div>
                        </div>
                        <h3 class="font-bold text-xl text-gray-800">Nama Guru {{ $i }}</h3>
                        <p class="text-gray-500 mt-1">Mapel</p>
                        <div class="mt-4 flex justify-center gap-2">
                            <a href="#" class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center hover:bg-blue-600 hover:text-white transition">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>

{{-- ============================
      STAF SEKOLAH (swiper)
=============================== --}}
<section class="py-16">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-8">
            <div class="section-header text-3xl">Staf & Tenaga Kependidikan</div>
            <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Selengkapnya →</a>
        </div>

        <div class="swiper mySwiperStaf">
            <div class="swiper-wrapper">
                @for($i=1;$i<=6;$i++)
                <div class="swiper-slide">
                    <div class="info-card p-6 text-center hover:shadow-xl transition">
                        <img src="https://via.placeholder.com/300x300" class="rounded-full mx-auto mb-4 w-36 h-36 object-cover">
                        <h4 class="font-bold text-lg text-gray-800">Staf {{ $i }}</h4>
                        <p class="text-gray-500 mt-1">Jabatan</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>

{{-- ============================
      GALERI
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-16 mb-16">
    <div class="flex items-center justify-between">
        <div class="section-header text-3xl">Galeri Foto</div>
        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Galeri →</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8">
        @foreach(range(1,8) as $g)
        <div class="gallery-item overflow-hidden rounded-xl">
            <img src="https://picsum.photos/400/300?random={{ $g }}" class="w-full h-40 object-cover hover:scale-110 transition-transform duration-500">
        </div>
        @endforeach
    </div>
</section>

{{-- ============================
      VIDEO PROFIL
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-16 mb-20">
    <div class="flex items-center justify-between">
        <div class="section-header text-3xl">Video Profil</div>
        <a href="#" class="text-blue-600 font-semibold hover:text-blue-700 transition">Lihat Lainnya →</a>
    </div>

    <div class="mt-8 rounded-2xl overflow-hidden shadow-xl">
        <div class="relative" style="padding-bottom: 56.25%;">
            <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
        </div>
    </div>
</section>

{{-- ============================
      TESTIMONI
=============================== --}}
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="section-header text-3xl mb-12 text-center">Testimoni</div>
        
        <div class="swiper mySwiperTestimoni">
            <div class="swiper-wrapper">
                @for($i=1;$i<=4;$i++)
                <div class="swiper-slide">
                    <div class="testimonial-card info-card p-8 hover:shadow-xl transition">
                        <div class="flex items-start gap-4">
                            <img src="https://picsum.photos/100/100?random={{ $i+20 }}" class="w-16 h-16 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-xl text-gray-800">Alumni {{ $i }}</h4>
                                <p class="text-sm text-gray-500 mb-3">Angkatan 202{{ $i }}</p>
                                <p class="text-gray-600 italic">"SMK Dummy memberikan bekal ilmu dan pengalaman yang sangat berharga untuk karir saya saat ini. Terima kasih untuk semua guru dan staf yang telah membimbing saya."</p>
                                <div class="mt-4 flex text-yellow-400">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="swiper-pagination mt-8"></div>
        </div>
    </div>
</section>

<div class="h-24"></div>

{{-- ============================
      SCRIPTS: counters + swiper init
=============================== --}}
<script>
/* Simple hero slider */
(function(){
    const slider = document.getElementById('heroSlider');
    if (!slider) return;
    let idx = 0, total = slider.children.length;
    function show(){ slider.style.transform = `translateX(-${idx*100}%)`; }
    document.getElementById('heroNext').onclick = ()=>{ idx=(idx+1)%total; show(); };
    document.getElementById('heroPrev').onclick = ()=>{ idx=(idx-1+total)%total; show(); };
    setInterval(()=>{ idx=(idx+1)%total; show(); }, 6000);
})();

/* Counters */
(function(){
    const counters = document.querySelectorAll('.counter');
    const runCounter = (counter) => {
        const target = +counter.getAttribute('data-target') || 0;
        let current = 0;
        const step = Math.max(1, Math.floor(target / 120));
        const updateCount = () => {
            current += step;
            if(current >= target){ 
                counter.innerText = target.toLocaleString('id-ID'); 
            } else { 
                counter.innerText = current.toLocaleString('id-ID'); 
                requestAnimationFrame(updateCount); 
            }
        };
        updateCount();
    };
    
    // Using Intersection Observer to start counter when visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                runCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
})();

/* Initialize Swipers if Swiper is available (layout should include Swiper) */
document.addEventListener('DOMContentLoaded', function(){
    if(window.Swiper){
        new Swiper('.mySwiperGuru', {
            slidesPerView: 4,
            spaceBetween: 24,
            loop: true,
            autoplay: { delay: 2500, disableOnInteraction: false },
            breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 1024:{slidesPerView:4} }
        });
        new Swiper('.mySwiperStaf', {
            slidesPerView: 4,
            spaceBetween: 24,
            loop: true,
            autoplay: { delay: 2600, disableOnInteraction: false },
            breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 1024:{slidesPerView:4} }
        });
        new Swiper('.mySwiperEkstrakurikuler', {
            slidesPerView: 4,
            spaceBetween: 24,
            loop: true,
            autoplay: { delay: 2800, disableOnInteraction: false },
            breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 1024:{slidesPerView:4} }
        });
        new Swiper('.mySwiperTestimoni', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            autoplay: { delay: 3000, disableOnInteraction: false },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: { 320:{slidesPerView:1}, 768:{slidesPerView:2} }
        });
    }
});
</script>

@endsection