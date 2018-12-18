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
                    <p class="card-text">¡Capitán se acercan piratas! Debemos huir rápidamente antes de que los piratas secuestren a nuestras mujeres y nuestros hijos y se hagan con el barco.</p>
                </div>
                <div class="card-footer">
                    Xavier Licerán
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
                <div id="next_div">
                    <div class="card border-info mx-auto mt-5" style="max-width: 20rem;">
                        <div class="card-body">
                            <h4 class="card-title">¡Buen trabajo capitán!</span></h4>
                            <p class="card-text">¿Sabías que los corsarios otomanos capturaron miles de barcos, y amplios tramos del levante de España e Italia fueron casi totalmente abandonadas por sus habitantes ya que por esa época éstos capturaron entre 800.000 y 1.025.000 personas generalmente mujeres ya que los hombres eran decapitados?</p>
                        </div>
                        <div class="card-footer">
                            <form action='/PirateTeaParty/controllers/pathController.php' method='POST'>
                                <input type ='hidden' name = 'path' value = '2' >
                                <button type='submit' class='btn btn-success ml-2 mt-2'>Guardar Progreso</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endblock()?>

<?php startblock('scripts')?>
    <script src="js/enigma/enigma2.js"></script>
<?php endblock()?>