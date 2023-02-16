<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarSuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValidasiSuratController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/contact', [HomeController::class, 'kontak'])->name('kontak.index');
Route::post('/contact/post', [HomeController::class, 'kontak_post'])->name('kontak.post');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'login_post'])->name('login.post');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/app/dashboard', [AppController::class, 'index'])->name('app.index');
Route::get('/app/buat_surat', [AppController::class, 'buat_surat'])->name('app.buat_surat');
Route::get('/app/progress+layanan', [AppController::class, 'layanan'])->name('app.layanan');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/daftar_surat', [DaftarSuratController::class, 'index'])->name('daftarsurat.index');
    Route::post('/daftar_surat/insert', [DaftarSuratController::class, 'insert'])->name('daftarsurat.insert');
    Route::get('/daftar_surat/destroy/{id}', [DaftarSuratController::class, 'destroy'])->name('daftarsurat.destroy');

    Route::get('/validasi_surat', [ValidasiSuratController::class, 'index'])->name('validasisurat.index');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update_informasi', [ProfileController::class, 'update_informasi'])->name('profile.update_informasi');
    Route::post('/profile/update_password', [ProfileController::class, 'update_password'])->name('profile.update_password');
    Route::post('/profile/update_avatar', [ProfileController::class, 'update_avatar'])->name('profile.update_avatar');

});
