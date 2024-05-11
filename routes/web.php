<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->name('home')->group( function(){

    Route::get('', function () {
        return view('user.home');
    });

});
