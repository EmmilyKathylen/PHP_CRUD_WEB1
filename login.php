<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
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

.cad{
    background-color: #9efd9e;
    width: 500px;
    height: 400px;
    padding: 35px;
    text-align: center;
    margin: 0 auto;
    font-size: 35px;
    border-radius: 20px;
}
.cad form{
    display: flex;
    flex-direction: column;
}

.cad input{
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
 a{
  color: #9efd9e;
  font-size: 25px; 

}
</style>
<body>  
    <h1>Cadastro de usuário</h1>
    
    <section class="aea-cadas">
    <div class="cad">
        <form action="add.php" method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="text" name="name" placeholder="Nome" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" value="Cadastrar">
    </div>        
        </form>
     </section>    
     <a href="index.php">Voltar para login</p>   
</body>
</html>