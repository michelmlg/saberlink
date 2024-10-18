<?php
use App\Http\Controllers\HomeController;
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta tags SEO -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Encontre o conteúdo que você procura de forma gratuita!">
    <meta name="keywords" content="gratuitos, produtos, serviços, cursos, e-books, conteúdos">
    <meta name="author" content="Saberlink">
    
    <!-- Título da página -->
    <title>{{$pageTitle}}</title>

    <!-- Link Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- CSS Bootstrap -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Link Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- JavaScript do Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

</head>
<body>
    <!-- Header da página -->
   <nav class="navbar navbar-expand-lg p-3 navbar-dark bg-dark">
    <img src="{{asset('images/logoSl.png')}}" alt="Logo da SaberLink" class="logo" style="height:auto; width: 2.5rem;">
    <a class="navbar-brand" href="#">SaberLink</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="/destaques" :active="request()->is('destaques')">Destaques</x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="/sobre" :active="request()->is('sobre')">Sobre</x-nav-link>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            <!-- Verifica se o usuário está autenticado -->
            @auth
                <!-- Menu dropdown para usuários logados -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> {{ Auth::user()->name }} <!-- Exibe o nome do usuário -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li>
                            <a class="dropdown-item" href="/user/bait-control">
                                <i class="fas fa-fish"></i> Gestão de Iscas Digitais
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/perfil">
                                <i class="fas fa-user-cog"></i> Perfil
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <!-- Links de Login e Registro para usuários não logados -->
                <li class="nav-item">
                    <x-nav-link href="/login" :active="request()->is('login')">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </x-nav-link>
                </li>
                <li class="nav-item">
                    <x-nav-link href="/register" :active="request()->is('register')">
                        <i class="fas fa-user-plus"></i> Registrar
                    </x-nav-link>
                </li>
            @endauth
        </ul>
    </div>
</nav>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    {{$slot}}
    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        {{-- <div class="container">
            <p>&copy; {{ date('Y') }} SaberLink. Todos os direitos reservados.</p>
        </div> --}}

        <p>&copy; {{ date('Y') }} Todos os direitos reservados - SaberLink</p>
    <img src="{{asset('images/logoSl.png')}}" style="height:auto; width: 2rem;"><i class="fa-brands fa-laravel pt-2" style="height:auto; width: 2rem;"></i>
    </footer>

    
</body>
</html>
