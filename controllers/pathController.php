<?php 
session_start();
require_once('/PirateTeaParty/userController.php');

if(isset($_POST['path'])){
    if ($_SESSION['user']['path'] < $_POST['path']){
        $_SESSION['user']['path'] = $_POST['path'];
    }
    actualizarPath( $_SESSION['user']['path'], $_SESSION['user']['email']);
}

header("Location: /PirateTeaParty/enigmaController.php");

?>