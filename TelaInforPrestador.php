<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perfil Do Prestador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="../projAxeySenai/assets/css/style.css"> -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }


        .nave {
            padding-right: 1%;
            padding-left: 1%;
        }


        .left {
            /* background: yellow; */
            text-align: center;
            width: 33.33%;
            padding-left: 0.05%;
        }

        .center {
            /* background: purple; */
            text-align: center;
            width: 33.33%;
        }

        .right {
            /* background: gray; */
            text-align: center;
            width: 33.33%;
            padding-right: 0.05%;
        }

        /*Rating*/
        body {
            background-color: #f8f9fa;
            /* width: 100vw; */
        }

        textarea {
            resize: none;
            min-width: 20vh;
            height: auto;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .rate {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .rate input[type="radio"] {
            display: none;
        }

        .rate label {
            font-size: 2rem;
            color: grey;
            cursor: pointer;
            transition: color 0.3s;
        }

        .rate input[type="radio"]:checked~label,
        .rate label:hover,
        .rate label:hover~label {
            color: gold;
        }

        /*Fim do Rating*/

        /*Botao Calendario*/
        .btn-calendario {
            background-color: #0711FF;
            color: white;
            align-items: center;
            width: 75%;
        }

        .btn-calendario:hover {
            color: white;
        }


        .verificado {
            width: 13%;
            height: 13%;
        }

        /*Serviços */

        .services {
            margin: 20px;
            display: flex;
            overflow-x: scroll;
            gap: 10px;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .services::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .services .card {
            flex: 0 0 20%;
        }

        .services .card img {
            height: 250px;
            object-fit: cover;
        }

        .card {
            margin-left: 20px;
        }

        .btn-selectable {
            display: block;
            padding: 1% 2%;
            margin: 2% auto;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border-radius: 1%;
            text-align: center;
        }

        .modal-backdrop {
            backdrop-filter: blur(5px);
        }

        .teste {
            margin-left: 6.5%;
        }
    </style>
</head>

<body>

    <!-- Inicio do Nav -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Final do Nav -->

    <!-- Inicio Corpo de Pagina -->
    <!-- <div class="row"> -->
    <div class="container">
        <!-- Dados de Perfil -->
        <div class="row d-flex flex-wrap ">
            <!-- Foto/Avaliação/Disponibilidade/Whats -->
            <div class="col-sm-4 mb-3 mb-sm-0 left d-flex flex-wrap">
                <div class="col-sm-12">
                    <div class="text-center foto-perfil mt-2">
                        <img src="https://via.placeholder.com/150" alt="Ícone de usuário" class="mb-3" style="clip-path:circle()">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="5 estrelas">★</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="4 estrelas">★</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="3 estrelas">★</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="2 estrelas">★</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="1 estrela">★</label>
                    </div>
                </div>
                <div class="col-sm-12" style="align-items: center">
                    <!-- <button type="button" id="btnCalendario">Success</button> -->
                    <button type="button" class="btn btn-primary" style="background-color: #0711FF; border: none; width: 75%;"> <img src="" alt="Ícone" class="mb-3" style="background-color: #0711FF; border: none; width: 25%">Verificar Diponibilidade </button>
                </div>
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary mt-2" style="background-color: #47C757; border: none; width: 75%"><img src="" alt="Ícone" class="mb-3" style="background-color: #47C757; border: none; width: 25%">Entre em Contato</button>
                </div>
            </div>
            <!-- Dados Prestador -->
            <div class="col-sm-8 mt-2">
                <div class="col-sm-12 mt-2">
                    <h3 class="text-left mt-12">Nome Prestador<img src="" alt="Ícone" class="mb-3" style="background-color: #0711FF; border: none; width: 25%"></h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 mt-6">
                        <h5 class="text-left mt-6">Cidade</h5>
                        <div class="card" style="width: 100% ; align-items:start ; margin:0">
                            <div class="card-body">
                                <p class="card-text" style="text-align:center">Joinville</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <h5 class="text-lef mt-6">Area de Atuação</h5>
                        <div class="card" style="width:100% ; align-items:start ; margin:0">
                            <div class="card-body">
                                <p class="card-text" style="text-align:center">Carpinteiro</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Avaliações  -->
        </div>
    </div>
    <!-- Cards de Ser -->
    <div class="services mt-5 mx-0">
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Serviço 1">
            <div class="card-body">
                <h5 class="card-title">Serviço 1</h5>
                <p class="card-text">Descrição breve do Serviço 1.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Serviço 2">
            <div class="card-body">
                <h5 class="card-title">Serviço 2</h5>
                <p class="card-text">Descrição breve do Serviço 2.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Serviço 3">
            <div class="card-body">
                <h5 class="card-title">Serviço 3</h5>
                <p class="card-text">Descrição breve do Serviço 3.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Serviço 4">
            <div class="card-body">
                <h5 class="card-title">Serviço 4</h5>
                <p class="card-text">Descrição breve do Serviço 4.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Serviço 5">
            <div class="card-body">
                <h5 class="card-title">Serviço 5</h5>
                <p class="card-text">Descrição breve do Serviço 5.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Serviço 6">
            <div class="card-body">
                <h5 class="card-title">Serviço 6</h5>
                <p class="card-text">Descrição breve do Serviço 6.</p>
                <a href="#" class="btn btn-primary">Saiba mais</a>
            </div>
        </div>
    </div>
    </div>
    <!-- Inicio Seção das avaliações -->
    <!-- Final Seção das Avaliações-->

    <!-- Inicio de Scroll de Serviços -->
    <!-- Final de Scroll de Serviços -->

    <!-- Final Corpo da pagina -->
    <!-- Inicio do Footer -->
    <!-- Final do Footer -->

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
</body>

</html>