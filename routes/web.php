<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'rent', 'as' => 'rent.'], function () {
    Route::get('/{product_name}', [ProductController::class, 'index'])->name('index');
    Route::get('/detail/{product_id}', [ProductController::class, 'detail'])->name('detail');
});

Route::post('/image/upload', [ImageController::class, 'upload'])->name('image.upload');
