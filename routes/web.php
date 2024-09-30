<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre-nos', function () {
    return view('welcome');
});

Route::get('/contato', function () {
    return view('welcome');
});
