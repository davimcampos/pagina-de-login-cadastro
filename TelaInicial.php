<?php
include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="painel_logado">
    <img src="images/perfil.png" alt="imagem perfil">    
    <p>Bem Vindo(a) Usuário: <?php echo $_SESSION['user']; ?></p> 
    <p>
        <a href="logout.php">Sair</a>
    </p>
</div>
</body>
</html>