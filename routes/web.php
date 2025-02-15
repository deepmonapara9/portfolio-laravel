<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/work', [PortfolioController::class, 'work'])->name('work');
Route::get('/skills', [PortfolioController::class, 'skills'])->name('skills');
Route::get('/contact', [PortfolioController::class, 'contact'])->name('contact');
