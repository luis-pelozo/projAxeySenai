<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Axey</title>
</head>
<style>
    .carousel-item img {
        max-height: 50%;
        /* ajuste conforme necessário */
    }

    /* Ajustes de layout para dispositivos móveis */
    @media (max-width: 768px) {
        .anuncipo .container {
            flex-direction: column;
            align-items: center;
        }

        .main-group-func {
            margin-top: 20px;
        }

        .carousel-inner img {
            width: 100%;
            height: auto;
        }
    }
</style>

<body>
    <?php include '../../padroes/nav.php'; ?>

    <section class="anuncipo mx-5 py-5">

        <div class="main container d-flex flex-column flex-md-row">
            <div id="separa-divs">

                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="../../assets/imgs/imgTeste.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/imgs/imgTeste.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../../assets/imgs/imgTeste.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="main-group-func container flex-wrap object-fit d-flex align-self-center">
                <div class="icon img-fluid container altera-img">
                    <img src="../../assets/imgs/user.png" alt="" class="rounded-circle">

                </div>
                <div class="legenda container text-center mb-3">
                    <p>illum quae eligendi unde ipsa reiciendis dolor assumenda voluptates recusandae animi nesciunt earum laboriosam.</p>
                </div>

                <div class="buttom-gourp d-flex flex-column container text-center">
                    <a href="../prestador/TelaPerfilPrestador.php" type="submit" class="btn btn-success"><span></span>Entre em contato</a>
                    <div class="group-buttom d-flex flex-column py-2">
                        <a type="submit" class="btn btn-primary">Verificar disponibilidade</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="services text-center">
        <h1>Serviços em destaque</h1>
    </div>
    <div class="container-fluid categories">
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

    <?php include '../../padroes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>