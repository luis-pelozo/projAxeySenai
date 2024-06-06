<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Página</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Major+Mono+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: "Exo 2", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .carousel {
            height: 40vh;
        }

        .carousel-item img {
            height: 40vh;
            object-fit: cover;
        }

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
            flex: 0 0 auto;
            width: calc(100% / 5);
        }

        .services .card img {
            height: 250px;
            object-fit: cover;
        }

        .card {
            margin-left: 20px;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px 0;
        }

        .category-card {
            flex: 1 0 21%;
            max-width: 21%;
            margin: 10px;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .category-card:hover {
            transform: scale(1.05);
        }

        .category-icon {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 20px 0;
        }

        .categories .d-flex {
            flex-wrap: nowrap;
        }

        .category-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            text-align: center;
            padding: 14px 12px;
            margin: 10px;
            flex: 0 0 calc(12.5% - 20px);
            box-sizing: border-box;
            transition: transform 0.3s;
            display: inline-block;
            width: 120px;
        }

        .category-card:hover {
            transform: scale(1.05);
        }

        .category-icon {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .category-title {
            font-size: 16px;
        }

        @media only screen and (max-width: 768px) {
            .search-container {
                left: 0px;
                flex-grow: 1;
                margin-right: 0px;
            }

            h1 {
                font-size: 30px;
            }

            .services .card {
                width: 80%;
            }

            .carousel {
                height: 30vh;
            }

            .carousel-item img {
                height: 30vh;
            }

            .categories {
                overflow-x: auto;
                white-space: nowrap;
            }

            .category-card {
                width: 100px;
                padding: 10px 10px;
            }

            .category-icon {
                font-size: 24px;
                margin-bottom: 10px;
            }

            .category-title {
                font-size: 14px;
            }

            .form-control[type="search"] {
                padding: 0;
                height: auto;
            }
        }

        .bg-footer {
            background-color: #012640;
        }

        .btn-primary {
            background-color: #012640;
            border-color: #012640;
            color: #fff;
        }

        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active,
        .btn-primary:active:focus,
        .btn-primary:active:hover,
        .btn-primary:focus:active {
            background-color: #001a2e;
            border-color: #001a2e;
            color: #fff;
        }

        .btn-primary:focus {
            outline: none;
            box-shadow: 0 0 0 0.2rem rgba(1, 38, 64, 0.5);
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active {
            transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .fas {
            color: #012640;
        }
    </style>
</head>

<body>

    <?php
    include 'padroes/nav.php';
    ?>
    
    <div class="container-fluid p-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://via.placeholder.com/1920x1080" alt="Primeiro slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/1920x1080" alt="Segundo slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://via.placeholder.com/1920x1080" alt="Terceiro slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <div class="container-fluid categories">
            <div class="d-flex flex-nowrap">
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-laptop"></i></div>
                    <div class="category-title">Tecnologia</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-utensils"></i></div>
                    <div class="category-title">Culinária</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-heart"></i></div>
                    <div class="category-title">Saúde</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-home"></i></div>
                    <div class="category-title">Casa</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-car"></i></div>
                    <div class="category-title">Automóveis</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-book"></i></div>
                    <div class="category-title">Educação</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-paw"></i></div>
                    <div class="category-title">Pets</div>
                </div>
                <div class="category-card">
                    <div class="category-icon"><i class="fas fa-plane"></i></div>
                    <div class="category-title">Viagens</div>
                </div>
            </div>
        </div>
        <div class="services">
            <h1>Serviços em destaque</h1>
        </div>
        <div class="services mt-4 mx-0">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 1</h5>
                    <p class="card-text">Descrição breve do Serviço 1.</p>
                    <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 2</h5>
                    <p class="card-text">Descrição breve do Serviço 2.</p>
                    <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 3</h5>
                    <p class="card-text">Descrição breve do Serviço 3.</p>
                    <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 4</h5>
                    <p class="card-text">Descrição breve do Serviço 4.</p>
                    <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 5</h5>
                    <p class="card-text">Descrição breve do Serviço 5.</p>
                    <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 6</h5>
                    <p class="card-text">Descrição breve do Serviço 6.</p>
                    <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
        <div class="services">
            <h1>Serviços mais visitados</h1>
        </div>
        <div class="services mt-4 mx-0">
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 1</h5>
                    <p class="card-text">Descrição breve do Serviço 1.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 2</h5>
                    <p class="card-text">Descrição breve do Serviço 2.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 3</h5>
                    <p class="card-text">Descrição breve do Serviço 3.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 4</h5>
                    <p class="card-text">Descrição breve do Serviço 4.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 5</h5>
                    <p class="card-text">Descrição breve do Serviço 5.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card">
                <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Serviço 6</h5>
                    <p class="card-text">Descrição breve do Serviço 6.</p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-footer text-white mt-5">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4">
                    <h5>Sobre Nós</h5>
                    <p>Aqui você encontra diversas variedades de serviços para seu dia a dia.</p>
                </div>
                <div class="col-md-4">
                    <h5>Links Úteis</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Início</a></li>
                        <li><a href="#" class="text-white">Planos</a></li>
                        <li><a href="#" class="text-white">Contato</a></li>
                        <li><a href="#" class="text-white">Termos de Uso</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Redes Sociais</h5>
                    <a href="#" class="text-white mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white mr-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white mr-2"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white mr-2"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="text-center mt-3">
                <p>&copy; 2024 Axey. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>