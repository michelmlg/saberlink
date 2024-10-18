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





// Rotas das Iscas

// GET /baits – Listar todas as iscas (chama o método index).
// GET /baits/create – Exibir formulário para criar uma nova isca (chama o método create).
// POST /baits – Armazenar uma nova isca (chama o método store).
// GET /baits/{id} – Exibir uma isca específica (chama o método show).
// GET /baits/{id}/edit – Exibir formulário de edição de uma isca (chama o método edit).
// PUT /baits/{id} – Atualizar uma isca existente (chama o método update).
// DELETE /baits/{id} – Deletar uma isca (chama o método destroy).

// o resource gera automaticamente todas as rotas para o CRUD de iscas (baits).
// Rotas das Iscas
Route::resource('baits', BaitController::class);
Route::get('/baits/create', [BaitCategoryController::class, 'create'])->name('baits.create'); // Para exibir o formulário de criação
Route::post('/baits', [BaitCategoryController::class, 'store'])->name('baits.store'); // Para armazenar a nova isca

