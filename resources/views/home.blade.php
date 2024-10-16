<x-layout.default>
    <x-slot:pageTitle>
        Home
    </x-slot:pageTitle>

<!-- Seção Hero (Destaque Publicitário) -->
    <section class="hero-section">
        <div class="container">
            <h2>Ofertas Imperdíveis Esperam Por Você!</h2>
            <p>Aproveite cursos, e-books, e promoções exclusivas que vão transformar seu aprendizado.</p>
            <a href="/ofertas" class="cta-button">Veja Nossas Ofertas</a>
        </div>
    </section>

    <!-- Seção de Produtos ou Serviços em Destaque -->
    <section class="my-5">
        <div class="container">
            <h2 class="text-center mb-4">Destaques da Semana</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/curso.jpg" class="card-img-top" alt="Curso Online">
                        <div class="card-body">
                            <h5 class="card-title">Curso de Marketing Digital</h5>
                            <p class="card-text">Aprenda estratégias de marketing que alavancam o seu negócio.</p>
                            <a href="/produto/1" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/ebook.jpg" class="card-img-top" alt="E-book">
                        <div class="card-body">
                            <h5 class="card-title">E-book: Transforme sua Carreira</h5>
                            <p class="card-text">Dicas essenciais para avançar profissionalmente.</p>
                            <a href="/produto/2" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="/images/ferramenta.jpg" class="card-img-top" alt="Ferramenta Digital">
                        <div class="card-body">
                            <h5 class="card-title">Ferramenta de Gestão de Tempo</h5>
                            <p class="card-text">Otimize sua produtividade com nossa ferramenta exclusiva.</p>
                            <a href="/produto/3" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção de Call to Action -->
    <section class="bg-primary text-white py-5 text-center">
        <h2>Não perca tempo!</h2>
        <p>Acesse agora e aproveite as promoções antes que acabem.</p>
        <a href="/cadastro" class="cta-button">Cadastre-se Gratuitamente</a>
    </section>

</x-layout.default>
