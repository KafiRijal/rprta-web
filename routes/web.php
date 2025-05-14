<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('tentang', [LandingPageController::class, 'tentang'])->name('tentang');
Route::get('buku', [LandingPageController::class, 'buku'])->name('buku');
Route::get('detailBuku', [LandingPageController::class, 'detailBuku'])->name('detailBuku');
Route::get('tanaman', [LandingPageController::class, 'tanaman'])->name('tanaman');
Route::get('detailTanaman', [LandingPageController::class, 'detailTanaman'])->name('detailTanaman');
Route::get('up2k', [LandingPageController::class, 'up2k'])->name('up2k');
Route::get('detailUp2k', [LandingPageController::class, 'detailUp2k'])->name('detailUp2k');
Route::get('kontak', [LandingPageController::class, 'kontak'])->name('kontak');
