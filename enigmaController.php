<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php'?>
<?php startblock('titulo')?>
    Enigmas
<?php endblock()?>
<?php startblock('principal')?>

<div class="container">
<div id="grupo1">

  <div class="row">
<?php 
if($_SESSION['user']['path'] >= 0){
?>
  <div class="col-sm-12 col-md-4 col-lg-4 mt-1 enigma" enigma = "0" style="margin-top:20px; display: none;">
    <div class="card h-100">
  <img class="card-img-top" src="/PirateTeaParty/img/enigma1.jpg" alt="actividadespirata" style="height: 270px;">
  <div class="card-body">
    <h5 class="card-title"><strong>Trivia</strong></h5>
    <p class="card-text"> 
        Un juego de preguntas pirata, pero cuidado tiene tiempo límite!
</p>
  </div>
</div>
</div>

<?php
} 
if($_SESSION['user']['path'] >= 1){
?>
  <div class="col-sm-12 col-md-4 col-lg-4 mt-1 enigma" enigma = "1" style="margin-top:20px;display: none;">
  
  <div class="card h-100">
  <img class="card-img-top" src="/PirateTeaParty/img/enigma2.jpg" alt="mosquete" style=" height: 270px;" >
  <div class="card-body">
    <h5 class="card-title"> <strong>Pirate Scape</strong></h5>
    <p class="card-text"> Intenta escapar el máximo tiempo posbile para tener mayor puntuación.</p>
  </div>
</div>
  </div>
  <?php
} 
if($_SESSION['user']['path'] >= 2){
?>
  <div class="col-sm-12 col-md-4 col-lg-4 mt-1 enigma"  enigma = "2" style="margin-top:20px;display: none;">
  <div class="card h-100">
  <img class="card-img-top" src="/PirateTeaParty/img/enigma3.jpg" alt="moriscos" style=" height: 270px;">
  <div class="card-body">
    <h5 class="card-title"> <strong>Batalla de Lepanto</strong></h5>
    <p class="card-text">Un juego que pone a prueba tu estrategia, no es fácil ganar!<p>
</p>
  </div>
</div>
</div>
<?php } ?>
</div>
</div>
</div>
<?php endblock()?>
<?php startblock('scripts')?>
<script src = "/PirateTeaParty/js/cookies.js" ></script>   
<script src = "/PirateTeaParty/js/enigmaController.js" ></script> 

<?php endblock()?>



