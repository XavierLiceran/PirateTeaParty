<?php

    if(!isset($_SESSION)){
        session_start();
    }

    include $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/librerias/bd.php';

    if(isset($_POST['BORRAR'])){
        deleteUser($_POST['email']);
        header('Location: ../usuarios.php');
    }
?>