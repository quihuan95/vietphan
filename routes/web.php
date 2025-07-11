<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Language routes
Route::get('/language/{locale}', [LanguageController::class, 'switchLanguage'])->name('language.switch');
