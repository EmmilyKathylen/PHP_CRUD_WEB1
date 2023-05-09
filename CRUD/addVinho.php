<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$pais = $_POST['pais'];


$fp = fopen('vinho.csv', 'r');
while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $id) {
        http_response_code(400);
        echo "já adicionado";
        exit();
    }
}


$fp = fopen('vinho.csv', 'a');
fputcsv($fp, [$id,$nome, $marca, $tipo, $pais]);


http_response_code(302);
header('location: index.php');

?>