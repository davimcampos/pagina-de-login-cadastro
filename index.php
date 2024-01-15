<?php

include('conexao.php');
$display = 'none';
if(isset($_POST['email']) || isset($_POST['senha'])){
    
    if(strlen($_POST['email'])==0){
        $display= 'block';
    }
    else if(strlen($_POST['senha'])==0){
        $display='block';
    }
    else{
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);
   
$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

$quantidade = $sql_query->num_rows;

if($quantidade == 1){

$usuario = $sql_query->fetch_assoc();

if(!isset($_SESSION)){
session_start();


}

$_SESSION['id'] = $usuario['id'];
$_SESSION['user'] = $usuario['usuario'];

header("Location: TelaInicial.php");


}

else{
    echo "Falha ao logar! E-mail ou senha incorretos.";
}

    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <form action="" method="POST" class="formulario">
    <h1>Login</h1>    
    <div id="alerta" style= "display: <?=$display?>"><?php echo "*Preencha todos os campos.";?></div>
    <img src="images/icone_login.png" alt="icone usuário">
    <label for="email">E-mail:</label>
    <input type="text" name="email">
    <label for="senha">Senha:</label>
    <input type="password" name="senha">
    <a href="cadastro.php"><button type="button">Cadastrar</button></a>
    <button type="submit">Entrar</button> 

    </form>
   
</body>
</html>