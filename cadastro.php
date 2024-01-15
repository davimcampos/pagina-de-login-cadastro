<?php

include('conexao.php');
$display = 'none';
if(isset($_POST['email_cadastro']) || isset($_POST['senha_cadastro']) || isset($_POST['usuario_cadastro'])){
    if(strlen($_POST['email_cadastro'])==0){
        $display= 'block';
    }
    else if(strlen($_POST['senha_cadastro'])==0){
        $display= 'block';
    }
    else if(strlen($_POST['usuario_cadastro'])==0){
        $display= 'block';
    }
    
    else{

$email = $mysqli->real_escape_string($_POST['email_cadastro']);
$senha = $mysqli->real_escape_string($_POST['senha_cadastro']);
$usuario = $mysqli->real_escape_string($_POST['usuario_cadastro']);
    


$sql_code = "INSERT INTO usuarios (email, usuario, senha) VALUES('$email', '$usuario', '$senha')";

$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);



}
}




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="" method="POST" class="formulario">
<h1>Cadastro</h1>
<img src="images/icone_cadastro.png" alt="icone cadastro">
<div id="alerta" style= "display: <?=$display?>"><?php echo "*Preencha todos os campos.";?></div>
    <label for="email">E-mail:</label>
    <input type="text" name="email_cadastro">

    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario_cadastro">

    <label for="senha">Senha:</label>
    <input type="password" name="senha_cadastro">

    <a href="index.php"><button type="submit">Realizar Cadastro</button></a> 
    <a href="index.php"><button type="button">Voltar</button></a> 

    </form>
</body>
</html>