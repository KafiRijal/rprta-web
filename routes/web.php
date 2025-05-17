<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{LandingPageController, AuthController, DashboardController, UsermanagementController, ProfileController, BukuController, TanamanController, Up2kController};
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
Route::post('auth/_logout', [AuthController::class, '_logout']);
Route::prefix('auth')->middleware([RedirectIfAuthenticated::class . ':guest'])->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('_login', [AuthController::class, '_login'])->name('_login');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('umkm')->middleware('auth');

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

    Route::prefix('tanaman')->middleware(['auth', RoleMiddleware::class . ':1,2'])->group(function () {
        Route::get('', [TanamanController::class, 'tanaman'])->name('tanaman');
        Route::get('tambah_tanaman', [TanamanController::class, 'tambah_tanaman'])->name('tambah_tanaman');
        Route::get('edit_tanaman/{id}', [TanamanController::class, 'edit_tanaman'])->name('edit_tanaman');
        Route::post('_tambah_tanaman', [TanamanController::class, '_tambah_tanaman'])->name('_tambah_tanaman');
        Route::post('_list_tanaman', [TanamanController::class, '_list_tanaman'])->name('_list_tanaman');
        Route::post('_edit_tanaman', [TanamanController::class, '_edit_tanaman'])->name('_edit_tanaman');
        Route::delete('_delete_tanaman/{id}', [TanamanController::class, '_delete_tanaman'])->name('_delete_tanaman');
    });

    Route::prefix('up2k')->middleware(['auth', RoleMiddleware::class . ':1,2'])->group(function () {
        Route::get('', [Up2kController::class, 'up2k'])->name('up2k');
        Route::get('tambah_up2k', [Up2kController::class, 'tambah_up2k'])->name('tambah_up2k');
        Route::get('edit_up2k/{id}', [Up2kController::class, 'edit_up2k'])->name('edit_up2k');
        Route::post('_tambah_up2k', [Up2kController::class, '_tambah_up2k'])->name('_tambah_up2k');
        Route::post('_list_up2k', [Up2kController::class, '_list_up2k'])->name('_list_up2k');
        Route::post('_edit_up2k', [Up2kController::class, '_edit_up2k'])->name('_edit_up2k');
        Route::delete('_delete_up2k/{id}', [Up2kController::class, '_delete_up2k'])->name('_delete_up2k');
    });

    Route::prefix('profile')->middleware('auth')->group(function () {
        Route::get('', [ProfileController::class, 'profile'])->name('profile');
        Route::post('_edit_user', [ProfileController::class, '_edit_user'])->name('_edit_user');
        Route::post('_edit_password', [ProfileController::class, '_edit_password'])->name('_edit_password');
    });
});

Route::get('/404', function () {
    return view('404');
})->name('notFound');
