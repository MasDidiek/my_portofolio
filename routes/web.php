<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/portofolio', [PortofolioController::class, 'index'])->name('portofolio.index');
Route::get('/create', [PortofolioController::class, 'create'])->name('portofolio.create');
Route::post('/portofolio/store', [PortofolioController::class, 'store'])->name('portofolio.store');