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
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', function () {

});

Route::get('/esqueci-senha', function () {
    return view('auth.forget-pass');
});

