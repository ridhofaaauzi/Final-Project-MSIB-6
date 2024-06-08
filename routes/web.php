<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminKelolaArtikelController;
use App\Http\Controllers\Admin\AdminKelolaPoinController;
use App\Http\Controllers\Admin\AdminKelolaSampahController;
use App\Http\Controllers\Admin\AdminKelolaUserController;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// authentication
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/registerPost', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// users
Route::get('/', [HomeController::class, 'index'])->name('user.index');

// blogs
Route::get('/blog', [BlogController::class, 'index'])->name('user.blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('user.detailBlog');

Route::get('/tentangkami', [HomeController::class, 'about'])->name('user.tentangKami');
Route::get('/kontak', [HomeController::class, 'contact'])->name('user.kontak');
Route::get('/penukaransampah', [HomeController::class, 'penukaranSampah'])->name('user.penukaranSampah');
Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');
Route::get('/pickup', [HomeController::class, 'pickup'])->name('user.pickup');
Route::get('/tukarPoin', [HomeController::class, 'tukarPoin'])->name('user.tukarPoin');

// admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// admin user
Route::get('/admin/kelolaUser', [AdminKelolaUserController::class, 'index'])->name('admin.kelolaUser');
Route::get('/admin/kelolaUser/show/{id}', [AdminKelolaUserController::class, 'show'])->name('admin.kelolaUser.show');
Route::get('/admin/kelolaUser/edit/{id}', [AdminKelolaUserController::class, 'edit'])->name('admin.kelolaUser.edit');
Route::put('/admin/kelolaUser/update/{id}', [AdminKelolaUserController::class, 'update'])->name('admin.kelolaUser.update');
Route::delete('/admin/kelolaUser/delete/{id}', [AdminKelolaUserController::class, 'destroy'])->name('admin.kelolaUser.delete');

// admin kelola artikel
Route::get('/admin/kelolaArtikel', [AdminKelolaArtikelController::class, 'index'])->name('admin.kelolaArtikel');
Route::get('/admin/kelolaArtikel/create', [AdminKelolaArtikelController::class, 'create'])->name('admin.kelolaArtikel.create');
Route::post('/admin/kelolaArtikel/store', [AdminKelolaArtikelController::class, 'store'])->name('admin.kelolaArtikel.store');
Route::get('/admin/kelolaArtikel/edit/{id}', [AdminKelolaArtikelController::class, 'edit'])->name('admin.kelolaArtikel.edit');
Route::put('/admin/kelolaArtikel/update/{id}', [AdminKelolaArtikelController::class, 'update'])->name('admin.kelolaArtikel.update');
Route::delete('/admin/kelolaArtikel/delete/{id}', [AdminKelolaArtikelController::class, 'destroy'])->name('admin.kelolaArtikel.destroy');

// admin kelola sampah
Route::get('/admin/kelolaSampah', [AdminKelolaSampahController::class, 'index'])->name('admin.kelolaSampah');
Route::get('/admin/kelolaSampah/create', [AdminKelolaSampahController::class, 'create'])->name('admin.kelolaSampah.create');
Route::post('/admin/kelolaSampah/store', [AdminKelolaSampahController::class, 'store'])->name('admin.kelolaSampah.store');
Route::get('/admin/kelolaSampah/edit/{id}', [AdminKelolaSampahController::class, 'edit'])->name('admin.kelolaSampah.edit');
Route::put('/admin/kelolaSampah/update/{id}', [AdminKelolaSampahController::class, 'update'])->name('admin.kelolaSampah.update');
Route::delete('/admin/kelolaSampah/delete/{id}', [AdminKelolaSampahController::class, 'destroy'])->name('admin.kelolaSampah.destroy');

// admin kelola poin
Route::get('/admin/kelolaPoin', [AdminKelolaPoinController::class, 'index'])->name('admin.kelolaPoin');
Route::get('/admin/kelolaPoin/create', [AdminKelolaPoinController::class, 'create'])->name('admin.kelolaPoin.create');
Route::post('/admin/kelolaPoin/store', [AdminKelolaPoinController::class, 'store'])->name('admin.kelolaPoin.store');
Route::get('/admin/kelolaPoin/edit/{id}', [AdminKelolaPoinController::class, 'edit'])->name('admin.kelolaPoin.edit');
Route::put('/admin/kelolaPoin/update/{id}', [AdminKelolaPoinController::class, 'update'])->name('admin.kelolaPoin.update');
Route::delete('/admin/kelolaPoin/delete/{id}', [AdminKelolaPoinController::class, 'destroy'])->name('admin.kelolaPoin.destroy');