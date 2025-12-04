<?php

use Illuminate\Support\Facades\Route;
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

