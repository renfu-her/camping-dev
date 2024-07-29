<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;

Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    // Route::get('/', [CategoryController::class, 'index'])->name('home');
    Route::resource('category', CategoryController::class);
});
