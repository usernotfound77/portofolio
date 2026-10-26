<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('portfolio.home');
Route::post('/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');
