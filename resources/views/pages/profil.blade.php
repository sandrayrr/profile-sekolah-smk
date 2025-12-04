<!-- resources/views/profil.blade.php -->
@extends('layouts.main')

@section('content')

<!-- Header Banner -->
<section class="w-full h-64 bg-cover bg-center flex items-center justify-center" style="background-image:url('/images/profil-banner.jpg')">
    <div class="bg-black/50 w-full h-full flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white">Profil Sekolah</h1>
    </div>
</section>

<!-- Sambutan Kepala Sekolah Style Sitesch -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <img src="/images/kepsek.jpg" class="rounded-xl shadow-lg" alt="Kepala Sekolah">

        <div>
            <h2 class="text-3xl font-bold mb-4">Sambutan Kepala Sekolah</h2>
            <p class="text-gray-700 leading-relaxed mb-4">
                Assalamu’alaikum Warahmatullahi Wabarakatuh.
                Puji syukur kita panjatkan ke hadirat Allah SWT. Selamat datang di website resmi sekolah kami.
            </p>
            <p class="text-gray-700 leading-relaxed mb-6">
                Website ini sebagai media informasi untuk peserta didik, orang tua, alumni maupun masyarakat.
                Semoga dapat memberikan kemudahan dalam mengakses informasi sekolah.
            </p>
            <p class="font-semibold text-gray-800">Kepala Sekolah,</p>
            <p class="font-bold text-lg">Nama Kepala Sekolah</p>
        </div>
    </div>
</section>

<!-- Visi Misi -->
<section class="py-16">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="bg-white shadow rounded-xl p-8">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Visi</h2>
            <p class="text-gray-700 leading-relaxed">“Menjadi sekolah unggul, berprestasi, dan berakhlak mulia.”</p>
        </div>

        <div class="bg-white shadow rounded-xl p-8">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Misi</h2>
            <ul class="list-disc ml-6 text-gray-700 space-y-2">
                <li>Meningkatkan mutu akademik dan non-akademik.</li>
                <li>Mengembangkan potensi siswa secara optimal.</li>
                <li>Membina karakter religius, disiplin, dan mandiri.</li>
                <li>Meningkatkan kompetensi teknologi informasi.</li>
            </ul>
        </div>
    </div>
</section>

<!-- Struktur Organisasi -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-10">Struktur Organisasi</h2>
        <img src="/images/struktur.png" class="mx-auto rounded-xl shadow-lg" alt="Struktur Organisasi">
    </div>
</section>

@endsection
