<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
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
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="form-container col-12 col-md-8 col-lg-6">
            <h1 class="text-center py-2">Avaliação</h1>
            <div class="text-center">
                <img src="https://via.placeholder.com/150" alt="Ícone de usuário" class="mb-3">
            </div>
            <form action="index.php" method="post">
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
                <div class="form-group">
                    <label>Como você classifica a pontualidade do prestador</label>
                    <div class="d-flex justify-content-around">
                        <div class="op1">
                            <input type="radio" id="pontualidadeBoa" name="pontualidade" value="Boa" />
                            <label for="pontualidadeBoa">Boa</label>
                        </div>
                        <div class="op2">
                            <input type="radio" id="pontualidadeMediana" name="pontualidade" value="Mediana" />
                            <label for="pontualidadeMediana">Mediana</label>
                        </div>
                        <div class="op3">
                            <input type="radio" id="pontualidadeRuim" name="pontualidade" value="Ruim" />
                            <label for="pontualidadeRuim">Ruim</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Aspectos da Satisfação (Marque todos os aplicáveis):</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aspecto1" name="aspectos[]" value="Cortesia">
                        <label class="form-check-label" for="aspecto1">Cortesia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aspecto2" name="aspectos[]" value="Profissionalismo">
                        <label class="form-check-label" for="aspecto2">Profissionalismo</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aspecto3" name="aspectos[]" value="Qualidade do Serviço">
                        <label class="form-check-label" for="aspecto3">Qualidade do Serviço</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aspecto4" name="aspectos[]" value="Tempo de Resolução">
                        <label class="form-check-label" for="aspecto4">Tempo de Resolução</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="aspecto5" name="aspectos[]" value="Preço Justo">
                        <label class="form-check-label" for="aspecto5">Preço Justo</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mensagem">Observação</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Digite sua mensagem" rows="4" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn text-light" style="background-color: #1B3C54; width: 57%;">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
