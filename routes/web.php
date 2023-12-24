<?php

use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiUmumController;
use App\Http\Controllers\LinkTerkaitController;
use App\Http\Controllers\MonografiHukumController;
use App\Http\Controllers\PollingController;
use App\Http\Controllers\ProdukHukumController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SampulController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/page/profil', [HomeController::class, 'pageProfil'])->name('page.profil');
Route::get('/page/hukum/{id}', [HomeController::class, 'pageHukum'])->name('page.hukum');
Route::get('/detail/hukum/{id}', [HomeController::class, 'detailHukum'])->name('detail.hukum');
Route::post('/cari', [HomeController::class, 'cariHukum'])->name('cari.hukum');
Route::post('/cari-detail', [HomeController::class, 'cariHukumDetail'])->name('cari.hukum.detail');
// Route::get('/hukum/list', [HomeController::class, 'cariHukum'])->name('hukum.list');

// Route::get('/news-list', [HomeController::class, 'listNews'])->name('news.list');
// Route::get('/page/{id}', [HomeController::class, 'halaman'])->name('halaman');
// Route::get('/organisasi/{id}', [HomeController::class, 'organisasi'])->name('organisasi');


//dokumentasi template
Route::get('docs', function () {
    return File::get(public_path() . '/documentation.html');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::get('ganti-password', [DashboardController::class, 'password'])->name('password');
    Route::post('/ganti-password', [DashboardController::class, 'gantiPassword'])->name('ganti.password');
    Route::get('sosial-media', [InformasiUmumController::class, 'sosmed'])->name('sosmed');
    Route::post('sosial-media', [InformasiUmumController::class, 'storeSosmed'])->name('sosmed.post');
    Route::get('kontak', [InformasiUmumController::class, 'kontak'])->name('kontak');
    Route::post('kontak', [InformasiUmumController::class, 'storeKontak'])->name('kontak.post');
    Route::get('sampul', [InformasiUmumController::class, 'sampul'])->name('sampul');
    Route::post('sampul', [InformasiUmumController::class, 'storeSampul'])->name('sampul.post');
    Route::resource('produk-hukum', ProdukHukumController::class);
    Route::resource('link-terkait', LinkTerkaitController::class);
    Route::resource('polling', PollingController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('monografi', MonografiHukumController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('sampul', SampulController::class);

});