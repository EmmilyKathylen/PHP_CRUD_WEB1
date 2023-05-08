<?php
    $nome = $_GET['nome'];
    $fp = fopen('anime.csv', 'r');
    $data = [];

    while (($row = fgetcsv($fp)) !== false) {
        if ($row[0] == $nome) {
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
    <title>Document</title>
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
    width: 300px;
    height: 60px;
    outline: none;
    border-radius: 20px;
    font-size: 25px;
}


</style>


<body>
    <h1>Dados da tabela <?= $nome ?></h1>
    <div class="edit">
    <form action="update.php" method="POST">
        <input type="hidden" name="nome" value="<?= $data[0] ?>">
        <input type="text" name="genero" placeholder="Gênero" value="<?= $data[1] ?>"> 
        <input type="text" name="autor" placeholder="Autor" value="<?= $data[2] ?>">
        <button>Salvar</button>
        <p>
            <a href="index.php">Voltar</a>
        </p>

    </form>
    </div>
</body>
</html>