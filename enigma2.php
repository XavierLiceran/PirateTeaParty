<?php include $_SERVER['DOCUMENT_ROOT'] .'/PirateTeaParty/templates/master.php' ?>

<?php startblock('titulo')?>
    Enigma2
<?php endblock()?>

<?php startblock('principal')?>
    <link rel="stylesheet" href="css/enigma/enigma2.css">
        <div id="score_div">
            Score: <span id="score">0</span>
        </div>
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
                <button id="restart" class="rounded">
                    Restart<br>
                    <small class="small_text">(press Enter)</small>
                </button>
            </div>
        </div>
<?php endblock()?>

<?php startblock('scripts')?>
    <script src="js/enigma/enigma2.js"></script>
<?php endblock()?>