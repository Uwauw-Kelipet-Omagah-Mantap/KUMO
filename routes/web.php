<?php
use App\Http\Controllers\AkunController;
use App\Http\Controllers\TabelAkunController;
use App\Http\Controllers\DaftarMobilController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PemilikMobil;
use App\Http\Controllers\PemilikMobilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;

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
    return view('welcome');
});

Route::prefix('dashboard')
        ->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/daftarmobil', [DaftarMobilController::class, 'index'])->name('daftarmobil.index');
    Route::get('/daftarmobil/tambah', [DaftarMobilController::class, 'tambah'])->name('daftarmobil.tambah');
    Route::post('/daftarmobil/simpan', [DaftarMobilController::class, 'simpan'])->name('daftarmobil.simpan');

    Route::get('/pemilikmobil', [PemilikMobilController::class, 'index'])->name('pemilikmobil.index');
});

Route::prefix('auth')->group(function () {
    Route::get('/', [AkunController::class, 'index'])->name('login.formlogin');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.formregister');
});

Route::prefix('landingpage')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');
});