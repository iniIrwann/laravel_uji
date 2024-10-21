<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\TabelBarang;
use App\Http\Controllers\TabelUser;
use App\Http\Controllers\Transaksi;

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [Dashboard::class, 'dashboard'])->name("dashboard");
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/table_barang', [TabelBarang::class, 'index']);
Route::get('/table_user', [TabelUser::class, 'index']);
Route::get('/transaksi', [Transaksi::class, 'index']);

