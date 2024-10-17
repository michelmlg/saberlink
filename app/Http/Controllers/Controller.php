<?php

namespace App\Http\Controllers;

use App\Models\Bait;

abstract class Controller
{
    
}


// use App\Models\User;

// // Criando um novo usuário
// $user = User::create([
//     'name' => 'John Doe',
//     'email' => 'john@example.com',
//     'password' => bcrypt('secret'),
//     'id_privilege' => 1
// ]);

// use App\Models\User;

// // Buscar todos os usuários
// $users = User::all();

// // Buscar um usuário por ID
// $user = User::find(1);

// // Buscar usuários com o privilégio específico
// $usersWithPrivilege = User::where('id_privilege', 1)->get();

// use App\Models\User;

// // Atualizar os dados do usuário
// $user = User::find(1);
// $user->name = 'Jane Doe';
// $user->save();

// use App\Models\User;

// // Deletar um usuário
// $user = User::find(1);
// $user->delete();




// PAGINAS BAIT
// use App\Models\User;

// // Buscar todos os baits de um usuário
// $user = User::find(1);
// $baits = $user->baits;

// // Adicionar um bait para um usuário
// $user->baits()->attach($bait_id, ['nm_title' => 'Novo Bait', 'ds_bait' => 'Descrição do bait']);

// // Remover um bait
// $user->baits()->detach($bait_id);




