<script src="js/cookies.js"></script>
<?php
if(!isset($_SESSION)){
    session_start();
}
function cerrarSession(){
    //Destruye variables
    session_unset();

    //Destruye sesion
    session_destroy();
?>
<script>
    if(comprobarCookie('enigma2counter')){
        eraseCookie("enigma2counter")
    }
</script>
<?php
    header("Location:index.php");
}

if(isset($_POST['CERRAR'])){
    cerrarSession();
}
?>