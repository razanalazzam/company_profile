<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::view('/', 'home')->name('home');
Route::get('/portofolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/portofolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.detail');
Route::view('/tentang', 'about')->name('about');
Route::view('/kontak', 'contact')->name('contact');