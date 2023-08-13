<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboard;

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

Route::group(['prefix'=> 'admin'], function(){
    Route::get('/', [AdminDashboard::class, 'index']);
    Route::get('/penjualan', function () {
        return view('admin.penjualan',["title" => "Admin | Penjualan",]);
    });
    Route::get('/pembelian', function () {
        return view('admin.pembelian',["title" => "Admin | Pembelian",]);
    });
});
