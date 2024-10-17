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

Route::get('/login', function () {
    return view('userlogin');
});
Route::get('/register', function () {
    return view('userregister');
});

Route::get('/esqueci-senha', function () {
    return view('userforgetpass');
});

