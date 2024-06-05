// Tela produto
$(document).ready(function () {
  $("#servicePrice").mask("#.##0,00", {
    reverse: true,
  });

  $("#serviceDescription").keyup(function () {
    var charCount = $(this).val().length;
    $("#charCount").text(charCount);
  });
});

function previewImages() {
  var preview = document.getElementById("imagePreview");
  preview.innerHTML = "";
  var files = document.getElementById("serviceImages").files;

  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    var reader = new FileReader();

    reader.onload = function (e) {
      var img = document.createElement("img");
      img.src = e.target.result;
      img.classList.add("m-2");
      preview.appendChild(img);
    };

    reader.readAsDataURL(file);
  }
}
// fim tela produto

// Cadastro usuario
function validar() {
  var nome = document.getElementById("nome").value;
  var regex = /^\S{2,}\s+\S+/; // Pelo menos duas palavras com um espaço entre elas
  if (!regex.test(nome)) {
    alert(
      "O nome deve conter pelo menos duas palavras, sendo a primeira com pelo menos dois caracteres e um espaço entre elas."
    );
    return false;
  }
  var senha = document.getElementById("senha").value;
  var repetirSenha = document.getElementById("senha_repetida").value;

  // Verifica se a senha tem pelo menos 6 caracteres
  if (senha.length < 6) {
    alert("A senha deve ter pelo menos 6 caracteres.");
    return false;
  }

  // Verifica se a senha e a repetição da senha são iguais
  if (senha !== repetirSenha) {
    alert("As senhas não coincidem. Por favor, verifique.");
    return false;
  }
  return true;
}

$(document).ready(function () {
  $("#confirmaUser").modal("show");

  $(".selecionado").click(function () {
    $("#confirmaUser").modal("hide");
    $("#confirmaPessoa").modal("show");

    if ($(this).attr("id") == "btnVende") {
      $("#seguimentoFields").show();
      $("#descricaoFields").show();
    }
  });

  $(".selecionado2").click(function () {
    $("#confirmaPessoa").modal("hide");

    if ($(this).attr("id") == "btnJuridica") {
      $("#juridicaFields").show();
      $("#cnpjFields").show();
    } else if ($(this).attr("id") == "btnFisica") {
      $("#fisicaFields").show();
      $("#cpfFields").show();
    }
  });

  $("#iCadastroUsuarios").on("submit", function (e) {
    const formData = new FormData(this);
  });
});

$("#cnpj").mask("00.000.000/0000-00");
$("#cpf").mask("000.000.000-00");
$("#celular").mask("(00) 00000-0000");
$("#telefone").mask("(00) 0000-0000");
$("#cep").mask("00000-000");

function buscarCep() {
  var cep = $("#cep").val().replace(/\D/g, ""); // Remove caracteres não numéricos
  if (cep.length != 8) {
    alert("CEP inválido. Por favor, digite um CEP válido.");
    return;
  }

  $.ajax({
    url: "https://viacep.com.br/ws/" + cep + "/json/",
    dataType: "json",
    success: function (data) {
      if (!data.erro) {
        $("#endereco").val(data.logradouro);
        $("#bairro").val(data.bairro);
        $("#cidade").val(data.localidade);
        $("#estado").val(data.uf);
        $("#numero").focus(); // Mova o foco para o campo de número após preencher o endereço
      } else {
        alert("CEP não encontrado. Por favor, verifique o CEP digitado.");
      }
    },
    error: function () {
      if ($("#cep").val().length == 8) {
        alert("Erro ao buscar o CEP. Por favor, tente novamente.");
      }
    },
  });
}

$("#cep").on("blur", buscarCep);
$("#cep").on("keypress", function (event) {
  if (event.which === 13) {
    // Se a tecla Enter for pressionada
    buscarCep();
  }
});
// fim cad usuario

//footer autaliza de forma automatica
document.addEventListener("DOMContentLoaded", function () {
  var currentYear = new Date().getFullYear();
  document.getElementById("copyright").innerHTML =
    "&copy; " + currentYear + " Axey. Todos os direitos reservados.";
});

// JS tela cadastro
$(document).ready(function () {
  $(".servicePrice").mask("000.000.000,00 R$", { reverse: true });

  $("#serviceDescription").keyup(function () {
    var charCount = $(this).val().length;
    $("#charCount").text(charCount);
  });
});

function previewImages() {
  var preview = document.getElementById("imagePreview");
  preview.innerHTML = "";
  var files = document.getElementById("serviceImages").files;

  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    var reader = new FileReader();

    reader.onload = function (e) {
      var img = document.createElement("img");
      img.src = e.target.result;
      img.classList.add("m-2");
      preview.appendChild(img);
    };

    reader.readAsDataURL(file);
  }
}
