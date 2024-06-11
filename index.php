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
    <link rel="stylesheet" href="/projAxeySenai/assets/css/index.css">
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