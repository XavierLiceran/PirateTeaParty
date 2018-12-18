<?php
if(!isset($_SESSION)){
    session_start();
}
function cerrarSession(){
    //Destruye variables
    session_unset();

    //Destruye sesion
    session_destroy();
    header("Location:index.php");
}

if(isset($_POST['CERRAR'])){
    cerrarSession();
}
?>