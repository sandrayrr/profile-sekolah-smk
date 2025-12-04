@extends('layouts.main')

@section('content')

<!-- Banner -->
<div class="relative h-64 bg-cover bg-center" style="background-image: url('/img/banner.jpg')">
    <div class="bg-black bg-opacity-50 h-full flex items-center justify-center">
        <h1 class="text-4xl font-bold text-white">Akreditasi</h1>
    </div>
</div>

<div class="py-20 bg-white text-gray-900">
  <div class="max-w-6xl mx-auto px-6">

    <h2 class="text-3xl font-bold text-center mb-12">Informasi Akreditasi Sekolah</h2>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="p-8 shadow-lg rounded-xl border text-center">
        <h3 class="text-2xl font-bold mb-2">Akreditasi Sekolah</h3>
        <p class="text-gray-600 text-lg">A (Unggul)</p>
      </div>

      <div class="p-8 shadow-lg rounded-xl border text-center">
        <h3 class="text-2xl font-bold mb-2">Akreditasi Program Keahlian</h3>
        <p class="text-gray-600 text-lg">A</p>
      </div>

      <div class="p-8 shadow-lg rounded-xl border text-center">
        <h3 class="text-2xl font-bold mb-2">Standar Nasional</h3>
        <p class="text-gray-600 text-lg">Terpenuhi 8 SNP</p>
      </div>
    </div>

  </div>
</div>

@endsection
