<?php

use App\Http\Controllers\Authentication\AuthController;
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
Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', [HomeController::class, 'index'])->name('user.index');
Route::get('/blog', [HomeController::class, 'blog'])->name('user.blog');
Route::get('/blog/{id}', [HomeController::class, 'detailBlog'])->name('user.detailBlog');
Route::get('/tentangkami', [HomeController::class, 'about'])->name('user.tentangKami');
Route::get('/kontak', [HomeController::class, 'contact'])->name('user.kontak');
Route::get('/penukaransampah', [HomeController::class, 'penukaranSampah'])->name('user.penukaranSampah');
Route::get('/profile', [HomeController::class, 'profile'])->name('user.profile');
Route::get('/pickup', [HomeController::class, 'pickup'])->name('user.pickup');
Route::get('/tukarPoin', [HomeController::class, 'tukarPoin'])->name('user.tukarPoin');