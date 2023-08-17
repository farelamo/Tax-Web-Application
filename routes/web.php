<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AuthController,
    DashboardController,
    PembelianController,
    PenjualanController,
};

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/', [AuthController::class, 'authLogin'])->name('auth.login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'authRegister'])->name('auth.register');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'admin'], function(){
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('/pembelian', PembelianController::class);
        Route::resource('/penjualan', PenjualanController::class);
    });
});
