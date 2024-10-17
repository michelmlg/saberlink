<style>
    @font-face {
      font-family: 'Legquinne';
      src: url('/font/Grandiosity-Regular.ttf') format('truetype');
      font-weight: bold;
      font-style: normal;
    }

    body {
      background-color: #ffffff;
      color: white;
      font-family: 'Grandiosity-Regular', sans-serif;
      height: 100vh;
      display: flex;
    }

    .signup-box {
      background: #2197b4;
      border-radius: 10px;
      padding: 30px;
      width: 100%;
      max-width: 400px;
      text-align: left;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
    }

    .signup-box h2 {
      color: rgb(255, 255, 255);
      font-weight: bold;
      margin-bottom: 20px;
    }

    .form-control {
      background-color: white;
      color: black;
      border: 2px solid rgb(6, 36, 121);
    }

    .form-control::placeholder {
      color: #999;
    }

    .btn-custom {
      background-color: rgb(9, 47, 97);
      color: white;
      border: none;
      margin-top: 20px;
    }

    .btn-custom:hover {
      background-color: rgb(7, 6, 77);
    }

    .links {
      margin-top: 15px;
    }

    .links a {
      color: #ffffff;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline;
    }

    .image-section {
      flex: 2;
      position: relative;
      background: url('/image/trafego.png') no-repeat center center;
      background-size: cover;
      filter: blur(3px);
      height: 100vh;
    }

    .image-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      text-align: center;
      z-index: 1;
      font-size: 24px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .signup-section {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column; /* Adicionando flex-direction para empilhar logo e caixa de cadastro */
    }

    .Logo {
      width: 150px;
      height: 150px;
      margin-bottom: 20px; /* Espaçamento abaixo da logo */
      z-index: 1;
    }
  </style>

  <div class="signup-section">
    <img src="/image/SaberLink Img.PNG" class="Logo"> <!-- Logo acima da caixa de cadastro -->
    <div class="signup-box">
      <h2>Criar Conta</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Crie uma senha">
        </div>
        <button type="submit" class="btn btn-custom w-100">Criar Conta</button>
      </form>

      <div class="links">
        <p><a href="login.html">Já tenho uma conta</a></p>
      </div>
    </div>
  </div>

  <div class="image-section">
    <div class="image-overlay">
    </div>
  </div>