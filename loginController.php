<?php
session_start();
require_once("userController.php");
require_once("errorController.php");

if (isset($_POST['email']))
{
    //si la consulta ha ido bien nos devolvera los datos del usuario.
    //si la consulta ha ido mal  nos devolvera los datos del error.
    $user = selectUser($_POST['email'], $_POST['passwd']);
    $_SESSION['from'] = "login";
    if (!isset($_SESSION['feedback']['error'])){
        //pasamos por un indice de control de errores.
        //$_SESSION['feedback']['error'] = errorMessage($user['error']); 
        $_SESSION['user'] = $user[0];
        $_SESSION['feedback']['succes'] = TRUE;
    
    }
    elseif (empty($user) && !isset($_SESSION['feedback']['error'])){ 
        $_SESSION['feedback']['error'] = "Usuario y/o password incorrecto" ;       
    }
    header("location: index.php");
    
}
?>