<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'main']);

Route::get('/aboutus', [AboutUsController::class, 'aboutUs']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/login', function(){return 'teste'; });

Route::prefix('/app')->group(function(){
    
    Route::get('/client', function(){return 'teste'; })->name('app.cliente');
    Route::get('/provider', function(){return 'teste'; });
    Route::get('/product', function(){return 'teste'; });

});

Route::fallback(function() {
    echo 'A rota acessada não existe, clique <a href="/">aqui</a> para voltar à página inicial';
});

