<!DOCTYPE html>
<html lang="pt-br">

    <head>
    <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>Entrar</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    </head>

    <body>
        <header>
        </header>
            <div class="container-fluid d-flex justify-content-center align-items-center vh-100"style="width: 18rem;">
                <section id="login">
                    <div class="card" id="imageLogin" style="width: 18rem;">
                        <img src="assets/imagens/logoAxey.png" class="card-img-top" alt="...">
                        <input type="text" placeholder="Usuário" name="usuarioLogin" id="usuarioLogin">
                        <br>
                        <input type="password" placeholder="Senha" name="senhaLogin" id="senhaLogin" >
                        
                        <input id="login-btn" type="submit" name="submit" value="Enviar">
                    </div>
                    
                </section>
            </div>
        
        <footer id="footer">
            <div class="container">
                <div class="copyright">
                    &copy; <a href="#" target="_blank">axey</a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>
    </body>
</html>