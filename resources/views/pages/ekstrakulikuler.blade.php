@extends('layouts.main')



@section('content')

<!-- Banner -->
<div class="relative h-64 bg-cover bg-center" style="background-image: url('/img/banner.jpg')">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white">Ekstrakurikuler</h1>
    </div>
</div>

<div class="py-20 bg-gray-100 text-gray-900">
  <div class="max-w-6xl mx-auto px-6">

    <h2 class="text-4xl font-bold text-center mb-12">Program Ekstrakurikuler</h2>

    <div class="grid md:grid-cols-3 gap-8">

      <div class="bg-white p-6 rounded-xl shadow border">
        <h3 class="text-2xl font-semibold mb-2">Pramuka</h3>
        <p class="text-gray-600">Kegiatan pembentukan karakter dan kepemimpinan.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border">
        <h3 class="text-2xl font-semibold mb-2">Paskibra</h3>
        <p class="text-gray-600">Kegiatan kedisiplinan dan baris-berbaris.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border">
        <h3 class="text-2xl font-semibold mb-2">Futsal</h3>
        <p class="text-gray-600">Ekstrakurikuler olahraga dengan prestasi tingkat kota.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border">
        <h3 class="text-2xl font-semibold mb-2">Volly</h3>
        <p class="text-gray-600">Pengembangan skill olahraga voli.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border">
        <h3 class="text-2xl font-semibold mb-2">Basket</h3>
        <p class="text-gray-600">Pelatihan dan pembinaan atlet basket pelajar.</p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow border">
        <h3 class="text-2xl font-semibold mb-2">Seni Musik</h3>
        <p class="text-gray-600">Pengembangan bakat musik modern & tradisional.</p>
      </div>

    </div>

  </div>
</div>

@endsection
