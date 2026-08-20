<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home'); //la landing del ecommerce

Route::prefix('product')->as('product.')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('index'); //muestra listado de productos
    Route::get('/create', 'create')->name('create'); //formulario para crear un producto
    Route::get('/{idProduct}', 'show')->name('show'); //el detalle de un producto
});

//todo apuntando al mismo css ubicado en la carpeta public/styles.css
