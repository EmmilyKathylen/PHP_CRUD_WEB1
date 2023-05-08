<?php
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$data = $_POST['data'];

$tempName = tempnam('.', '');



$temp = fopen($tempName, 'w');
$orig = fopen('anime.csv', 'r');
while (($row = fgetcsv($orig)) !== false) {
    if ($row[0] == $descricao) {
        fputcsv($temp, [$descricao, $valor, $data]);
        continue;
    }   
    fputcsv($temp, $row);
}
fclose($temp);
fclose($orig);


rename($tempName, 'anime.csv');

header('location: index.php');



?>