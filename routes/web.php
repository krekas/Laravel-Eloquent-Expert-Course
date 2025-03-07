<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('has', [\App\Http\Controllers\HomeController::class, 'has']);
Route::get('wherehas', [\App\Http\Controllers\HomeController::class, 'wherehas']);
