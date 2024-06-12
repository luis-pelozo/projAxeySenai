<!DOCTYPE html>
<html lang="pt-br">

<?php
include '../../padroes/head.php';
?>
<style>

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
.carousel-control-prev,
.carousel-control-next {
    background-color: transparent;
    border: none;
}


.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-image: none;
}

.carousel-control-prev-icon::after,
.carousel-control-next-icon::after {
    content: '';
    display: inline-block;
    width: 30px;
    height: 30px; 
    
}

.carousel-control-prev-icon::after {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23fff" viewBox="0 0 8 8"%3E%3Cpath d="M5.5 0l-3 3 3 3z"/%3E%3C/svg%3E');
}

.carousel-control-next-icon::after {
    background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23fff" viewBox="0 0 8 8"%3E%3Cpath d="M2.5 0l3 3-3 3z"/%3E%3C/svg%3E');
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
                        <span class="visually-hidden"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden"></span>
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