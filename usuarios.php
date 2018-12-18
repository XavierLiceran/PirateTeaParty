<?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/templates/master.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/librerias/bd.php';

    if (!isset($_SESSION)){
        session_start();  
    }

    $usuarios = selectAllUsers();
?>
<?php startblock('titulo')?>
    Usuarios
<?php endblock()?>

<?php startblock('principal')?>
<?php
    if(isset($_SESSION['user'])){
        if($_SESSION['user']['ADMIN'] == 1){
?>
    <br>
    <div class="container-fluid">

        <?php require_once "partials/mensajes.php"?>

        <div class="card border-secondary mb-3">
            <div class="card-header">Estaciones</div>
            <div class="card-body">
                <button type="submit" class="btn btn-primary" name ="estacion1" value="Asignar estación 1" onclick="setCookie('pirateTeaPartyEstacion', 1, '30 Dec 2018 12:00:00 UTC')">Asignar estación 1</button>
                <button type="submit" class="btn btn-primary" name ="estacion2" value="Asignar estación 2" onclick="setCookie('pirateTeaPartyEstacion', 2, '30 Dec 2018 12:00:00 UTC')">Asignar estación 2</button>
                <button type="submit" class="btn btn-primary" name ="estacion3" value="Asignar estación 3" onclick="setCookie('pirateTeaPartyEstacion', 3, '30 Dec 2018 12:00:00 UTC')">Asignar estación 3</button>
                <button type="submit" class="btn btn-primary" name ="estacion4" value="Asignar estación 4" onclick="setCookie('pirateTeaPartyEstacion', 4, '30 Dec 2018 12:00:00 UTC')">Asignar estación 4</button>
            </div>
        </div>
        <div class="card border-secondary  mb-3">
            <div class="card-header  bg-primary text-white">Lista de usuarios</div>
            <div class="card-body">
            <?php 
                //echo $_SESSION["reservas"]['0']["txtNombre"];
                if(count($usuarios)==0){
            ?>
                <div class="alert alert-dismissible alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>No hay usuarios</strong>
                </div>
            <?php
                } else {
            ?>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Nombre</th>
                            <th>Enigmas completados</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($usuarios as $c) { 
                        ?>
                        <tr>
                            <td class="col-3"><?php echo $c['email'] ?></td>
                            <td class="col-4"><?php echo $c['name'] ?></td>
                            <td class="col-4"><?php echo $c['path'] ?></td>
                            <!-- <td>
                                <form method="post" action="editCiudad.php">
                                    <input type="submit" class="btn btn-info float-right" name ="EDITAR" value="EDITAR"/>
                                    <input type="hidden" name ="id_ciudad" value=""/>
                                </form>
                            </td> -->
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#borrarModal" data-email="<?php echo $c['email'] ?>" data-name="<?php echo $c['name'] ?>" name ="BORRAR">BORRAR</button>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="modal fade" id="borrarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-white" id="nombreModal">Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <label class="col-form-label">¿Estas seguro de borrar este registro?</label>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="controllers/usersController.php">
                            <input type="submit" class="btn btn-primary" name ="BORRAR" value="ACEPTAR"/>
                            <input type="hidden" id="hiddenInput" name ="email" value=""/>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    }
    ?>
<?php endblock()?>

<?php startblock('scripts')?>
    <script src="/PirateTeaParty/js/modalController.js"></script>
<?php endblock()?>