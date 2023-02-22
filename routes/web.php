<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::resource('tanggapan', TanggapanController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('masyarakat', MasyarakatController::class);

//login
Route::get('/login', [UserController::class,'index'])->name('login');
Route::post('/login',[UserController::class, 'cekLogin'])->name('cekLogin');