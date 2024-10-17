<?php

use Illuminate\Support\Facades\Route;
use Http\Controllers\Controller;
use App\Http\Controllers\BaitController;

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
    Controller::createBait();
});

Route::get('/esqueci-senha', function () {
    return view('auth.forget-pass');
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
Route::resource('baits', BaitController::class);

Route::get('/baits/create', function () {
    return view('bait.control');
});

