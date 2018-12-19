<?php
session_start();
require_once("userController.php");
require_once("errorController.php");

if (isset($_POST['username']))
{
    //si la consulta ha ido bien nos devolvera los datos del usuario.
    //si la consulta ha ido mal  nos devolvera los datos del error.
    $encPassword = md5($_POST['passwd'], false);
    $user = selectUser($_POST['username'], $encPassword);
    $_SESSION['from'] = "login";
    if (!isset($_SESSION['feedback']['error']) && !empty($user)){
        //pasamos por un indice de control de errores.
        //$_SESSION['feedback']['error'] = errorMessage($user['error']); 
        $_SESSION['user'] = $user[0];
        $_SESSION['feedback']['succes'] = TRUE;
    
    }
    elseif (empty($user)){ 
        $_SESSION['feedback']['error'] = "Usuario y/o password incorrecto" ;       
    }
    if (!isset($_SESSION['feedback']['error'])) {
        header("location: enigmaController.php");
    }  
    else{   
        header("location: index.php");
    }
    
}
?>