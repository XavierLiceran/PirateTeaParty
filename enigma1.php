<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>
<?php startblock('titulo')?>
    Enigma nº1
<?php endblock()?>
<?php startblock('principal')?>
<div class="container mt-4">
<div class="row">
<div class="col-12">
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
  <strong><h3 style="font-weight:bold;">Si necesitas información, puedes consultar este diccionario de datos curiosos en cualquier momento!</h3></strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<div style="float:right;">
<button type="button"class="btn btn-danger"><a  target="_blank" style ="color:white; text-decoration:none;" href="infoEnigma1.php">Diccionario Pirata</a></button>
</div>
</div>
</div>
<div id="game">
<h2 style="text-align:center;font-weight:bold;">Responde las preguntas</h2>
 <div class="text-danger"><h2>Te quedan <span id="time">00:10</span> segundos!<h2></div>
     <hr style="margin-bottom: 20px">

     <div class="card">
  <div class="card-header">
  <h5 class="card-title" style="font-weight:bold;" id="question"></h5> 
  </div>
  <div class="card-body">
  <div class="row">
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="btn0"><span id="choice0"></span></button>
  </div>
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="btn1"><span id="choice1"></span></button>
  </div>
</div>
<div class="row mt-2">
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="btn2"><span id="choice2"></span></button>
  </div>
  <div class="col-6">
  <button type="button" style=" white-space: normal;" class="btn btn-primary btn-block" id="btn3"><span id="choice3"></span></button>
  </div>
</div>
  </div>
</div>

<hr style="margin-top: 20px">
            <footer>
                <p id="progress">Pregunta x de y</p>
            </footer>
</div>
</div>
<?php endblock()?>
<?php startblock('scripts')?>
<script src="./js/enigma/enigma1/juego.js"></script>   
<script src="./js/enigma/enigma1/pregunta.js"></script>  
<script src="./js/enigma/enigma1/app.js"></script>  
<?php endblock()?>