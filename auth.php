<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$fp = fopen('users.csv', 'r');
while(($row = fgetcsv($fp)) !== false) {
    if ($row[1] == $usuario && $row[2] == $senha) {
        $_SESSION['auth'] = true;
        header('location: /');
        exit();
    }
}

$_SESSION['auth'] = false;
header('location: /');
exit();

?>