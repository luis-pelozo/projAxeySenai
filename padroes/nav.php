
<style>
   .usuario {
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
   .usuario i {
   font-size: 24px;
   color: #fff;
   }
   .menu {
   position: relative;
   flex-grow: 1;
   margin-right: 10px;
   left: 20px;
   }
   .menu input[type="search"] {
   padding-left: 2.5rem;
   width: 70%;
   }
   .menu i {
   position: absolute;
   left: 10px;
   top: 50%;
   transform: translateY(-50%);
   color: #495057;
   }
   .logoMenu {
   height: 40px;
   }
   .botaoAnuncio {
   background-color: #012640;
   color: gold;
   border-color: gold;
   padding: 5px 30px;
   border-radius: 5px;
   font-size: 20px;
   margin-right: 30px;
   font-weight: bold;
   }
   @media only screen and (max-width: 768px) {
   .menu {
   left: 0px;
   flex-grow: 1;
   margin-right: 0px;
   }
   .menu input[type="search"] {
   padding-left: 2.0rem;
   width: 80%;
   margin-top: 5px;
   }
   .menu i {
   left: 10px;
   top: 50%;
   transform: translateY(-50%);
   color: #495057;
   margin-top: 2px;
   }
   .logoMenu {
   margin-top: 0;
   height: 25px;
   }
   .botaoAnuncio,
   .usuario {
   display: none;
   }
   .buscar[type="search"] {
   padding: 0;
   height: auto;
   }
   .menu i {
   top: 55%;
   left: 11px;
   font-size: 12px;
   }
   }
   .bg-nav {
   background-color: #012640;
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
<nav class="navbar navbar-expand-lg navbar-light bg-nav">
   <a class="navbar-brand" href="/projAxeySenai/index.php">

   <img class="logoMenu" src="/projAxeySenai/assets/imgs/logo.png" alt="Minha Logo">

   </a>
   <div class="d-flex flex-grow-1 align-items-center">
      <div class="search-container menu">
         <i class="fas fa-search"></i>
         <input class="form-control buscar" type="search" placeholder="Buscar" aria-label="Search">
      </div>
   </div>
   <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item">
            <button class="botaoAnuncio" onclick="window.location.href='/projAxeySenai/paginas/geral/planos.php'">ANUNCIE GRÁTIS</button>
         </li>
         <li class="nav-item">
            <a class="user usuario"><i class="fa-solid fa-user"></i></a>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

