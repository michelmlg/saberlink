<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\Controller;
use App\Http\Controllers\Auth\UserAuthenticationController;
use App\Http\Controllers\BaitController;

// ROTAS PÁGINAS ESTÁTICAS
Route::get('/', function () {
    return view('home');
});
Route::get('/destaques', function () {
    return view('destaques');
})->name('destaques');

Route::get('/sobre', function () {
    return view('sobre');
});

//ROTAS PAINEL ADMINSTRADOR SISTEMA
Route::get('/admin/panel', function () {
    return view('admin.panel');
});

Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('/admin/leads', function () {
    return view('admin.leads');
});
Route::get('/admin/baits', function () {
    return view('admin.baits');
});

Route::get('/esqueci-senha', function () {
    return view('auth.forget-pass');
});

// Rotas de Autenticação

Route::get('/register', [UserAuthenticationController::class, 'showRegistrationForm'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [UserAuthenticationController::class, 'register'])
    ->middleware('guest');

Route::get('/login', [UserAuthenticationController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [UserAuthenticationController::class, 'login'])
    ->middleware('guest');

Route::post('/logout', [UserAuthenticationController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


// Rotas do Usuário
Route::get('/user/bait-control', function () {
    return view('user.bait-control');
});
Route::get('/user/page', function () {
    return view('bait.page');
});

Route::get('/google/redirect', [App\Http\Controllers\GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [App\Http\Controllers\GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');





// Rotas das Iscas

Route::resource('baits', BaitController::class);
Route::get('/bait-control', [BaitCategoryController::class, 'index'])->name('bait.control');

Route::get('/baits/create', [BaitCategoryController::class, 'create'])->name('baits.create'); // Para exibir o formulário de criação
Route::post('/baits', [BaitCategoryController::class, 'store'])->name('baits.store'); // Para armazenar a nova isca

