<?php
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];

$tempName = tempnam('.', '');



$temp = fopen($tempName, 'w');
$orig = fopen('anime.csv', 'r');
while (($row = fgetcsv($orig)) !== false) {
    if ($row[0] == $nome) {
        fputcsv($temp, [$nome, $genero, $autor]);
        continue;
    }   
    fputcsv($temp, $row);
}
fclose($temp);
fclose($orig);


rename($tempName, 'anime.csv');

header('location: index.php');



?>