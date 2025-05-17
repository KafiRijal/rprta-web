<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LandingPageController, AuthController, DashboardController, UsermanagementController, ProfileController, BukuController};
use App\Http\Middleware\{RoleMiddleware, RedirectIfAuthenticated};

Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('tentang', [LandingPageController::class, 'tentang'])->name('tentang');
Route::get('buku', [LandingPageController::class, 'buku'])->name('buku');
Route::get('detailBuku', [LandingPageController::class, 'detailBuku'])->name('detailBuku');
Route::get('tanaman', [LandingPageController::class, 'tanaman'])->name('tanaman');
Route::get('detailTanaman', [LandingPageController::class, 'detailTanaman'])->name('detailTanaman');
Route::get('up2k', [LandingPageController::class, 'up2k'])->name('up2k');
Route::get('detailUp2k', [LandingPageController::class, 'detailUp2k'])->name('detailUp2k');
Route::get('kontak', [LandingPageController::class, 'kontak'])->name('kontak');

// Administrator
Route::get('dashboard', [DashboardController::class, 'index'])->name('umkm')->middleware('auth');
Route::post('auth/_logout', [AuthController::class, '_logout']);

Route::prefix('auth')->middleware([RedirectIfAuthenticated::class . ':guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('_login', [AuthController::class, '_login'])->name('_login');
});

Route::prefix('usermanagement')->middleware(['auth', RoleMiddleware::class . ':1'])->group(function () {
    Route::get('', [UsermanagementController::class, 'usermanagement'])->name('usermanagement');
    Route::get('tambah_user', [UsermanagementController::class, 'tambah_user'])->name('tambah_user');
    Route::get('edit_user/{id}', [UsermanagementController::class, 'edit_user'])->name('edit_user');
    Route::post('_tambah_user', [UsermanagementController::class, '_tambah_user'])->name('_tambah_user');
    Route::post('_list_user', [UsermanagementController::class, '_list_user'])->name('_list_user');
    Route::post('_edit_user', [UsermanagementController::class, '_edit_user'])->name('_edit_user');
    Route::delete('_delete_user/{id}', [UsermanagementController::class, '_delete_user'])->name('_delete_user');
});

Route::prefix('buku')->middleware(['auth', RoleMiddleware::class . ':1,2'])->group(function () {
    Route::get('', [BukuController::class, 'buku'])->name('buku');
    Route::get('tambah_buku', [BukuController::class, 'tambah_buku'])->name('tambah_buku');
    Route::get('edit_buku/{id}', [BukuController::class, 'edit_buku'])->name('edit_buku');
    Route::post('_tambah_buku', [BukuController::class, '_tambah_buku'])->name('_tambah_buku');
    Route::post('_list_buku', [BukuController::class, '_list_buku'])->name('_list_buku');
    Route::post('_edit_buku', [BukuController::class, '_edit_buku'])->name('_edit_buku');
    Route::delete('_delete_buku/{id}', [BukuController::class, '_delete_buku'])->name('_delete_buku');
});

Route::prefix('profile')->middleware('auth')->group(function () {
    Route::get('', [ProfileController::class, 'profile'])->name('profile');
    Route::post('_edit_user', [ProfileController::class, '_edit_user'])->name('_edit_user');
    Route::post('_edit_password', [ProfileController::class, '_edit_password'])->name('_edit_password');
});

Route::get('/404', function () {
    return view('404');
})->name('notFound');
