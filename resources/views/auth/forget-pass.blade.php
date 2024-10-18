<style>
    @font-face {
      font-family: 'Legquinne';
      src: url('/font/Grandiosity-Regular.ttf') format('truetype');
      font-weight: bold;
      font-style: normal;
    }

    body {
      background-color:  #ffffff;
      color: white;
      font-family: 'Grandiosity-Regular', sans-serif;
      height: 100vh;
      display: flex;
    }

    .reset-box {
      background: #2197b4; /* Cor do fundo da caixa */
      border-radius: 10px;
      padding: 30px;
      width: 100%;
      max-width: 400px;
      text-align: left;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
    }

    .reset-box h2 {
      color: rgb(255, 255, 255); /* Cor do título */
      font-weight: bold;
      margin-bottom: 20px; /* Espaço abaixo do título */
    }

    .form-control {
      background-color: white; /* Fundo branco para campos de texto */
      color: black; /* Texto em preto para melhor legibilidade */
      border: 2px solid rgb(9, 27, 192); /* Borda dos campos */
    }

    .form-control::placeholder {
      color: #ffffff; /* Cor do placeholder */
    }

    .btn-custom {
      background-color: rgb(5, 27, 56); /* Cor do botão */
      color: white;
      border: none;
      margin-top: 20px; /* Espaço acima do botão */
    }

    .btn-custom:hover {
      background-color: rgb(0, 21, 139); /* Cor do botão ao passar o mouse */
    }

    .links {
      margin-top: 15px;
    }

    .links a {
      color: #ffffff; /* Cor do link */
      font-size: 15px;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline; /* Sublinhado ao passar o mouse */
    }

    .image-section {
      flex: 2; /* 2/3 da largura da página */
      position: relative;
      background: url('/image/trafego.png') no-repeat center center; /* Imagem de fundo */
      background-size: cover; /* Cobrir a área disponível */
      filter: blur(3px); /* Embaçar a imagem */
      height: 100vh; /* Altura total da tela */
    }

    .image-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); /* Centraliza o texto */
      color: white;
      text-align: center;
      z-index: 1; /* Fica acima da imagem embaçada */
      font-size: 24px; /* Tamanho do texto */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Sombra para melhor legibilidade */
    }

    .reset-section {
      flex: 1; /* 1/3 da largura da página */
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column; /* Empilha logo e caixa de redefinição */
    }

    .Logo {
      width: 150px;
      height: 150px;
      margin-bottom: 20px; /* Espaçamento abaixo da logo */
      z-index: 1;
    }
  </style>

  <div class="reset-section">
    <img src="{{asset('images/logoSl.png')}}" class="Logo"> <!-- Logo acima da caixa -->
    <div class="reset-box">
      <h2>Esqueci Minha Senha</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <button type="submit" class="btn btn-custom w-100">Enviar Link de Redefinição</button>
      </form>

      <div class="links">
        <p><a href="login.html">Voltar ao Login</a></p>
        <p><a href="criar-conta.html">Ainda não tenho conta</a></p>
      </div>
    </div>
  </div>

  <div class="image-section">
    <div class="image-overlay">
    </div>
  </div>
