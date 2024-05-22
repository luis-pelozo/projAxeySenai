<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
            .modal-footer {
                display: flex;
                justify-content: center;
                align-items: center;
            }  
        </style>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="card col-md-4 cardLogin"  style="border-radius: 8px">
                <img src="assets/imagens/logoAxey.png" class="card-img-top" alt="Imagem de Login">
                <input type="text" class="form-control form-control-sm"  style="border-radius: 8px"  placeholder="Usuário">
                <input type="password" class="form-control form-control-sm"  style="border-radius: 8px" placeholder="Senha">
                <button type="submit" id="entrarBtn" href="index.html" class="btn btn-primary btn-sm btn-block" style="color: white; border: none; background-color: #1A3C53; border-radius: 8px">Entrar</button>
                <!-- <a href="#" class="btnEsqueciSenha btn-sm" style="color: #00376B;">Esqueci minha senha</a> -->
                <a href="#" class="btnEsqueciSenha btn-sm" data-toggle="modal" data-target="#esqueciSenhaModal" style="color: #00376B;">Esqueci minha senha</a>

                <div class="modal fade" id="esqueciSenhaModal" tabindex="-1" role="dialog" aria-labelledby="esqueciSenhaModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="esqueciSenhaModalLabel">Recuperar Senha</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="email">Informe o e-mail cadastrado para receber resetar sua senha</label>
                                        <input type="email" class="form-control" id="email" placeholder="seuemail@exemplo.com">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button> -->
                                <button type="button" class="btn btn-primary" style="background-color: #1A3C53; border: none">Resetar Senha</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card cardCadastre col-sm-10" style="border-radius: 8px">
                    <span class="card-text">Não tem uma conta?
                    <a href="cadastroUsuarios.php" style="display: inline-block;"> Cadastre-se</a>
                    </span>
                </div>
            </div>  

            <footer style="position: absolute;bottom: 0;">
                <p>&copy; axey</p>
            </footer>
        </div>
        <script>
            document.getElementById('entrarBtn').addEventListener('click', function() {
                window.location.href = '#';
            });
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
