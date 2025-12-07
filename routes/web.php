<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\BerandaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', fn() => view('pages.beranda'))->name('beranda');
Route::get('/profil', fn() => view('pages.profil'))->name('profil');
Route::get('/jurusan', fn() => view('pages.jurusan'))->name('jurusan');
Route::get('/artikel', fn() => view('pages.artikel'))->name('artikel');
Route::get('/galeri', fn() => view('pages.galeri'))->name('galeri');
Route::get('/prestasi', fn() => view('pages.prestasi'))->name('prestasi');

Route::get('/link', fn() => view('pages.link'))->name('link');
Route::get('/akreditasi', fn() => view('pages.akreditasi'))->name('akreditasi');
Route::get('/ekstrakurikuler', fn() => view('pages.ekstrakulikuler'))->name('ekstrakurikuler');
Route::get('/fasilitas', fn() => view('pages.fasilitas'))->name('fasilitas');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('slider', SliderController::class)->middleware('auth');
Route::resource('beranda', BerandaController::class)->middleware('auth');

require __DIR__.'/auth.php';
