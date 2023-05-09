<?php

session_start();
if(!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    http_response_code(403);
    exit();
}

    $id = $_GET['id'];
    $fp = fopen('vinho.csv', 'r');
    $data = [];

    while (($row = fgetcsv($fp)) !== false) {
        if ($row[0] == $id) {
            $data = $row;
            break;
        }
    }
if (sizeof($data) == 0) {
        header('location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tabela</title>
</head>


<style>

    body{
        background-color: #1B1F27;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
    }

    h1{
        font-size: 50px;
    }
    
    a{
     color: #9efd9e;
    font-size: 20px;  
}

.edit input{
    display: block;
    margin-bottom: 10px;
    background-color: white;
    border: none;
    width: 250px;
    height: 55px;
    outline: none;
    border-radius: 20px;
    font-size: 25px;
}

.edit button{
    width: 90px; 
    height: 45px;   
    font-size: 20px;  
    border-radius: 15px;
    background-color: #1B1F27;
    color: #9efd9e;
    box-shadow: none;
}


</style>


<body>
    <h1>Dados do Código <?= $id ?></h1>
    <div class="edit">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $data[0] ?>">
        <input type="text" name="nome" placeholder="Nome" value="<?= $data[1] ?>"> 
        <input type="text" name="marca" placeholder="Marca" value="<?= $data[2] ?>"> 
        <input type="text" name="tipo" placeholder="Tipo" value="<?= $data[3] ?>">
        <input type="text" name="pais" placeholder="País" value="<?= $data[4] ?>" >
        <button>Salvar</button>
        <p>
            <a href="index.php">Voltar</a>
        </p>

    </form>
    </div>
</body>
</html>