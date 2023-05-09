<?php

$id = $_GET['id'];

$tempName = tempnam('.', '');

$temp = fopen($tempName, 'w');
$orig = fopen('anime.csv', 'r');

while (($row = fgetcsv($orig)) !== false) {
    if ($row[0] != $id) {
    fputcsv($temp, $row);
    }
}

fclose($temp);
fclose($orig);


rename($tempName, 'anime.csv');

header('location: index.php');

?>