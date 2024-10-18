<x-layout.default>
    <x-slot:pageTitle>
        Home
    </x-slot:pageTitle>
    <!-- Styles customizados -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
        }
        .header {
            background: linear-gradient(90deg, #01438a, #28a745);
            color: white;
            padding: 60px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .header h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .header p {
            font-size: 1.25rem;
            margin-top: 20px;
        }
        .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            padding: 15px 30px;
            font-size: 1.25rem;
            transition: background-color 0.3s ease, transform 0.3s ease;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
        .btn-primary:hover {
            background-color: #218838;
            transform: scale(1.05);
        }
        .features {
            padding: 60px 0;
        }
        .features h2 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }
        .feature {
            text-align: center;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }
        .feature:hover {
            transform: translateY(-10px);
        }
        .feature i {
            font-size: 3rem;
            color: #28a745;
            margin-bottom: 20px;
        }
        .feature h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .feature p {
            font-size: 1.15rem;
            color: #6c757d;
        }
        .testimonials {
            background-color: #f1f1f1;
            padding: 60px 0;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
        }
        .testimonial {
            text-align: center;
        }
        .testimonial p {
            font-style: italic;
            margin-bottom: 10px;
        }
        .testimonial strong {
            display: block;
            margin-top: 10px;
        }
        .cta {
            background: linear-gradient(90deg, #01438a, #28a745);
            color: white;
            padding: 60px 0;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        .cta p {
            font-size: 1.25rem;
            margin-bottom: 30px;
        }
    </style>
<!-- Header -->
    <div class="header">
        <h1>Crie Iscas Digitais Poderosas e Atraia Clientes Ideais</h1>
        <p>Transforme seu conteúdo em uma máquina de gerar leads. Rápido, fácil e com resultados comprovados.</p>
        <a href="#features" class="btn btn-primary mt-4">Saiba Mais</a>
    </div>

    <!-- Features Section -->
    <div class="container features" id="features">
        <h2>Por que Escolher Nossa Plataforma?</h2>
        <div class="row">
            <div class="col-md-4 feature">
                <i class="fas fa-lightbulb"></i>
                <h3>Fácil de Usar</h3>
                <p>Sem complicações. Crie iscas digitais em minutos, sem precisar ser um especialista em design ou marketing.</p>
            </div>
            <div class="col-md-4 feature">
                <i class="fas fa-chart-line"></i>
                <h3>Alta Conversão</h3>
                <p>Nossas ferramentas são projetadas para maximizar suas conversões e transformar visitantes em leads.</p>
            </div>
            <div class="col-md-4 feature">
                <i class="fas fa-user-check"></i>
                <h3>Comprovado por Especialistas</h3>
                <p>Centenas de empreendedores e profissionais de marketing já usaram nossa plataforma com sucesso.</p>
            </div>
        </div>
    </div>

    <!-- Testimonials Section -->
    <div class="testimonials">
        <div class="container">
            <h2 class="text-center">O que nossos clientes dizem</h2>
            <div class="row">
                <div class="col-md-4 testimonial">
                    <p>"A plataforma revolucionou minhas campanhas de marketing. Aumentei minhas conversões em 50%!"</p>
                    <strong>- João Silva</strong>
                </div>
                <div class="col-md-4 testimonial">
                    <p>"Simples de usar e os resultados são incríveis. Meus ebooks agora capturam muito mais leads."</p>
                    <strong>- Maria Fernandes</strong>
                </div>
                <div class="col-md-4 testimonial">
                    <p>"Recomendo para qualquer pessoa que queira escalar seu negócio com iscas digitais de alta qualidade."</p>
                    <strong>- Carlos Souza</strong>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Section -->
    <div class="cta">
        <h2>Pronto para Começar?</h2>
        <p>Crie sua primeira isca digital em minutos e veja o impacto no seu negócio. Não perca mais tempo.</p>
        <a href="#signup" class="btn btn-primary">Experimente Gratuitamente</a>
    </div>





</x-layout.default>
