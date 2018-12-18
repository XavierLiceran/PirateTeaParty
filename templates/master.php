<?php 
    session_start();
    require_once $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/librerias/ti.php'; 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/mensajes.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/switchController.php';
    
    if (!isset($_SESSION['from'])){
        $_SESSION['from'] = "";    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php startblock('titulo')?>
        <?php endblock()?>
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="./css/bootstrap.min.css"> -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="./css/miCSS.css">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
    <script src="./js/caducidad.js"></script>
</head>
<body onload="initTimer()">
    
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark gradient">
            <!-- LOGO -->
            <a class="navbar-brand" href="index.php">
                <img src="img/icons/big-anchor32.png" alt="">
            </a>

            <!-- DROP DOWN Btn -->
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <?php
                if(!isset($_SESSION['user'])) {
            ?>
            <!-- LOGIN MODAL BTN -->
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <button type="button" class="btn rounded-circle w-32 h-32 p-1 bg-transparent" data-toggle="modal" data-target="#loginModal">
                        <img src="img/icons/man-user32.png" class="" alt="">
                    </button>
                </li>
            </ul>            


           
            <?php
                } else{
            ?>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <!-- BIENVENIDO USER -->
                    <h8 class="navbar-brand float-right">
                        <?php 
                            echo "Bienvenido, " . $_SESSION['user']['name'];
                        ?>
                    </h8>
                </li>
                <li class="nav-item">
                    <!-- BTN CERRRAR SESIÓN -->
                    <form method="post" action="sessionController.php">
                        <input type="submit" class="btn btn-danger" name="CERRAR" value="CERRAR SESIÓN" />
                    </form>
                </li>
            </ul>
            <?php
                }
            ?>

            <!-- LOGIN MODAL -->
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- MODAL HEADER -->
                        <div class="modal-header bg-primary">
                            <img src="img/icons/big-anchor.png" class="img-fluid m-auto" alt="">
                        </div>
                        
                        <!-- MODAL BODY -->
                        <div class="modal-body">
                        
                        <?php 
                        //si existe algun error o algun mensaje que mostrar, esta funcion crea un div 
                        //acorde con el tipo del feedback y lo inyecta en el modal
                        
                        if ($_SESSION['from'] == "login" && isset($_SESSION['feedback']['error'])){
                            errorMsg();
                        }
                         
                        ?>
                            <form action="loginController.php" method="post"> 
                            
                                <div class="form-group"><!-- has-success -->
                                    <label class="form-control-label" for="username">Email</label>
                                    <input type="text" name = "username" placeholder="ex. User021" class="form-control" id="username"> <!-- is-valid -->
                                    <!-- <div class="valid-feedback">Success! You've done it.</div> -->
                                </div>

                                <div class="form-group"><!-- has-danger -->
                                    <label class="form-control-label" for="inputDanger1">Contraseña</label>
                                    <input type="password" name ="passwd" placeholder="······" class="form-control" id="inputInvalid"><!-- is-invalid -->
                                    <!-- <div class="invalid-feedback">Sorry, that username's taken. Try another?</div> -->
                                </div>

                                <button type="button" name="openRegisterBtn" id="openRegisterBtn" class="btn btn-link" onclick="openRegister()">
                                    ¿No tienes una cuenta? ¡Crea una ahora!
                                </button>
                                <button type="submit" class="btn btn-block btn-primary">Login!</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- REGISTER MODAL -->
            <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- MODAL HEADER -->
                        <div class="modal-header bg-primary">
                            <img src="img/icons/big-anchor.png" class="img-fluid m-auto" alt="">
                        </div>

                        <!-- MODAL BODY -->
                        
                        <div class="modal-body">
                        <?php 
                        //si existe algun error  esta funcion crea un div 
                        //acorde con el tipo del feedback y lo inyecta en el modal
                        if ($_SESSION['from'] == "register" && isset($_SESSION['feedback']['error'])){
                            errorMsg();
                        }
                         
                        ?>
                            <form action="registerController.php" method="post">

                                <div class="form-group"><!-- has-success -->
                                    <label class="form-control-label" for="username">Usuario</label>
                                    <input type="text" placeholder="ex. User021" class="form-control" name="name" id="name"> <!-- is-valid -->
                                    <!-- <div class="valid-feedback">Success! You've done it.</div> -->
                                </div>

                                <div id="emailDiv" class="form-group"><!-- has-success -->
                                    <label class="form-control-label" for="username">Email</label>
                                    <input type="text" placeholder="ex. User021@example.com" class="form-control" name="email" id="email" onkeyup="validate()"> <!-- is-valid -->
                                    <!-- <div class="valid-feedback">Success! You've done it.</div> -->
                                </div>

                                <div id="pswDiv" class="form-group"><!-- has-danger -->
                                    <label class="form-control-label" for="passwordInput">Contraseña</label>
                                    <input type="password" placeholder="······" class="form-control" id="passwordInput" name="passwd" onchange="isValidPsw()"><!-- is-invalid -->
                                    <!-- <div class="invalid-feedback">Sorry, that username's taken. Try another?</div> -->
                                </div>

                                <div id="repeatPswDiv" class="form-group"><!-- has-danger -->
                                    <label class="form-control-label" for="repeatPasswordInput">Repite la Contraseña</label>
                                    <input type="password" placeholder="······" class="form-control" id="repeatPasswordInput" onkeyup="isSamePsw()"><!-- is-invalid -->
                                    <!-- <div class="invalid-feedback">Sorry, that username's taken. Try another?</div> -->
                                </div>

                                <button type="button" name="openLoginBtn" id="openLoginBtn" class="btn btn-link" onclick="openLogin()">
                                    ¿Tienes ya una cuenta? ¡Entra ya!
                                </button>
                                <button id="registerBtn" type="button" class="btn btn-block btn-primary">Regístrate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
  
    <?php startblock('principal')?>
    <?php endblock()?>

    <script src="./js/jquery-3.3.1.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="./js/popper.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
   
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- JS LOGIN/REGISTER -->
    <script src="./js/miJS/prueba.js"></script>

    <script src="./js/cookies.js" > </script>

    <!-- SCRIPTS de mas -->
    <?php startblock('scripts')?>
    
    <?php endblock()?>

    <?php 
    //funcion de switchController, mira de donde venimos y en funcion de eso abre una cosa o otra
    switchMaster();
    ?>  
</body>
</html>