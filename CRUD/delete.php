<?php

$nome = $_GET['nome'];

$tempName = tempnam('.', '');



$temp = fopen($tempName, 'w');
$orig = fopen('anime.csv', 'r');
while (($row = fgetcsv($orig)) !== false) {
    if ($row[0] == $nome) {
        continue;
    }
    fputcsv($temp, $row);
}
fclose($temp);
fclose($orig);


rename($tempName, 'anime.csv');

header('location: index.php');

?>