<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('count', [\App\Http\Controllers\HomeController::class, 'count']);
Route::get('max', [\App\Http\Controllers\HomeController::class, 'max']);
