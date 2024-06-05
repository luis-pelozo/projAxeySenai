<?
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // habilitar CORS a conexao - util pra validação dos numeros

$servername = "";
$username = "";
$password = "";
$dbname = "";

$conexao = new mysqli($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
    http_response_code(500);
    echo json_encode(["error" => "Falha na conexão"]);
    exit();
}
