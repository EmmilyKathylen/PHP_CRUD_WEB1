<?php
session_start();

if(!isset($_SESSION['auth']) || $_SESSION['auth'] !== true) {
    http_response_code(403);
    exit();
}

$id = uniqid();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vinho</title>
</head>

<style>
        body{
            background-color: #1B1F27;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        h1{
        text-align: center;
        font-size: 65px;
        }

        table, tr , th, td {
            border: 1px solid gray;
            border-collapse: collapse;
           
        }
        td, th {
            padding: .5em;
        }
        table {
            margin-bottom: 1em; 
            margin-top: 20px;
            margin: 0 auto;
            font-size: 20px;
        }

        .form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 15vh;
        }

        input{
            height: 25px;
            font-size: 14px;
        }
        a{
        color: #9efd9e;
        font-size: 25px;  
        }
        button{
        width: 100px; 
        height: 50px;   
        font-size: 20px;  
        border-radius: 10px;
        background-color: #1B1F27;
        color: #9efd9e;
        box-shadow: none;
        }

        .form button{
        width: 100px; 
        height: 40px;   
        font-size: 25px;  
        border-radius: 15px;
        background-color: #1B1F27;
        color: #9efd9e;
        box-shadow: none;
        
        }

</style>

<body>
    <h1>Tabela de vinho</h1>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Marca</th>
            <th>Tipo</th>
            <th>País de origem</th>
            <th>Deletar</th>
            <th>Editar</th>
        </tr>
        <?php $fp = fopen('vinho.csv', 'r') ?>
        <?php while (($row = fgetcsv($fp)) !== false): ?>
            <tr>
                <td><?= $row[0] ?></td>
                <td><?= $row[1] ?></td>
                <td><?= $row[2] ?></td>
                <td><?= $row[3] ?></td>
                <td><?= $row[4] ?></td>
                <td>
                    <form action="delete.php" method="GET">
                        <input type="hidden" name="id" value="<?= $row[0] ?>">
                        <button>Remover</button>
                    </form>
                </td>
                <td>
                    <a href="edit.php?id=<?= $row[0] ?>">Editar</a>
                </td>
            </tr>        
        <?php endwhile ?>
    </table>
       <div class="form">   
     <form action="add.php" method="POST">
        <input type="hidden" name="id" value="<?= $id;?>">
        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="marca" placeholder="Marca" required>
        <input type="text" name="tipo" placeholder="Tipo" required>
        <input type="text" name="pais" placeholder="País" required>
        <button>Salvar</button>

        <p>
            <a href="../">Voltar</a>
        </p>

     </form>       
        </div>

</body>
</html>