<?php 
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/userController.php';

if(isset($_POST['path'])){
    if ($_SESSION['user']['path'] < $_POST['path']){
        $_SESSION['user']['path'] = $_POST['path'];
        actualizarPath($_SESSION['user']['email'], $_POST['path']);
    }
}

header("Location: /PirateTeaParty/enigmaController.php");

?>