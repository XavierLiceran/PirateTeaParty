<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>
<?php startblock('titulo')?>
    Index
<?php endblock()?>
<?php startblock('principal')?>
<?php if($_SESSION['user']['path'] < 1){
    $_SESSION['user']['path'] = 1;
}
    updatePath();
?>

<div class="container">
 <h2> Bienvenido <?php ?></h2>   
<div class="row mt-4">
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="eni1">Ir al enigma 1</button>
  </div>
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="eni2">Ir al enigma 2</button>
  </div>
</div>
<div class="row mt-2">
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="eni3">Ir al enigma 3</button>
  </div>
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="eni3">Ir al enigma 4</button>
  </div>
</div>
<?php endblock() ?>

<?php startblock('scripts')?>
<?php endblock()?>

