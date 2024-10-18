<x-layout.default>
  <x-slot:pageTitle>
        Page
  </x-slot:pageTitle>

<style>
               .header {
            background-color: #01438a;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 20px 20px;
        }
        .container {
            margin-top: 30px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2); /* Sombra mais pronunciada */
            transition: transform 0.3s ease; /* Transição suave ao passar o mouse */
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
        .btn-primary {
            background-color: #03c091;
            border-color: #05bb8e;
            transition: background-color 0.3s ease, transform 0.3s ease; /* Transição para o botão */
        }
        .btn-primary:hover {
            background-color: #047055;
            transform: scale(1.05); /* Aumenta o botão ao passar o mouse */
        }
        .footer-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #020011;
            padding: 10px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-weight: bold; /* Negrito ao texto */
            color: #ffffff; /* Cor do texto */
        }
        .footer-bar img {
            max-height: 50px; /* Altura máxima da imagem */
            margin-left: 10px; /* Espaçamento à esquerda da imagem */
        }
    </style>


 <div class="header">
        <h1>Descubra os Segredos do Marketing Digital!</h1>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/600x250.png?text=E-book+Marketing+Digital" class="card-img-top" alt="E-book Marketing Digital">
                    <div class="card-body text-center">
                        <h2 class="card-title">E-book: Os 10 Segredos do Marketing Digital</h2>
                        <p class="card-text">Aprenda as estratégias que os especialistas usam para impulsionar negócios online! Este e-book revela os segredos mais bem guardados do marketing digital, incluindo técnicas de SEO, dicas para anúncios irresistíveis, como aumentar sua taxa de conversão e estratégias de marketing de conteúdo eficazes.</p>
                        <h3 class="mt-4">Gratuito!</h3>
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">Pegar a Oportunidade</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Preencha seus dados</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bar">
        <p>Todos os direitos reservados - SaberLink</p>
        <img src="/image/SaberLink Img.PNG" alt="Logo da SaberLink" class="logo"> <!-- Substitua o caminho pela URL correta da sua imagem -->
    </div>
</x-layout.default>