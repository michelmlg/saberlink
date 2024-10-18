<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserAuthenticationController extends Controller
{
    // Exibe o formulário de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Registra um novo usuário
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

       return redirect()->route('home'); // Redireciona após o registro
    }

    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Autentica o usuário
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            return redirect()->intended('destaques');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    // Realiza logout
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
