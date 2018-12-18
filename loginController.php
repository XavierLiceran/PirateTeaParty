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
    if (!isset($_SESSION['feedback']['error'])){
        //pasamos por un indice de control de errores.
        //$_SESSION['feedback']['error'] = errorMessage($user['error']); 
        $_SESSION['user'] = $user[0];
        $_SESSION['feedback']['succes'] = TRUE;
    
    }
    elseif (empty($user) && !isset($_SESSION['feedback']['error'])){ 
        $_SESSION['feedback']['error'] = "Usuario y/o password incorrecto" ;       
    }
    if (isset($_SESSION['feedback']['succes'])) {
<<<<<<< HEAD
        header("location: enigmaController.php");
=======
<<<<<<< HEAD
        header("location: enigmaController.php");
=======
        header("location:enigmaController.php");
>>>>>>> 272ed6dbe62d25ae78edbd09d02d3d1ad795101e
>>>>>>> a69f14bd639e4b03dd05b4e3842abf1e8a902c05
    }  
    else{   
        header("location: index.php");
    }
}
?>