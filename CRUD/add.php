<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];


$fp = fopen('anime.csv', 'r');
while (($row = fgetcsv($fp)) !== false) {
    if ($row[0] == $id) {
        http_response_code(400);
        echo "já adicionado";
        exit();
    }
}


$fp = fopen('anime.csv', 'a');
fputcsv($fp, [$id, $nome, $genero, $autor]);


http_response_code(302);
header('location: index.php');

?>