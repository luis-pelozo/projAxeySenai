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
         .search-container {
         position: relative;
         flex-grow: 1;
         margin-right: 10px;
         left: 20px;
         width: 100px;
         }
         .search-container input[type="search"] {
         padding-left: 2.5rem;
         width: 100%;
         }
         .search-container i {
         position: absolute;
         left: 10px;
         top: 50%;
         transform: translateY(-50%);
         color: #495057;
         }
         .logo {
         height: 40px;
         }
         .entrar {
         background-color: #f8f9fa;
         color: #fff;
         border-color: #fff;
         padding: 5px 10px;
         border-radius: 5px;
         font-size: 20px;
         margin-right: 20px;
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
         .cards-wrapper {
         position: relative;
         width: 100%;
         overflow: hidden;
         }
         .cards-container {
         display: flex;
         overflow-x: auto;
         padding: 20px;
         gap: 20px;
         scrollbar-width: none;
         -ms-overflow-style: none;
         transition: transform 0.5s ease;
         }
         .cards-container::-webkit-scrollbar {
         display: none;
         }
         .card {
         flex: 0 0 auto;
         width: 250px;
         border: 3px solid;
         border-radius: 10px;
         box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.3);
         height: 600px;
         background-color: #012640;
         color: #fff;
         }
         h6 {
         font-size: 50px;
         font-weight: bold;
         }
         h5 {
         font-size: 30px;
         font-weight: bold;
         }
         .logo-img {
         width: 100px;
         height: 100px;
         margin-top: 50px;
         margin-bottom: 50px;
         }
         .bg-footer {
         background-color: #012640;
         }
         .bg-nav {
         background-color: #012640;
         }
         @media only screen and (max-width: 768px) {
         .search-container {
         left: 0px;
         flex-grow: 1;
         margin-right: 0px;
         width: 180px;
         }
         .search-container input[type="search"] {
         padding-left: 2.0rem;
         width: 80%;
         margin-top: 5px;
         }
         .search-container i {
         left: 10px;
         top: 50%;
         transform: translateY(-50%);
         color: #495057;
         margin-top: 2px;
         }
         .logo {
         margin-top: 0;
         height: 25px;
         }
         .anuncio,
         .user {
         display: none;
         }
         .navbar-toggler {
         display: block;
         }
         .card {
         width: 250px;
         height: 500px;
         }
         h6 {
         font-size: 40px;
         }
         .form-control[type="search"] {
         padding: 3px;
         height: auto;
         }
         .search-container i {
         top: 55%;
         left: 11px;
         font-size: 12px;
         }
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
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-nav">
         <a class="navbar-brand" href="#"><img class="logo" src="logo.png" alt="Minha Logo"></a>
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
      <div class="d-flex justify-content-center align-items-center mt-5">
         <h6>PLANOS</h6>
      </div>
      <div class="container d-flex justify-content-center align-items-center mt-5">
         <div class="cards-wrapper">
            <div class="cards-container">
               <div style="border-color: #2cc406;" class="card text-center">
                  <img src="gratis.png" alt="Logo" class="card-img-top mx-auto logo-img">
                  <div class="card-body">
                     <h5 class="card-title">Grátis</h5>
                     <p class="card-text">Descrição do plano básico.</p>
                     <a href="../registro/login.php" style="background-color: #2cc406; border-color: #2cc406;" class="btn btn-primary">Assinar</a>
                  </div>
               </div>
               <div style="border-color: #ce0b37;" class="card text-center">
                  <img src="basico.png" alt="Logo" class="card-img-top mx-auto logo-img">
                  <div class="card-body">
                     <h5 class="card-title">Básico</h5>
                     <p class="card-text">Descrição do plano básico.</p>
                     <a href="../registro/login.php" style="background-color: #ce0b37; border-color: #ce0b37;" class="btn btn-primary">Assinar</a>
                  </div>
               </div>
               <div style="border-color: #ffa800;" class="card text-center">
                  <img src="plus.png" alt="Logo" class="card-img-top mx-auto logo-img">
                  <div class="card-body">
                     <h5 class="card-title">Plus</h5>
                     <p class="card-text">Descrição do plano básico.</p>
                     <a href="../registro/login.php" style="background-color: #ffa800; border-color: #ffa800;" class="btn btn-primary">Assinar</a>
                  </div>
               </div>
               <div style="border-color: #3583ed;" class="card text-center">
                  <img src="premium.png" alt="Logo" class="card-img-top mx-auto logo-img">
                  <div class="card-body">
                     <h5 class="card-title">Premium</h5>
                     <p class="card-text">Descrição do plano básico.</p>
                     <a href="../registro/login.php" style="background-color: #3583ed; border-color: #3583ed;" class="btn btn-primary">Assinar</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="bg-footer text-white mt-5">
         <div class="container py-4">
            <div class="row">
               <div class="col-md-4">
                  <h5>Sobre Nós</h5>
                  <p>Informações sobre a empresa, missão, visão e valores.</p>
               </div>
               <div class="col-md-4">
                  <h5>Links Úteis</h5>
                  <ul class="list-unstyled">
                     <li><a href="../../index.php" class="text-white">Início</a></li>
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
         function scrollCards(direction) {
           const container = document.querySelector('.cards-container');
           const cardWidth = container.querySelector('.card').offsetWidth;
           container.scrollBy({
             left: direction * cardWidth,
             behavior: 'smooth'
           });
         }
      </script>
   </body>
</html>
