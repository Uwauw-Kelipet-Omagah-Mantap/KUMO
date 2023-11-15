<?php
use App\Http\Controllers\AkunController;
use App\Http\Controllers\DashboardController;
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

Route::prefix('dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
});

Route::prefix('auth')->group(function () {
    Route::get('/', [AkunController::class, 'index'])->name('login.formlogin');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.formregister');
});

Route::prefix('landingpage')->group(function () {
    Route::get('/', [LandingPageController::class, 'index'])->name('landingpage.index');
});