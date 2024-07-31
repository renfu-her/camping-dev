<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AuthController;

Route::group(['prefix' => 'backend', 'as' => 'backend.', 'middleware' => 'adminAuth'], function () {
    Route::get('/', [ProductController::class, 'home'])->name('home');
    Route::resource('category', CategoryController::class);
    Route::resource('product', ProductController::class);
});

Route::get('/backend/login', [AuthController::class, 'login'])->name('backend.login');
Route::post('/backend/loginVerify', [AuthController::class, 'loginVerify'])->name('backend.loginVerify');
Route::get('/backend/logout', [AuthController::class, 'logout'])->name('backend.logout');
