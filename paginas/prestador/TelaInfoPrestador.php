<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Info Prestador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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

        /* Modal */

        .modal-content {
            background-color: #001f3f;
            /* Azul marinho */
            color: #ffffff;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .calendar-days,
        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-align: center;
        }

        .calendar-day,
        .calendar-date {
            padding: 10px;
            color: #ffffff;
        }

        .calendar-date:hover {
            background-color: #f0f0f0;
            color: #001f3f;
            border-radius: 50%;
        }

        .btn-outline-secondary {
            color: #ffffff;
            border-color: #ffffff;
        }

        .btn-outline-secondary:hover {
            background-color: #ffffff;
            color: #001f3f;
        }

        .close {
            color: #ffffff;
            opacity: 1;
        }

        .close:hover {
            color: #f0f0f0;
        }

        /* Fim do modal */
    </style>
</head>

<body>


 
    <!-- Inicio do Nav -->
    <?php
    include '../../padroes/nav.php';
    ?>
    <!-- Final do Nav -->

    <!-- Inicio Corpo de Pagina -->
    <!-- <div class="row"> -->
    <div class="container">
        <!-- Dados de Perfil -->
        <div class="row d-flex flex-wrap ">
            <!-- Foto/Avaliação/Botões -->
            <div class="col-sm-4 mt-2">
                <!-- Foto de Perfil -->
                <div class="col-sm-12">
                    <div class="text-center foto-perfil mt-2">
                        <img src="https://via.placeholder.com/150" alt="Ícone de usuário" class="mb-3" style="clip-path:circle()">
                    </div>
                </div>
                <!-- Final Foto de Perfil -->
                <!-- Avaliação Estrelas-->
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
                <!-- Final Avaliação Estrelas -->
                <!-- Botões -->
                <!-- Botão Agenda -->
                <div class="col-sm-12" style="align-items: center">
                    <!-- <button type="button" id="btnCalendario">Success</button> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calendarModal" style="background-color: #0711FF; border: none; width: 100%;">
                        <i class="fa-regular fa-calendar" style="color: #ffffff; margin-right: 1%;"></i>Verificar Diponibilidade </button>
                </div>
                <!-- Final Botão agenda -->
                <!-- Botão Whats -->
                <div class="col-sm-12">
                    <button type="button" class="btn btn-success mt-2" id="whatsappButton" style="background-color: #47C757; border: none; width: 100%"><i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>Entre em Contato</button>
                </div>
                <!-- Final Botão Whats -->
                <!-- Final Botões -->
            </div>
            <!-- Dados Prestador -->
            <div class="col-sm-8 mt-2">
                <div class="col-sm-12 mt-2" style="padding-left: 0;">
                    <h3 class="text-left mt-12">Nome Prestador<img width="5%" height="5%" src="https://img.icons8.com/color/48/verified-badge.png" alt="verified-badge" /></h3>
                    <h5 class="text-left mt-6">Cidade</h5>
                </div>
                <div class="row" style="margin: 1%;">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sobre-nome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobre-nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="seguimento">Seguimento</label>
                                <select class="form-control" id="seguimento" required>
                                    <option value="" disabled selected>Selecione um seguimento</option>
                                    <option value="teste">Aqui vem do banco</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="celular">Celular</label>
                                <input type="text" class="form-control" id="celular" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" requireds>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                <a  href="https://buscacepinter.correios.com.br/app/endereco/index.php" id="buscarCep" target="_blank">Não sei meu Cep</a>
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" class="form-control" aria-describedby="passwordHelpBlock" required>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long,
                                </small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="confirma-senha">Confirma Senha</label>
                                <input type="password" id="cofirma-senha" class="form-control" aria-describedby="passwordHelpBlock">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    Your password must be 8-20 characters long
                                </small>
                            </div>

                        </div>
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: #012640; color:white " onclick="return validar()">Salvar</button>
                </form>

            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="calendarModalLabel">Calendário</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="calendar">
                            <div class="calendar-header">
                                <button id="prevMonth" class="btn btn-sm btn-outline-secondary">&lt;</button>
                                <div id="monthYear"></div>
                                <button id="nextMonth" class="btn btn-sm btn-outline-secondary">&gt;</button>
                            </div>
                            <div class="calendar-days">
                                <div class="calendar-day">Dom</div>
                                <div class="calendar-day">Seg</div>
                                <div class="calendar-day">Ter</div>
                                <div class="calendar-day">Qua</div>
                                <div class="calendar-day">Qui</div>
                                <div class="calendar-day">Sex</div>
                                <div class="calendar-day">Sáb</div>
                            </div>
                            <div id="dates" class="calendar-dates"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Modal -->
    </div>
    <?php
    include '../../padroes/footer.php';
    ?>
    <!-- Cards de Ser -->
    <!-- Final Cards de Ser -->
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
    <script src="../../assets/js/modal_calendario.js"></script>
    <script src="../../assets/js/whats_link.js"></script>
    <script src="../../assets/js/valida_informacoes.js"></script>

</body>

</html>