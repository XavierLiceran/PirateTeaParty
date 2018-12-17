<?php

    function errorMessage($e){
        if(!empty($e->errorInfo[1])){
            switch($e->errorInfo[1]){
                case 1062:
                    $mensaje = "Registro duplicado";
                    break;
                case 1451:
                    $mensaje = "Registro con elementos relacionados";
                    break;
                default:
                    $mensake = $e->errorInfo[1] . " - " . $e->errorInfo[2];
                    break;
            }       
        } else {
            switch($e->getCode()){
                case 1044:
                    $mensaje = "Usuario y/o password incorrecto";
                    break;
                case 1049:
                    $mensaje = "Base de datos desconocida";
                    break;
                case 2002:
                    $mensaje = "No se encuentra el servidor";
                    break;
                default:
                    $mensaje = $e->getCode() . " - " . $e->getMessage();
                    break;
            }
        }

        return $mensaje;
    }

    function openBD(){
        $servername="localhost";
        $bdname="daw2a04";
        $username="root";
        $password="";

        $conn = new PDO("mysql:host=$servername;dbname=$bdname;charset=utf8",$username,$password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    }
    
    function closeBD(){
        return null;
    }

    function selectAllUsers(){
        
        $resultado = null;

        try{
            $conn = openBD();

            $sentencia = $conn -> prepare('SELECT * from user');
            $sentencia -> execute();
    
            $resultado = $sentencia -> fetchAll();
        }catch(PDOException $e){
            $_SESSION['error'] = errorMessage($e);
        }

        $conn = closeBD();

        return $resultado;
    }

    function selectUserById($email){
        
        $resultado = null;

        try{
            $conn = openBD();
            $sentencia = $conn -> prepare("SELECT * from user where email = :email");
            $sentencia->bindParam(':email', $email);

            $sentencia -> execute();
    
            $resultado = $sentencia -> fetchAll();
        }catch(PDOException $e){
            $_SESSION['error'] = errorMessage($e);
        }

        $conn = closeBD();

        return $resultado;
    }

    function deleteUser($email){
        
        try{
            $conn = openBD();
            $sentencia = $conn -> prepare("DELETE from user where email = :email");
            $sentencia->bindParam(':email', $email);

            $sentencia -> execute();
            $_SESSION['mensaje'] = 'Registro borrado correctamente';
        }catch(PDOException $e){
            $_SESSION['error'] = errorMessage($e);
        }

        $conn = closeBD();
    }
?>