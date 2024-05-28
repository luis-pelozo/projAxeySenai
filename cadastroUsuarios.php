<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Pessoa Juridica</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .logo {
      max-width: 28vh;
      height: auto;
    }

    .geral {
      padding: 2%;
    }

    .centraliza {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .divide {
      margin-top: 4%;
    }

    .btn-selectable {
      border: 1px solid #012640;
      border-radius: 5px;
      padding: 10px 20px;
      margin: 10px;
      cursor: pointer;
    }

    .btn-selectable.active {
      background-color: #012640;
      color: white;
    }

    textarea {
      resize: none;
      min-height: 15vh;
    }

    .testee {
      margin-top: 6%;

    }
  </style>
</head>

<body>


  <div class="row justify-content-center geral">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header text-center">
          <img src="assets/imgs/logoPronta.png" alt="Logo da Axey" class="logo">
          <h3>Crie sua conta. É grátis!</h3>
        </div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="nome">Seu Nome *</label>
              <input type="text" class="form-control" id="nome" placeholder="Ex: João Antonio da Silva" required>
            </div>

            <div id="juridicaFields" style="display: none;">
              <div class="form-group">
                <label for="nomeFantasia">Nome Fantasia *</label>
                <input type="text" class="form-control" id="nomeFantasia" placeholder="" required>
              </div>

              <div class="form-group">
                <label for="razaoSocial">Razão Social *</label>
                <input type="text" class="form-control" id="razaoSocial" required>
              </div>
            </div>

            <div class="form-group" id="fisicaFields" style="display: none;">
              <label for="nomeSocial">Nome Social *</label>
              <input type="text" class="form-control" id="nomeSocial" placeholder="" required>
            </div>


            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" class="form-control" id="email" placeholder="Ex: joaoantonio@gmail.com" required>
            </div>


            <div class="form-row">
              <div class="form-group col-md-6" id="cnpjFields" style="display: none;">
                <label for="cnpj">CNPJ *</label>
                <input type="text" class="form-control" id="cnpj" required>
              </div>

              <div class="form-group col-md-6" id="cpfFields" style="display: none;">
                <label for="cpf">CPF *</label>
                <input type="text" class="form-control" id="cpf" required>
              </div>

              <div class="form-group col-md-6" id="seguimentoFields" style="display: none;">
                <label for="seguimento">Seguimento *</label>
                <select class="form-control" id="seguimento" required>
                  <option value="" disabled selected>Selecione um seguimento</option>
                  <option value="teste">Aqui vem do banco</option>
                </select>
              </div>
            </div>

            <div id="descricaoFields" style="display: none;">
              <div class="form-group">
                <label for="descricao">Descrição do Negócio *</label>
                <textarea class="form-control" id="descricao" required></textarea>
              </div>
            </div>




            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="celular">Celular *</label>
                <input type="text" class="form-control" id="celular" required>
              </div>
              <div class="form-group col-md-6">
                <label for="telefone">Telefone *</label>
                <input type="text" class="form-control" id="telefone" required>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-12">
                <label for="cep">CEP *</label>
                <div class="form-group d-flex">
                  <input type="text" class="form-control col-md-4 mr-md-2" id="cep" placeholder="00000-000" required>
                  <a class="col-md-8 mt-2" href="#">Não sei meu Cep</a>
                </div>
              </div>
            </div>

            <div class="form-row">

              <div class="form-group col-md-7">
                <label for="endereco">Endereço *</label>
                <input type="text" class="form-control" id="endereco" placeholder="" required>
              </div>

              <div class="form-group col-md-3">
                <label for="bairro">Bairro *</label>
                <input type="text" class="form-control" id="bairro" placeholder="" required>
              </div>

              <div class="form-group col-md-2">
                <label for="numero">Número *</label>
                <input type="text" class="form-control numero-menor" id="numero" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" id="cidade">
              </div>

              <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado">
              </div>

              <div class="form-group col-md-4">
                <label for="complemento">Complemento</label>
                <input type="text" class="form-control" id="complemento">
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="senha">Digite sua Senha *</label>
                <input type="password" class="form-control" id="senha" required>
              </div>
              <div class="form-group col-md-6">
                <label for="senha_repetida">Repita sua Senha *</label>
                <input type="password" class="form-control" id="senha_repetida" required>
              </div>
            </div>



            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary" style="background-color: #1A3C53; border: none;">Cadastre-se</button>
            </div>
            <div class="d-flex justify-content-center mt-2">
              <span>Já tem uma conta? </span>
              <a href="login.php" style="display: inline-block;">Entrar</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmaUser" tabindex="-1" aria-labelledby="confirmaUser">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body centraliza">
          <img src="assets/imgs/imgLogin.png" alt="Img Login" class="logo">
          <h3 class="divide">Vamos Começar?</h3>
          <div class="btn-selectable selecionado" id="btnCompra">Quero comprar ou contratar</div>
          <div class="btn-selectable selecionado" id="btnVende">Quero vender ou prestar serviços</div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmaPessoa" tabindex="-1" aria-labelledby="confirmaPessoa">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body centraliza">
          <img src="assets/imgs/imgLogin.png" alt="Img Login" class="logo">
          <h3 class="divide">Você é?</h3>
          <div class="btn-selectable selecionado2" id="btnJuridica">Pessoa Juridica<span class="texto"> (Possuo CNPJ)</span></div>
          <div class="btn-selectable selecionado2" id="btnFisica">Pessoa Fisica <span class="texto">(Não possuo CNPJ)</span></div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

  <script>
    $(document).ready(function() {
      $("#confirmaUser").modal('show');

      $(".selecionado").click(function() {
        $("#confirmaUser").modal('hide');
        $("#confirmaPessoa").modal('show');

        if ($(this).attr('id') == 'btnVende') {
          $("#seguimentoFields").show();
          $("#descricaoFields").show();
        }
      });

      $(".selecionado2").click(function() {
        $("#confirmaPessoa").modal('hide');

        if ($(this).attr('id') == 'btnJuridica') {
          $("#juridicaFields").show();
          $("#cnpjFields").show();
        } else if ($(this).attr('id') == 'btnFisica') {
          $("#fisicaFields").show();
          $("#cpfFields").show();

        }

      });
    });

    $('#cnpj').mask('00.000.000/0000-00');
    $('#cpf').mask('000.000.000-00');
    $('#celular').mask('(00) 00000-0000');
    $('#telefone').mask('(00) 0000-0000');
    $('#cep').mask('00000-000');
  </script>
</body>

</html>