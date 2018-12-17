<?php 
    include $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/templates/master.php';
    include $_SERVER['DOCUMENT_ROOT'] . '/PirateTeaParty/librerias/bd.php';
    
    if(!isset($_SESSION['editNameFailed'])){
        $ciudades = selectCiudadById($_POST['id_ciudad']);
    }
?>

<?php startblock('titulo')?>
    Editar Ciudad
<?php endblock()?>

<?php startblock('principal')?>
<br>
    <div class="container-fluid">
        <?php require_once "partials/mensajes.php"?>
        <div class="card border-primary  mb-3">
            <div class="card-header  bg-primary text-white">CIUDAD</div>
            <div class="card-body">
                <form action="controllers/ciudadesController.php" method="post">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="id">Identificador</label>
                        <div class="col-md-10">
                            <?php if(!isset($_SESSION['editIdFailed'])){ ?>
                                <input type="text" class="form-control" name="id_ciudad" id="id" placeholder="Identificador de la ciudad" value="<?php echo $_POST['id_ciudad']?>" readonly/>
                            <?php } else { ?>
                                <input type="text" class="form-control" name="id_ciudad" id="id" placeholder="Identificador de la ciudad" value="<?php echo $_SESSION['editIdFailed']?>" readonly/>
                            <?php 
                                unset($_SESSION['editIdFailed']);
                            } 
                            ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label" for="txtNombre">Nombre</label>
                        <div class="col-md-10">
                            <?php if(!isset($_SESSION['editNameFailed'])){ ?>
                                <input type="text" class="form-control" name="nombre" id="txtNombre" placeholder="Nombre de la ciudad" value="<?php echo $ciudades[0]['nombre']?>" autofocus/>
                            <?php } else { ?>
                                <input type="text" class="form-control" name="nombre" id="txtNombre" placeholder="Nombre de la ciudad" value="<?php echo $_SESSION['editNameFailed']?>" autofocus/>
                            <?php 
                                unset($_SESSION['editNameFailed']);
                            } 
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2 col-1 ml-3"></div>
                        <input type="submit" class="btn btn-primary mr-2" name="editar" value="ACEPTAR" />
                        <a href="ciudades.php" class="btn btn-secondary">CANCELAR</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endblock()?>