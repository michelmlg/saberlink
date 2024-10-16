<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/destaques', function () {
    return view('destaques');
});

Route::get('/sobre', function () {
    return view('sobre');
});
