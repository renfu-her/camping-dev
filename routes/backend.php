<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'backend', 'as' => 'backend.'], function () {
    Route::get('/', function () {
        return view('backend.home');
    })->name('home');
});
