@extends('layouts.main')



@section('content')

<!-- Banner -->
<div class="relative h-64 bg-cover bg-center" style="background-image: url('/img/banner.jpg')">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white">Fasilitas Sekolah</h1>
    </div>
</div>

<div class="py-20 bg-white text-gray-900">
  <div class="max-w-6xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-12">Fasilitas Unggulan</h2>

    <div class="grid md:grid-cols-3 gap-8">

      <div class="p-6 rounded-xl shadow border bg-gray-50">
        <h3 class="text-2xl font-semibold mb-2">Laboratorium Komputer</h3>
        <p class="text-gray-600">Dilengkapi komputer modern untuk pembelajaran TIK.</p>
      </div>

      <div class="p-6 rounded-xl shadow border bg-gray-50">
        <h3 class="text-2xl font-semibold mb-2">Perpustakaan</h3>
        <p class="text-gray-600">Ribuan koleksi buku dan literatur pembelajaran.</p>
      </div>

      <div class="p-6 rounded-xl shadow border bg-gray-50">
        <h3 class="text-2xl font-semibold mb-2">Ruang Kelas Nyaman</h3>
        <p class="text-gray-600">Ber-AC, proyektor, dan fasilitas belajar lengkap.</p>
      </div>

      <div class="p-6 rounded-xl shadow border bg-gray-50">
        <h3 class="text-2xl font-semibold mb-2">Lapangan Olahraga</h3>
        <p class="text-gray-600">Tersedia lapangan futsal, voli, dan basket.</p>
      </div>

      <div class="p-6 rounded-xl shadow border bg-gray-50">
        <h3 class="text-2xl font-semibold mb-2">Ruang UKS</h3>
        <p class="text-gray-600">Fasilitas kesehatan untuk siswa.</p>
      </div>

      <div class="p-6 rounded-xl shadow border bg-gray-50">
        <h3 class="text-2xl font-semibold mb-2">Kantin</h3>
        <p class="text-gray-600">Area makan bersih dengan menu sehat.</p>
      </div>

    </div>

  </div>
</div>

@endsection

