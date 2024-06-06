<?php
   include '../../padroes/head.php';
   ?>
<?php
   include '../../padroes/nav.php';
   ?>

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
   .cards-container {
   display: flex;
   overflow-x: auto;
   padding: 20px;
   gap: 20px;
   scrollbar-width: none;
   -ms-overflow-style: none;
   }
   .cards-container::-webkit-scrollbar {
   display: none;
   }
   .card {
   flex: 0 0 auto;
   width: 350px;
   border: 3px solid;
   border-radius: 10px;
   box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.3);
   height: 700px;
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
<body>
   <div class="d-flex justify-content-center align-items-center mt-5">
      <h6>PLANOS</h6>
   </div>
   <div class="container-fluid d-flex justify-content-center align-items-center mt-5">
      <div class="cards-container">
         <div style="border-color: #2cc406;" class="card text-center">
            <img src="../../assets/imgs/gratis.png" alt="Logo" class="card-img-top mx-auto logo-img">
            <div class="card-body">
               <h5 class="card-title">Plano Grátis</h5>
               <p class="card-text">Descrição do plano básico.</p>
               <a href="#" style="background-color: #2cc406; border-color: #2cc406;" class="btn btn-primary">Assinar</a>
            </div>
         </div>
         <div style="border-color: #ce0b37;" class="card text-center">
            <img src="../../assets/imgs/basico.png" alt="Logo" class="card-img-top mx-auto logo-img">
            <div class="card-body">
               <h5 class="card-title">Plano Básico</h5>
               <p class="card-text">Descrição do plano básico.</p>
               <a href="#" style="background-color: #ce0b37; border-color: #ce0b37;" class="btn btn-primary">Assinar</a>
            </div>
         </div>
         <div style="border-color: #ffa800;" class="card text-center">
            <img src="../../assets/imgs/plus.png" alt="Logo" class="card-img-top mx-auto logo-img">
            <div class="card-body">
               <h5 class="card-title">Plano Plus</h5>
               <p class="card-text">Descrição do plano básico.</p>
               <a href="#" style="background-color: #ffa800; border-color: #ffa800;" class="btn btn-primary">Assinar</a>
            </div>
         </div>
         <div style="border-color: #3583ed;" class="card text-center">
            <img src="../../assets/imgs/premium.png" alt="Logo" class="card-img-top mx-auto logo-img">
            <div class="card-body">
               <h5 class="card-title">Plano Premium</h5>
               <p class="card-text">Descrição do plano básico.</p>
               <a href="#" style="background-color: #3583ed; border-color: #3583ed;" class="btn btn-primary">Assinar</a>
            </div>
         </div>
      </div>
   </div>

   <?php 
      include '../../padroes/footer.php';
    ?>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>