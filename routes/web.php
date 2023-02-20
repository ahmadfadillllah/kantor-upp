<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarSuratController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SuratKeluarController;
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
Route::post('/app/buat_surat/post', [AppController::class, 'buat_surat_post'])->name('app.buat_surat_post');
Route::get('/app/progress_layanan', [AppController::class, 'layanan'])->name('app.layanan');
Route::post('/app/progress_layanan/show', [AppController::class, 'show'])->name('app.layanan_show');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/daftar_surat', [DaftarSuratController::class, 'index'])->name('daftarsurat.index');
    Route::post('/daftar_surat/insert', [DaftarSuratController::class, 'insert'])->name('daftarsurat.insert');
    Route::get('/daftar_surat/destroy/{id}', [DaftarSuratController::class, 'destroy'])->name('daftarsurat.destroy');

    Route::get('/validasi_surat', [ValidasiSuratController::class, 'index'])->name('validasisurat.index');
    Route::get('/validasi_surat/destroy/{id}', [ValidasiSuratController::class, 'destroy'])->name('validasisurat.destroy');
    Route::post('/validasi_surat/post/{id}', [ValidasiSuratController::class, 'post'])->name('validasisurat.post');

    Route::get('/surat_keluar', [SuratKeluarController::class, 'index'])->name('suratkeluar.index');
    Route::post('/surat_keluar/revisi/{id}', [SuratKeluarController::class, 'revisi'])->name('suratkeluar.revisi');

    Route::get('/kontak', [KontakController::class, 'index'])->name('daftarkontak.index');
    Route::get('/kontak/destroy/{id}', [KontakController::class, 'destroy'])->name('daftarkontak.destroy');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile/update_informasi', [ProfileController::class, 'update_informasi'])->name('profile.update_informasi');
    Route::post('/profile/update_password', [ProfileController::class, 'update_password'])->name('profile.update_password');
    Route::post('/profile/update_avatar', [ProfileController::class, 'update_avatar'])->name('profile.update_avatar');

});
