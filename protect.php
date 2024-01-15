<?php
if(!isset($_SESSION)){
    
    session_start();

}

if(!isset($_SESSION['id'])){
    die("Você precisa logar para acessar esta página.<p><a> href=\"index.php\">Entrar</a></p>");
    
}

?> 