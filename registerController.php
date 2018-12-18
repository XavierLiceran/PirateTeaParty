<?php 
session_start();
require_once("userController.php");


if (isset($_POST['email'])){

    //si el insert ha ido bien nos devolvera un feedback positivo.
    //si la consulta ha ido mal  nos devolvera los datos del error.
    $encPassword = md5($_POST['passwd'], false);
    insertUser($_POST['email'],$encPassword,$_POST['name']);
    //session register nos sirve para decirle al indice de donde venimos.
    $_SESSION['from'] = "register";

    if (!isset($_SESSION['feedback']['error'])){
        //controlamos el feedback que queremos dar al usuario pasando el error por 
        //una funcion que nos devuelve un mensaje personalizado.

        //var_dump($insert); insert tiene lo que tiene nque tener
        //$_SESSION['feedback']['error'] = errorMessage($insert['error']);
        //var_dump($_SESSION); //$session tiene lo que tiene que tener
    //}
    //else{        
        $user = selectUser($_POST['email'], $encPassword);
        if (!isset($_SESSION['feedback']['error'])){
            //pasamos por un indice de control de errores.
            //$_SESSION['feedback']['error'] = errorMessage($user['error']); 

            $_SESSION['user'] = $user[0];  
            $_SESSION['feedback']['succes'] = TRUE;     
        }
<<<<<<< HEAD
    }
    
    if (isset($_SESSION['feedback']['succes'])) {
        header("location: landing.php");
    }  
    else{   
        header("location: index.php");
    }

=======
    }   
     
    header("location: index.php");
>>>>>>> 46eb00d37c990b7cc5a032520fc7c6e243f7eabb
}

?>