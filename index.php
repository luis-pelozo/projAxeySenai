<!DOCTYPE html>

<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		 .container {
		 max-width: 2400px;
		 }
         .anuncio {
         background-color: #012640;
         color: gold;
         border-color: gold;
         padding: 5px 30px;
         border-radius: 5px;
         font-size: 20px;
         margin-right: 30px;
         font-weight: bold;
         }
         .entrar {
         background-color: #f8f9fa;
         color: #012640;
         border-color: #012640;
         padding: 5px 10px;
         border-radius: 5px;
         font-size: 20px;
         margin-right: 20px;
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
         .navbar-light .custom-toggler .navbar-toggler-icon {
         background-image: none;
         width: 1.5em;
         height: 1.5em;
         }
         .navbar-light .custom-toggler .navbar-toggler-icon::after {
         content: '\2630';
         color: white;
         font-size: 1.5em;
         }
         .navbar-light .navbar-toggler {
         color: transparent;
         border-color: transparent;
         }
         .navbar-light .navbar-nav .nav-link {
         color: #fff;
         }
		.cards-wrapper, .services-container-wrapper {
         position: relative;
         width: 100%;
         overflow: hidden;
		 margin-bottom: 30px;
         }
        .services-container {
        display: flex;
        overflow-x: hidden;
        white-space: nowrap;
        max-width: 100%;
        }
        .services-container .card {
            display: inline-block;
            min-width: 18rem;
            margin-right: 1rem;
        }
        .services-container .card:last-child {
            margin-right: 0;
        }
		.card {
			margin-left: 20px;
        }
		.carousel {
			height: 40vh;
        }
        .carousel-item img {
			height: 40vh;
			object-fit: cover;
        }
		.title-index {
            margin-bottom: 20px;
			display: flex;
        overflow-x: hidden;
        white-space: nowrap;
        max-width: 100%;
        justify-content: center;
        }
		.bg-nav {
            background-color: #012640 !important;
        }
        .search-container {
            position: relative;
			width: 500px;
        }
        .search-container i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #666;
        }
        .search-container input[type="search"] {
            padding-left: 30px;
        }
        .anuncio {
            background-color: #012640;
            color: gold;
			border-color: gold;
            border-radius: 20px;
            padding: 8px 20px;
            font-size: 14px;
			margin-top: 3px;
        }
        .user {
         display: inline-block;
         width: 46px;
         height: 46px;
         border: 2px solid #fff;
         border-radius: 50%;
         display: flex;
         align-items: center;
         justify-content: center;
         text-decoration: none;
         color: inherit;
         }
         .user i {
         font-size: 24px;
         color: #fff;
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
         margin: 20px 0;
		 justify-content: center;
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
		          .logo {
         height: 30px;
         }
        @media (max-width: 768px) {
            .navbar .navbar-collapse {
                flex-grow: 1;
            }
			.categories {
         overflow-x: auto;
         white-space: nowrap;
         }
		 .services-container {
        overflow-x: auto;
        }
		.search-container {
            position: relative;
			width: 180px;
        }
		.categories {
		justify-content: flex-start;
		}
		
        }
         .arrow {
         position: absolute;
         top: 50%;
         transform: translateY(-50%);
         background-color: rgba(0, 0, 0, 0.5);
         color: white;
         border: none;
         font-size: 2rem;
         z-index: 1;
         display: none;
         }
         .arrow-left {
         left: 0;
         }
         .arrow-right {
         right: 0;
         }
         @media (min-width: 768px) {
         .arrow {
         display: block;
         }
         }
  </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-nav">
         <a class="navbar-brand" href="#"><img class="logo" src="assets/imgs/logo.png" alt="Minha Logo"></a>
         <div class="d-flex flex-grow-1 align-items-center">
            <div class="search-container">
               <i class="fas fa-search"></i>
               <input class="form-control" type="search" placeholder="Buscar" aria-label="Search">
            </div>
         </div>
         <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                  <button class="anuncio">ANUNCIE GRÁTIS</button>
               </li>
               <li class="nav-item">
                  <a class="user"><i class="fa-solid fa-user"></i></a>
               </li>
               <li class="nav-item d-lg-none">
                  <a class="nav-link" href="#">Entrar/Cadastrar</a>
               </li>
               <li class="nav-item d-lg-none">
                  <a class="nav-link" href="#">Anuncie Grátis</a>
               </li>
            </ul>
         </div>
      </nav>
      <div class="container-fluid p-0 justify-content-center">
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
         <div class="services-container-wrapper container">
         <div class="title-index">
            <h1>Serviços em destaque</h1>
         </div>
		 <button class="arrow arrow-left" onclick="scrollCards('.container1', -1)">&#9664;</button>
         <div class="services-container container1">
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
			<div class="card">
               <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Serviço 7</h5>
                  <p class="card-text">Descrição breve do Serviço 7.</p>
                  <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
			<div class="card">
               <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Serviço 8</h5>
                  <p class="card-text">Descrição breve do Serviço 8.</p>
                  <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
         </div>
         <button class="arrow arrow-right" onclick="scrollCards('.container1', 1)">&#9654;</button>
      </div>
	  <div class="services-container-wrapper container">
         <div class="title-index">
            <h1>Serviços em destaque</h1>
         </div>
		 <button class="arrow arrow-left" onclick="scrollCards2('.container2', -1)">&#9664;</button>
         <div class="services-container container2">
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
			<div class="card">
               <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Serviço 7</h5>
                  <p class="card-text">Descrição breve do Serviço 7.</p>
                  <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
			<div class="card">
               <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">Serviço 8</h5>
                  <p class="card-text">Descrição breve do Serviço 8.</p>
                  <a href="paginas/cliente/telaAnuncio.php" class="btn btn-primary">Saiba mais</a>
               </div>
            </div>
         </div>
         <button class="arrow arrow-right" onclick="scrollCards2('.container2', 1)">&#9654;</button>
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
	  <script>
         function scrollCards(containerSelector, direction) {
           const container = document.querySelector(containerSelector);
           const cardWidth = container.querySelector('.card').offsetWidth;
           container.scrollBy({
             left: direction * cardWidth,
             behavior: 'smooth'
           });
         }
		 
		 function scrollCards2(containerSelector, direction) {
           const container = document.querySelector(containerSelector);
           const cardWidth = container.querySelector('.card').offsetWidth;
           container.scrollBy({
             left: direction * cardWidth,
             behavior: 'smooth'
           });
         }
      </script>
   </body>
</html>