<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main']);

Route::get('/about-us', [AboutUsController::class, 'aboutUs']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/login', 'teste');

Route::get('/client', 'teste');

Route::get('/provider', 'teste');

Route::get('/product', 'teste');
