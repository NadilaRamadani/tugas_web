<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/profil', [PageController::class, 'profil'])->name('profil');
Route::get('/foto', [PageController::class, 'foto'])->name('foto');
Route::get('/video', [PageController::class, 'video'])->name('video');
Route::get('/cerita', [PageController::class, 'cerita'])->name('cerita');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');