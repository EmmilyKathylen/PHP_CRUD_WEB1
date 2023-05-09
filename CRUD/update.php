<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$pais = $_POST['pais'];

$tempName = tempnam('.', '');



$temp = fopen($tempName, 'w');
$orig = fopen('vinho.csv', 'r');
while (($row = fgetcsv($orig)) !== false) {
    if ($row[0] != $id) {
        fputcsv($temp, $row);
        continue;
    }   
    fputcsv($temp, [$id, $nome, $marca, $tipo, $pais]);
}
fclose($temp);
fclose($orig);


rename($tempName, 'vinho.csv');

header('location: index.php');



?>