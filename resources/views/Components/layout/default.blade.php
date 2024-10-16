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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="{/{asset('css/bootstrap.css')}}">-->

    <!-- Link Font-Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles customizados -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero-section {
            background-image: url('/images/hero-bg.jpg');
            background-size: cover;
            padding: 80px 0;
            color: white;
            text-align: center;
        }
        .cta-button {
            background-color: #ff5733;
            color: white;
            padding: 15px 30px;
            border-radius: 5px;
            font-weight: bold;
            text-decoration: none;
        }
    </style>


</head>
<body>
    <!-- Header da página -->
    <nav class="navbar navbar-expand-lg p-3 navbar-dark bg-dark">
            <a class="navbar-brand" href="#">SaberLink</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="/destaques" :active="request()->is('destaques')">Destaques</x-nav-link>
            </li>
            <li class="nav-item">
                <x-nav-link href="/sobre" :active="request()->is('sobre')">Sobre</x-nav-link>
            </li>
            <li>
                <x-nav-link type="button" href="/login" :active="request()->is('login')">Login</x-nav-link>
            </li>
            <li>
                <x-nav-link type="button" href="/register" :active="request()->is('register')">Registrar</x-nav-link>
            </li>
            </ul>
        </div>
        </nav>

    {{$slot}}
    
    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p>&copy; {{ date('Y') }} SaberLink. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- JavaScript do Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!--<script src="{/{ asset('js/bootstrap.min.js') }}"></script>-->
</body>
</html>
