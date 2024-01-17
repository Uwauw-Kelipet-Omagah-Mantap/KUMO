<?php
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DaftarMobilPMController;
use App\Http\Controllers\DashboardPMController;
use App\Http\Controllers\DashboardADController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PemilikMobilController;
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

// Tampilan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('formlogin.index');
// Proses login
Route::post('/login', [AuthController::class, 'login'])->name('login');
// Tampilan form register
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('formregister.index');
// Proses registrasi
Route::post('/register', [AuthController::class, 'register'])->name('register');
// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('/pemilik-mobil')->middleware(['auth', 'CheckRole'])->group(function () {
    // Rute yang hanya dapat diakses oleh pemilik mobil
    Route::get('/dashboard', [DashboardPMController::class, 'index'])->name('dashboardpm.index');
    Route::get('/daftar-mobil', [DaftarMobilPMController::class, 'index'])->name('daftarmobilpm.index');
    Route::get('/daftar-mobil/tambah', [DaftarMobilPMController::class, 'tambah'])->name('daftarmobilpm.tambah');
    Route::post('/daftar-mobil/simpan', [DaftarMobilPMController::class, 'simpan'])->name('daftarmobilpm.simpan');
});

Route::group(['middleware' => 'checkrole:admin'], function () {
    // Rute yang hanya dapat diakses oleh Admin
    Route::get('/admin/dashboard', [DashboardADController::class, 'index'])->name('dashboardad.index');
    Route::get('/admin/manage-user', [AkunController::class, 'index'])->name('pengguna.index');
    Route::get('/admin/manage-user/tambah', [AkunController::class, 'tambah'])->name('pengguna.tambah');
    Route::post('/admin/manage-user/simpan', [AkunController::class, 'simpan'])->name('pengguna.simpan');
    Route::get('/admin/manage-user/edit/{id}', [AkunController::class, 'edit'])->name('pengguna.edit');
    Route::post('/admin/manage-user/edit/{id}', [AkunController::class, 'update'])->name('pengguna.update');
    Route::delete('/admin/manage-user/destroy/{id}', [AkunController::class, 'destroy'])->name('pengguna.destroy');
});


// Route::prefix('dashboard')
//         ->group(function () {
//     Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
//     Route::get('/daftarmobil', [DaftarMobilController::class, 'index'])->name('daftarmobil.index');
//     Route::get('/daftarmobil/tambah', [DaftarMobilController::class, 'tambah'])->name('daftarmobil.tambah');
//     Route::post('/daftarmobil/simpan', [DaftarMobilController::class, 'simpan'])->name('daftarmobil.simpan');

//     Route::get('/pemilikmobil', [PemilikMobilController::class, 'index'])->name('pemilikmobil.index');
//     Route::get('/pemilikmobil/tambah', [PemilikMobilController::class, 'tambah'])->name('pemilikmobil.tambah');
//     Route::post('/pemilikmobil/simpan', [PemilikMobilController::class, 'simpan'])->name('pemilikmobil.simpan');
//     Route::get('/pemilikmobil/edit/{id}', [PemilikMobilController::class, 'edit'])->name('pemilikmobil.edit');
//     Route::post('/pemilikmobil/edit/{id}', [PemilikMobilController::class, 'update'])->name('pemilikmobil.update');
// });

// Route::prefix('landingpage')->group(function () {
//     Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');
// });