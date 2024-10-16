<x-layout.default> <!-- Utilizando o componente de layout padrão -->
  <x-slot:pageTitle>
        Register
  </x-slot:pageTitle>
    <style>
        .hero-section {
            background-image: url('https://www.divera.com.br/storage/app/uploads/public/650/448/cad/thumb_309_730_453_0_0_crop.jpg');
            background-size: cover;
            background-position: center;
            position: absolute; /* Para ficar abaixo do card */
            top: 0;
            right: 0;
            bottom: 0;
            left: 40%; /* Ocupar metade da tela */
            z-index: 0; /* Z-index abaixo do card */
        }

        .overlay {
            background-color: rgba(0, 0, 0, 0.5); /* Cor de fundo com opacidade */
            position: absolute; /* Preenche a hero section */
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1; /* Z-index acima da imagem de fundo */
        }

        .card-container {
            position: relative;
            z-index: 2; /* Z-index acima do overlay */
            display: flex;
            align-items: center;
            justify-content: left;
            height: 100vh; /* Altura total da tela */
            padding: 20px;
        }

        .card {
            width: 400px; /* Largura fixa do card */
            backdrop-filter: blur(10px); /* Desfoque no card */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
        }

        .google-btn {
            background-color: white;
            color: #4285F4;
            border-color: rgb(0, 17, 255);
            transition: background-color 0.3s; /* Transição suave para a cor de fundo */
        }

        .google-btn:hover {
            background-color: rgb(240, 240, 240); /* Cor de fundo ao passar o mouse */
        }

        .links a {
            color: #000; /* Cor dos links */
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline; /* Adiciona sublinhado nos links ao passar o mouse */
        }
    </style>

    

    <div class="container-fluid position-relative">
        <div class="hero-section"></div>
        <div class="overlay"></div> <!-- Adicionando o overlay -->

        <div class="card-container ms-5">
            <div class="card">
                <div class="card-title fw-bold text-center"><h2><b>Registrar</b></h2></div> <!-- Removido <b> -->

                <!-- Google Login Button -->
                <button class="btn google-btn w-100 mb-3">
                    <i class="fa-brands fa-google"></i>
                    Entrar com Google
                </button>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                  <div class="mb-3 mt-2">
                        <label for="name" class="form-label fw-bold">Nome</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Digite seu nome">
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="email" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fw-bold">Senha</label>
                        <input type="password" class="form-control"  name="password" id="password" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-4 mt-4">Entrar</button>
                </form>
                <div class="links text-center">
                    <p><a href="/esqueci-senha">Esqueci a senha</a></p>
                </div>
            </div>
        </div>
    </div>

</x-layout.default>
