@extends('layouts.main')

@section('content')
<style>
/* Gaya untuk membuat tampilan lebih mirip dengan SMK Negeri 1 Kawali */
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    line-height: 1.6;
}

/* Perbaikan tampilan Hero Section */
.hero-section {
    position: relative;
    background: linear-gradient(135deg, #1a3a5f 0%, #2a5298 100%);
    border-radius: 0 0 20px 20px;
    overflow: hidden;
}

/* Perbaikan tampilan Card */
.info-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    border-top: 3px solid #1a3a5f;
}

.info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.12);
}

/* Perbaikan tampilan Section Headers */
.section-header {
    position: relative;
    padding-bottom: 12px;
    margin-bottom: 24px;
}

.section-header:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background-color: #1a3a5f;
}

/* Perbaikan tampilan Buttons */
.btn-primary {
    background-color: #1a3a5f;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #2a5298;
    transform: translateY(-2px);
}

/* Perbaikan tampilan News Cards */
.news-card {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0,0,0,0.12);
}

/* Perbaikan tampilan Swiper */
.swiper-slide {
    border-radius: 12px;
}

/* Perbaikan tampilan Gallery */
.gallery-item {
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.gallery-item:hover {
    transform: scale(1.05);
}

/* Warna tema utama */
.primary-color {
    color: #1a3a5f;
}

.primary-bg {
    background-color: #1a3a5f;
}

.secondary-color {
    color: #2a5298;
}

.secondary-bg {
    background-color: #2a5298;
}
</style>

{{-- ============================
      HERO SLIDER (improved)
=============================== --}}
<div class="hero-section relative w-full overflow-hidden">
    <div id="heroSlider" class="flex transition-transform duration-700">
        @foreach([1,2,3] as $i)
        <div class="min-w-full relative h-[540px]">
            <img src="https://picsum.photos/1600/700?random={{ $i }}"
                 class="w-full h-full object-cover opacity-80">
            <div class="absolute inset-0 flex items-center">
                <div class="container mx-auto px-6">
                    <!-- Text Content -->
                    <div class="max-w-2xl text-white">
                        <h1 class="text-4xl md:text-5xl font-extrabold leading-tight drop-shadow-lg">SMK Dummy Indonesia</h1>
                        <p class="mt-4 text-lg md:text-xl drop-shadow-sm">
                            Sekolah berbasis digital dan teknologi modern. Menyiapkan siswa menjadi tenaga ahli yang kompeten.
                        </p>

                        <div class="mt-6 flex gap-3">
                            <a href="#profil" class="inline-block primary-bg text-white px-5 py-3 rounded-full font-semibold hover:bg-blue-700 transition">Selengkapnya</a>
                            <a href="#jurusan" class="inline-block border border-white/30 text-white px-4 py-3 rounded-full hover:bg-white/10 transition">Lihat Jurusan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <button id="heroPrev" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full">‹</button>
    <button id="heroNext" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/40 text-white p-3 rounded-full">›</button>
</div>

{{-- ============================
      SAMBUTAN KEPALA SEKOLAH
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- card sambutan -->
        <div class="lg:col-span-2 info-card bg-white rounded-2xl shadow p-6">
            <div class="section-header text-2xl font-bold">Sambutan Kepala Sekolah</div>
            <div class="flex items-start gap-6 mt-4">
                <img src="https://picsum.photos/300/300" class="w-40 h-40 rounded-full object-cover shadow" alt="Kepala Sekolah">
                <div>
                    <p class="text-gray-600 mt-2">Assalamu'alaikum Warahmatullahi Wabarakatuh. Selamat datang di website resmi SMK Dummy. Website ini kami hadirkan untuk memberikan informasi kegiatan, prestasi, dan perkembangan sekolah.</p>

                    <div class="mt-4">
                        <a href="#" class="btn-primary inline-block px-4 py-2 text-white rounded-full font-semibold hover:bg-blue-700 transition">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- statistik quick (in card) -->
        <div class="info-card bg-white rounded-2xl shadow p-6">
            <div class="section-header font-semibold">Data Statistik Sekolah</div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="p-4 rounded-lg bg-gray-50 text-center">
                    <div class="text-2xl font-bold counter" data-target="1200">0</div>
                    <div class="text-sm text-gray-600">Jumlah Siswa</div>
                </div>
                <div class="p-4 rounded-lg bg-gray-50 text-center">
                    <div class="text-2xl font-bold counter" data-target="85">0</div>
                    <div class="text-sm text-gray-600">Jumlah Guru</div>
                </div>
                <div class="p-4 rounded-lg bg-gray-50 text-center">
                    <div class="text-2xl font-bold counter" data-target="12">0</div>
                    <div class="text-sm text-gray-600">Jurusan</div>
                </div>
                <div class="p-4 rounded-lg bg-gray-50 text-center">
                    <div class="text-2xl font-bold counter" data-target="4500">0</div>
                    <div class="text-sm text-gray-600">Alumni</div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================
      PROGRAM KEAHLIAN (JURUSAN)
=============================== --}}
<section id="jurusan" class="max-w-7xl mx-auto px-6 mt-12">
    <div class="flex items-center justify-between">
        <div class="section-header text-2xl font-bold">Program Keahlian</div>
        <a href="#" class="text-sm text-blue-600">Lihat Semua →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        @foreach([
            ['Teknik Komputer dan Jaringan', 'fa-laptop-code', 'Mempelajari perakitan, perbaikan, dan jaringan komputer.'],
            ['Multimedia', 'fa-photo-video', 'Mempelajari desain grafis, animasi, dan editing video.'],
            ['Akuntansi dan Keuangan', 'fa-chart-line', 'Mempelajari pencatatan keuangan dan manajemen bisnis.'],
            ['Teknik Kendaraan Ringan', 'fa-car', 'Mempelajari mesin dan kelistrikan sepeda motor.'],
            ['Tata Boga', 'fa-utensils', 'Mempelajari seni memasak dan pengelolaan kuliner.'],
            ['Perhotelan', 'fa-bed', 'Mempelajari tata cara layanan hotel dan restoran.'],
        ] as $jurusan)
        <div class="info-card bg-white rounded-2xl shadow p-6 text-center hover:shadow-lg transition group">
            <div class="w-20 h-20 mx-auto rounded-full primary-bg flex items-center justify-center text-white mb-4 group-hover:scale-110 transition-transform">
                <i class="fa-solid {{ $jurusan[1] }} text-3xl"></i>
            </div>
            <h3 class="font-semibold text-lg">{{ $jurusan[0] }}</h3>
            <p class="mt-3 text-gray-600 text-sm">{{ $jurusan[2] }}</p>
            <a href="#" class="mt-4 inline-block text-blue-600 font-semibold text-sm hover:underline">Selengkapnya →</a>
        </div>
        @endforeach
    </div>
</section>

{{-- ============================
      AGENDA
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-12">
    <div class="flex justify-between items-center">
        <div class="section-header text-2xl font-bold">Agenda</div>
        <a href="#" class="text-sm text-blue-600">Lihat Semua →</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
        @foreach([
            ['Rapat Guru','12 Mei 2025'],
            ['MPLS Siswa Baru','20 Juli 2025'],
            ['Ujian Semester','1 Desember 2025'],
        ] as $agenda)
        <article class="info-card bg-white rounded-2xl shadow p-5 hover:shadow-lg transition">
            <div class="flex items-center gap-2 text-sm text-gray-500">
                <i class="far fa-calendar"></i>
                <span>{{ $agenda[1] }}</span>
            </div>
            <h3 class="mt-2 font-semibold text-lg">{{ $agenda[0] }}</h3>
            <p class="mt-3 text-gray-600">Ringkasan singkat agenda kegiatan sekolah.</p>
        </article>
        @endforeach
    </div>
</section>

{{-- ============================
      BERITA, ARTIKEL & INFORMASI
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-14">
    <div class="flex items-center justify-between">
        <div class="section-header text-2xl font-bold">Berita, Artikel & Informasi</div>
        <a href="#" class="text-blue-600">Lihat Semua →</a>
    </div>

    <div class="grid md:grid-cols-3 gap-8 mt-6">
        @foreach([1,2,3] as $i)
        <article class="news-card bg-white rounded-2xl shadow overflow-hidden hover:shadow-xl transition">
            <div class="relative">
                <img src="https://picsum.photos/700/420?random={{ $i }}" class="w-full h-48 object-cover">
                <span class="absolute left-4 top-4 primary-bg text-white text-xs px-3 py-1 rounded-full shadow">{{ now()->format('d M') }}</span>
            </div>
            <div class="p-5">
                <div class="text-sm text-gray-500">Kategori Sekolah</div>
                <h3 class="mt-2 font-semibold text-lg">Judul Berita Sekolah {{ $i }}</h3>
                <p class="mt-3 text-gray-600">Ringkasan singkat berita, mulai baris ini sebagai teaser untuk pembaca.</p>
                <div class="mt-4 flex items-center justify-between">
                    <a href="#" class="text-blue-600 font-semibold">Baca Selengkapnya →</a>
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
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-6">
            <div class="section-header text-2xl font-bold">Ekstrakurikuler</div>
            <a href="#" class="text-sm text-blue-600">Lihat Semua →</a>
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
                    <div class="info-card bg-white rounded-2xl shadow p-6 text-center">
                        <img src="https://picsum.photos/400/300?random={{ $ekskul[0] }}" class="rounded-xl mx-auto mb-4 w-full h-32 object-cover">
                        <h3 class="font-semibold">{{ $ekskul[0] }}</h3>
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
        <div class="flex items-center justify-between mb-6">
            <div class="section-header text-2xl font-bold">Fasilitas</div>
            <a href="#" class="text-sm text-blue-600">Lihat Semua →</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
            @foreach([
                ['Perpustakaan', 'Koleksi buku lengkap dan area belajar yang nyaman untuk menunjang kegiatan literasi siswa.'],
                ['Laboratorium Komputer', 'Ruang praktikum dengan perangkat modern untuk mendukung pembelajaran Teknik Komputer dan Jaringan.'],
                ['Bengkel TKR', 'Dilengkapi dengan alat dan mesin modern untuk praktik perbaikan kendaraan ringan.'],
                ['Lapangan Olahraga', 'Lapangan serbaguna untuk berbagai macam olahraga seperti futsal, bola voli, dan basket.'],
                ['Masjid', 'Tempat ibadah yang nyaman dan luas untuk seluruh warga sekolah dalam menunaikan ibadah sehari-hari.'],
                ['Kantin Sehat', 'Menyediakan berbagai makanan dan minuman yang sehat, bersih, dan bergizi dengan harga terjangkau.'],
            ] as $fasilitas)
            <div class="info-card bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition group">
                <img src="https://picsum.photos/seed/{{ $fasilitas[0] }}/600/400.jpg" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="p-5">
                    <h3 class="font-semibold text-lg">{{ $fasilitas[0] }}</h3>
                    <p class="mt-2 text-gray-600 text-sm">{{ $fasilitas[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================
      GURU (swiper)
=============================== --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-6">
            <div class="section-header text-2xl font-bold">Guru</div>
            <a href="#" class="text-sm text-blue-600">Semua Guru →</a>
        </div>

        <div class="swiper mySwiperGuru">
            <div class="swiper-wrapper">
                @for($i=1;$i<=8;$i++)
                <div class="swiper-slide">
                    <div class="info-card bg-white rounded-2xl shadow p-6 text-center">
                        <img src="https://via.placeholder.com/300x300" class="rounded-xl mx-auto mb-4 w-40 h-40 object-cover">
                        <h3 class="font-semibold">Nama Guru {{ $i }}</h3>
                        <p class="text-sm text-gray-500">Mapel</p>
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
<section class="py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex items-center justify-between mb-6">
            <div class="section-header text-2xl font-bold">Staf & Tenaga Kependidikan</div>
            <a href="#" class="text-sm text-blue-600">Selengkapnya →</a>
        </div>

        <div class="swiper mySwiperStaf">
            <div class="swiper-wrapper">
                @for($i=1;$i<=6;$i++)
                <div class="swiper-slide">
                    <div class="info-card bg-white rounded-2xl p-5 text-center shadow-sm">
                        <img src="https://via.placeholder.com/300x300" class="rounded-xl mx-auto mb-3 w-36 h-36 object-cover">
                        <h4 class="font-semibold">Staf {{ $i }}</h4>
                        <p class="text-sm text-gray-500">Jabatan</p>
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
<section class="max-w-7xl mx-auto px-6 mt-12">
    <div class="flex items-center justify-between">
        <div class="section-header text-2xl font-bold">Galeri Foto</div>
        <a href="#" class="text-blue-600">Lihat Galeri →</a>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
        @foreach(range(1,8) as $g)
        <div class="gallery-item rounded-2xl overflow-hidden shadow">
            <img src="https://picsum.photos/400/300?random={{ $g }}" class="w-full h-36 object-cover hover:scale-105 transition">
        </div>
        @endforeach
    </div>
</section>

{{-- ============================
      VIDEO PROFIL
=============================== --}}
<section class="max-w-7xl mx-auto px-6 mt-12 mb-20">
    <div class="flex items-center justify-between">
        <div class="section-header text-2xl font-bold">Video Profil</div>
        <a href="#" class="text-blue-600">Lihat Lainnya →</a>
    </div>

    <div class="mt-6">
        <div class="rounded-2xl overflow-hidden shadow">
            <iframe class="w-full h-[420px]" src="https://www.youtube.com/embed/dQw4w9WgXcQ" allowfullscreen></iframe>
        </div>
    </div>
</section>

{{-- ============================
      TESTIMONI
=============================== --}}
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="section-header text-2xl font-bold mb-8">Testimoni</div>
        
        <div class="swiper mySwiperTestimoni">
            <div class="swiper-wrapper">
                @for($i=1;$i<=4;$i++)
                <div class="swiper-slide">
                    <div class="info-card bg-white rounded-2xl p-6 shadow">
                        <div class="flex items-start gap-4">
                            <img src="https://picsum.photos/100/100?random={{ $i+20 }}" class="w-16 h-16 rounded-full object-cover">
                            <div>
                                <h4 class="font-semibold">Alumni {{ $i }}</h4>
                                <p class="text-sm text-gray-500 mb-3">Angkatan 202{{ $i }}</p>
                                <p class="text-gray-600 italic">"SMK Dummy memberikan bekal ilmu dan pengalaman yang sangat berharga untuk karir saya saat ini. Terima kasih untuk semua guru dan staf yang telah membimbing saya."</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="swiper-pagination mt-6"></div>
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
            spaceBetween: 18,
            loop: true,
            autoplay: { delay: 2500, disableOnInteraction: false },
            breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 1024:{slidesPerView:4} }
        });
        new Swiper('.mySwiperStaf', {
            slidesPerView: 4,
            spaceBetween: 18,
            loop: true,
            autoplay: { delay: 2600, disableOnInteraction: false },
            breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 1024:{slidesPerView:4} }
        });
        new Swiper('.mySwiperEkstrakurikuler', {
            slidesPerView: 4,
            spaceBetween: 18,
            loop: true,
            autoplay: { delay: 2800, disableOnInteraction: false },
            breakpoints: { 320:{slidesPerView:1}, 640:{slidesPerView:2}, 1024:{slidesPerView:4} }
        });
        new Swiper('.mySwiperTestimoni', {
            slidesPerView: 2,
            spaceBetween: 24,
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