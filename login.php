<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container-fluid{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Define a altura mínima da tela inteira */
            margin: 0; /* Remova a margem padrão do corpo */
        }
        .cardLogin {
            padding: 30px;
            display: flex;
            flex-direction: column; 
            align-items: center;
        }
        .cardLogin input {
            margin-bottom: 10px;
            background-color: whitesmoke;
        }
        .btnEsqueciSenha {
            padding: 4px;
            margin-top: 10px;
        }
        .cardCadastre {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2%;
        }

    </style>
</head>
<body>
  <div class="container-fluid">
  <div class="card col-md-4 cardLogin">
        <img src="assets/imagens/logoAxey.png" class="card-img-top" alt="Imagem de Login">
        <input type="text" class="form-control form-control-sm"  placeholder="Usuário">
        <input type="password" class="form-control form-control-sm" placeholder="Senha">
        <button type="submit" class="btn btn-primary btn-sm btn-block" style="color: white; border: none; background-color: #1A3C53;">Entrar</button>
        <a href="#" class="btnEsqueciSenha btn-sm" style="color: #00376B;">Esqueci minha senha</a>
       
        <div class="card cardCadastre col-sm-10">
            <span class="card-text">Não tem uma conta?
                <a href="#" style="display: inline-block;"> Cadastre-se</a>
            </span>
        </div>
    </div>  

    <footer style="position: absolute;bottom: 0;">
        <p>&copy; axey</p>
    </footer>
  </div>
</body>
</html>
