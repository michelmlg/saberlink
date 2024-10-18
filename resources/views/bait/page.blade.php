<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descubra os Segredos do Marketing Digital!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <style>
        /* Estilo do Cabeçalho Moderno */
        .header {
            background: linear-gradient(to right, #01438a, #0288d1);
            color: white;
            padding: 60px 0;
            text-align: center;
            border-radius: 0 0 20px 20px;
            position: relative;
            font-family: 'Montserrat', sans-serif;
            height: 140px;
        }
        .header h1 {
    font-size: 2.5rem; /* Reduzir o tamanho do título */
    font-weight: 700;
    margin: 0;
    z-index: 2;
    position: relative;
    text-align: center;
}

.header p {
    font-size: 1rem; /* Reduzir o tamanho do parágrafo */
    margin-top: 10px; /* Reduzir o espaço superior */
    z-index: 2;
    position: relative;
    line-height: 1.2; /* Ajustar o espaçamento entre as linhas */
}

        .header::before {
            content: "";
            background-image: url('https://images.unsplash.com/photo-1542744095-291d1f67b221');
            background-size: cover;
            background-position: center;
            opacity: 0.2;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 0 0 20px 20px;
        }

        /* Estilo dos Cards */
        .container {
            margin-top: 50px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            width: 100%;
        }
        .card:hover {
            transform: translateY(-10px);
        }
        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #333;
        }
        .card-text {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 20px;
        }
        .card-img-top {
            height: 250px;
            object-fit: cover;
            border-radius: 15px 15px 0 0;
        }

        /* Botões */
        .btn-primary {
            background-color: #03b588;
            border-color: #029d76;
            padding: 15px 30px;
            font-size: 1.2rem;
            border-radius: 30px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #027a5c;
            transform: scale(1.05);
        }

        /* Estilo do Modal */
        .modal-header {
            background-color: #013c71;
            color: white;
        }
        .modal-title {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .modal-body input {
            padding: 12px;
            font-size: 1rem;
        }
        .modal-footer button {
            padding: 10px 20px;
            font-size: 1.1rem;
        }

        /* Footer Estilo */
        .footer-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #013c71;
            padding: 10px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            font-weight: bold;
            color: white;
        }
        .footer-bar img {
            max-height: 50px;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Descubra os Segredos do Marketing Digital!</h1>
    <p>Baixe nosso e-book gratuito e comece a transformar seu negócio hoje!</p>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div class="card mb-4">
                <img src="https://uplevelmarketingdigital.com.br/wp-content/uploads/2021/03/Marketing-Digital-e-importante-para-as-empresas-scaled.jpeg" class="card-img-top" alt="E-book Marketing Digital">
                <div class="card-body text-center">
                    <h2 class="card-title">E-book: Os 10 Segredos do Marketing Digital</h2>
                    <p class="card-text">Aprenda as estratégias que os especialistas usam para impulsionar negócios online! Este e-book revela os segredos mais bem guardados do marketing digital, incluindo técnicas de SEO, dicas para anúncios irresistíveis, como aumentar sua taxa de conversão e estratégias de marketing de conteúdo eficazes.</p>
                    <h3 class="mt-4 text-success">Gratuito!</h3>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#myModal">Pegar a Oportunidade</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Preencha seus dados</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="contactForm">
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
                <button type="submit" class="btn btn-primary" form="contactForm">Receber no E-mail</button>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer-bar">
    <span>Impulsione seu Marketing Digital agora! &copy; 2024</span>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>