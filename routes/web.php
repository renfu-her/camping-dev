<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NavigationController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::group(['prefix' => 'rent', 'as' => 'rent.'], function () {
   Route::get('/{product_name}', [ProductController::class, 'index'])->name('index');
});