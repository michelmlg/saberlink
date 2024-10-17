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
            align-items: center;
            justify-content: center;
            
        }
        .login-box {
            background: #2197b4;
            border-radius: 10px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.9);
        }
        .login-box img {
            width: 100px;
            height: auto;
            margin-bottom: 20px;
        }
        .login-box h2 {
            color: rgb(255, 255, 255);
            font-weight: bold;
            margin-bottom: 30px;
        }
        .form-control {
            background-color: white;
            color: #000;
            border-color: rgb(0, 17, 255);
        }
        .btn-custom {
            background-color: rgb(9, 47, 97);
            color: white;
            border: none;
            margin-bottom: 27px;
            margin-top: 20px;
        }
        .btn-custom:hover {
            background-color: rgb(6, 12, 70);
        }
        .google-btn {
            background-color: white;
            color: #4285F4;
            border-color: rgb(0, 17, 255);
            border: 1px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }
        .google-btn img {
            width: 20px;
            margin-right: 17px;
            align-items: center;
            padding-top: 14px;
        }
        .links {
            margin-top: 15px;
        }
        .links a {
            color: #ffffff;
            text-decoration: none;
        }
        .links a:hover {
            color: rgb(6, 11, 83);
        }
        .image-section {
            flex: 2;
            position: relative;
            background: url('/image/trafego.png') no-repeat center center;
            background-size: cover;
            height: 100vh;
            filter: blur(3px); /* Efeito de desfoque na imagem da logo */
        }
        .image-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            text-align: center;
            z-index: 1;
            font-size: 36px;
            font-weight: bold;
            padding: 20px;
            border-radius: 10px;
        }
        .login-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; /* Adicionado para empilhar logo e caixa de login */
        }
        .Logo {
            width: 150px;
            height: 150px;
            margin-bottom: 20px; /* Adicionado para espaçamento */
            z-index: 1;

        }
        
    </style>

    <div class="login-section">
        <img src="/image/SaberLink Img.PNG" class="Logo">
        <div class="login-box">
            <h2>Login</h2>
            <!-- Google Login Button -->
            <button class="btn google-btn w-100 mb-3">
                <img src="image/g.png" alt="Google Logo">
                Login com Google
            </button>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                </div>
                <button type="submit" class="btn btn-custom w-100">Entrar</button>
            </form>
            <div class="links">
                <p><a href="esqueci-senha.html">Esqueci a senha</a></p>
                <p><a href="criar-conta.html">Ainda não tenho conta</a></p>
            </div>
        </div>
    </div>
    <div class="image-section">
    </div>
    <div class="image-overlay">
    </div>

