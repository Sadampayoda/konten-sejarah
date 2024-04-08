<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KeahlianController;
use App\Http\Controllers\KeanggotaanController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MedsosController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return redirect()->route('user.index');
});

Route::middleware('auth')->group(function(){
    Route::resource('keanggotaan', KeanggotaanController::class);
    Route::resource('keahlian', KeahlianController::class);
    Route::resource('sejarah',SejarahController::class);
    Route::resource('artikel',ArtikelController::class);
    Route::resource('galeri',GaleriController::class);
    Route::resource('kontak',KontakController::class);
    Route::resource('medsos',MedsosController::class);
    Route::resource('user',UserController::class);
});

Route::controller(BerandaController::class)->group(function(){
    Route::get('/beranda','index')->name('beranda.home');
    Route::get('/beranda/{id}/sejarah','sejarah')->name('beranda.sejarah');
    Route::get('/beranda/{id}/artikel','artikel')->name('beranda.artikel');
    Route::get('/beranda/keanggotaan','keanggotaan')->name('beranda.keanggotaan');
    Route::get('/login','login')->name('beranda.login');
    Route::get('/logout','logout')->name('beranda.logout');
    // Route::get('/login','login')->name('beranda.login');
    Route::post('/login', 'validasilogin')->name('beranda.validasi');
});