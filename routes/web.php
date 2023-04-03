<?php

use Illuminate\Console\Application;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

Route::get('/',[App\Http\Controllers\FrontendController::class,'index']);
// Route::get('/register',[App\Http\Controllers\RegisterController::class,'index']);
// Route::post('/register/user',[App\Http\Controllers\RegisterController::class,'register']);
Route::post('/ikut_lelang/{id_lelang}',[App\Http\Controllers\FrontendController::class,'ikut_lelang']);
Route::get('/detail/{id_lelang}',[App\Http\Controllers\FrontendController::class,'detail_lelang']);



//pasang login di ('admin')->[middleware]
Route::prefix('admin')->middleware(['auth','admin'])->group(function () {

    //Admin
    Route::get('/',[App\Http\Controllers\AdminController::class,'index']);
    Route::get('/dashboard',[App\Http\Controllers\AdminController::class,'index']);
    

    // [ === USER  ===  ]
        //Masyarakat
        Route::get('/user',[App\Http\Controllers\UserController::class,'index']);
        Route::post('/user',[App\Http\Controllers\UserController::class,'index']);
        //Masyarakat
        // Petugas  
        Route::get('/user_petugas',[App\Http\Controllers\UserController::class,'user_petugas']);
        Route::get('/tambah_user_petugas',[App\Http\Controllers\UserController::class,'tambah_user_petugas']);
        Route::post('/tambah_data_petugas',[App\Http\Controllers\UserController::class,'tambah  _data']);
        // Petugas
    // [ === USER  ===  ]

    // [=== Barang=== ]
    Route::get('/barang',[App\Http\Controllers\BarangController::class,'index']);
    // [=== Barang=== ]
    Route::get('/tambah_barang',[App\Http\Controllers\BarangController::class,'tambah_barang']);
    Route::post('/tambah_data_barang',[App\Http\Controllers\BarangController::class,'tambah_data_barang']);
    Route::get('/delete_data_barang/{id_barang}',[App\Http\Controllers\BarangController::class,'delete_data']);
    // [ === LELANG DIBUKA   ===  ]
    Route::get('/lelang',[App\Http\Controllers\LelangController::class,'lelang']);
    Route::post('/konfirmasi/{id_lelang}',[App\Http\Controllers\LelangController::class,'confirm_status']);
    Route::get('/lelang_dibuka',[App\Http\Controllers\LelangController::class,'index']);
    Route::get('/open_lelang',[App\Http\Controllers\LelangController::class,'tambah_lelang']);
    Route::post('/tambah_barang_lelang',[App\Http\Controllers\LelangController::class,'tambah_barang_lelang']);
    // [ === LELANG DIBUKA   ===  ]
    // [ === LELANG DITUTUP   ===  ]
    Route::get('/tutup_lelang',[App\Http\Controllers\LelangController::class,'tutup_lelang']);
    Route::get('/history_bidding/{id_lelang}',[App\Http\Controllers\LelangController::class,'history_lelang']);
    // [ === LELANG DITUTUP   ===  ]




});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
