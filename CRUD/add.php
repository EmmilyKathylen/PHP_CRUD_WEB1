<?php
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data = $_POST['data'];


$fp = fopen('anime.csv', 'r');
while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $descricao) {
        http_response_code(400);
        echo "já adicionado";
        exit();
    }
}


$fp = fopen('anime.csv', 'a');
fputcsv($fp, [$descricao, $valor, $data]);


http_response_code(302);
header('location: index.php');

?>