<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <style>
      body{
    background-color: #1B1F27;
    color: white;
    font-family: Arial, Helvetica, sans-serif;
}

h1{
  text-align: center;
  font-size: 70px;
}

h2{
  font-size: 40px;
  color: black;
  
}

.login{
    background-color: #9efd9e;
    width: 500px;
    height: 400px;
    padding: 35px;
    text-align: center;
    margin: 0 auto;
    font-size: 35px;
    border-radius: 20px;
}

.login form{
    display: flex;
    flex-direction: column;
}

.login input{
    margin: 0 auto;
    margin-top: 20px;
    background-color: white;
    border: none;
    width: 300px;
    height: 60px;
    outline: none;
    border-radius: 20px;
    font-size: 20px;
}

::placeholder { 
  font-size: 25px;
  color: black;
  padding: 10px;
}

button{
  margin: 0 auto;
  margin-top: 20px;
  border: none;
  width: 200px;
  height: 60px;
  display: block;
  background-color: white;
  font-size: 25px;
  font-weight: bold;
  cursor: pointer;
  border-radius: 20px;
}

a{
  color: #5568FE;
  font-size: 25px;  
  text-decoration: none;
  margin-top: -10px;  
}
.home a{
    color: #9efd9e;
    font-size: 25px;  
}
p{
    font-size: 25px;
}

    </style>

</head>
<body>
<h1>Sistema de Gerenciamento</h1> 
<?php if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== true): ?>

    <section calss="area-login">
    <div class="login">
    <h2>Acesse sua conta!</h2>
    <form action="auth.php" method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="senha" required>
        <button>Entrar</button>
    <p><a href="login.php">Crie sua conta aqui!</a></p>
    </div>
</section> 
</form>

    <?php else: ?>
        <div class="home">
        <p>Confira seus gastos <a href="CRUD/">aqui</a> </p>
        <br>
        <a href="logout.php">Sair da conta</a>
    </div>
    <?php endif ?>  
      
</body>
</html>