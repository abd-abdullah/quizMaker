<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function (){
    Route::post('login', 'Auth\AuthController@login');
    Route::post('register', 'Auth\AuthController@register');

    Route::middleware('auth:api')->group(function() {
        Route::get('/user', function (){
            return auth()->user();
        });
    });
});
