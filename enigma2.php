<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>

<?php startblock('titulo')?>
    Enigma nº2
<?php endblock()?>

<?php startblock('principal')?>
    <link rel="stylesheet" href="css/enigma/enigma2.css">
    <div class="row ml-2 mt-2">
        <div class="col-3">
            <div class="card border-secondary" style="max-width: 20rem;">
                <div class="card-header">Pirate Scape</div>
                <div class="card-body">
                    <h4 class="card-title">Score: <span id="score">0</span></h4>
                    <p class="card-text">¡Capitán! Ya tenemos a los esclavos que financiaran nuestra flota. Vamos a hacernos paso a través de los barcos mercantes para evitar que nos sigan!</p>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div id="shipContainer" class="customContainer bg-dark rounded">
                <div id="barcoJugador" class="barco">
                    <div id="csId" class="collisionsquare"></div>
                </div>
                <div id="barcoEnemigo" class="barco">
                    <div class="collisionsquare"></div>
                </div>
                <div id="barcoEnemigo2" class="barco">
                    <div class="collisionsquare"></div>
                </div>
                <div id="barcoEnemigo3" class="barco">
                    <div class="collisionsquare"></div>
                </div>
                <div id="restart_div" class="bg-dark">
                    <button id="restart" class="buttonEnter rounded">
                        Comenzar de nuevo<br>
                        <small class="small_text">(apreta Enter)</small>
                    </button>
                </div>
                <div id="next_div" class="bg-primary">
                    ¡Buen trabajo capitán!</br>
                    <button id="nextEnigma" class="buttonEnter rounded">
                        Guardar progreso<br>
                        <small class="small_text">(apreta Enter)</small>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php endblock()?>

<?php startblock('scripts')?>
    <script src="js/enigma/enigma2.js"></script>
<?php endblock()?>