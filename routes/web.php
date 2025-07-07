<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'pages.home')->name('pages.home');
Route::view('/layanan', 'pages.layanan')->name('pages.layanan');
Route::view('/kontak', 'pages.kontak')->name('pages.kontak');
Route::view('/tiktok', 'pages.tiktok')->name('pages.tiktok'); // ✅ Route TikTok
