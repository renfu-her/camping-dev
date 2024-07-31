<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageController;


Route::get('/', function () {
    return view('frontend.home');
});

Route::group(['prefix' => 'rent', 'as' => 'rent.'], function () {
    Route::get('/{product_name}', [ProductController::class, 'index'])->name('index');
});

Route::post('/image/upload', [ImageController::class, 'upload'])->name('image.upload');
