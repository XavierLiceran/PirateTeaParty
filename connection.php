<?php

function openBD()
{
    
    $servername = "hostingmysql328.nominalia.com";
    $username = "daw2a04";
    $BDname = "daw2a04";
    $password = "a1s2d3f4g5";
    
    //Los errores que puede soltar al intentar conectarse los tendremos que tratar desde donde 
    //llamomos a la funcion openBD
    $conn = new PDO("mysql:host=$servername;dbname=$BDname;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;

}

function closeBD()
{
    return null;
}



?>