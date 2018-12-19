<?php
require_once("connection.php");
require_once("errorController.php");

function selectUser($email, $passwd)
{

try {
    $conn = openBD();
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email AND passwd = :passwd"); 
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':passwd', $passwd);
    $stmt->execute();
    
 
    // guardamos el resultado en formato array asociativo.
    $result = $stmt->fetchAll();
    unset($result[0]['user']['passwd']);
    //var_dump($result);
    
}
catch(PDOException $e) {
    //$result = ["error" => $e];
    $_SESSION['feedback']['error'] = errorMessage($e);
    $result = -1;
}

$conn = closeBD();

return $result;
}

function insertUser($email, $passwd, $name){

    try {
        $conn = openBD();
        $stmt = $conn->prepare("INSERT INTO user (`email`, `passwd`, `name`) VALUES (:email, :passwd, :name)"); 
        //var_dump($stmt);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':passwd', $passwd);
        $stmt->bindParam(':name', $name);
        //$stmt->bindParam(':surname', $surname);
        $stmt->execute();

    }
    catch(PDOException $e) {
        //$result = ["error" => $e];
        $_SESSION['feedback']['error'] = errorMessage($e);
    }    
    $conn = closeBD();        
}

function actualizarPath($email , $path){
    try {
        $conn = openBD();
        $stmt = $conn->prepare("UPDATE user SET path = :path WHERE email = :email"); 
        //var_dump($stmt);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':path', $path);
        //$stmt->bindParam(':surname', $surname);
        $stmt->execute();

    }
    catch(PDOException $e) {
        //$result = ["error" => $e];
        $_SESSION['feedback']['error'] = errorMessage($e);
    }    
    $conn = closeBD();  
}


?>