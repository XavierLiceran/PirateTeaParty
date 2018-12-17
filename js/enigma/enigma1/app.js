
function seguirJuego() {
    if(juego.isEnded()) {          // ha superado en el contador el maximo
        mostrarResultados();
    }
    else { //---------->
        // enseñamos pregunta
		
		var tiempo = 15;
        display = document.querySelector('#time');
		startTimer(tiempo, display);
		
        var element = document.getElementById("question");
        element.innerHTML = juego.getQuestionIndex().text;

        // enseñamos las opciones
        var choices = juego.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }
        Progreso();
    }
};

function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        juego.guess(guess);
        seguirJuego();
    }
};


function Progreso() {
    var currentQuestionNumber = juego.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Pregunta " + currentQuestionNumber + " de " + juego.questions.length;
};

// enseñar resultados 
function mostrarResultados() {
    var pregtotales = juego.questions.length;
    var puntos = juego.puntuacion;
    if (pregtotales == puntos)
    {
      var findeljuego = "<div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>";
      findeljuego += "<strong><h2 style='font-weight:bold;'>Puntuación Perfecta! Felicidades! " + juego.puntuacion + " de "+ juego.questions.length+ " preguntas" + "</h2></strong>";
      findeljuego += "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
      findeljuego+= "<span aria-hidden='true'>&times;</span>";
     findeljuego+= "</button></div>";
     findeljuego += "<button type='button' onclick='recargarPagina()' class='btn btn-success ml-2 mt-2'>Volver a intentarlo!</button>";
     findeljuego += "<form action='/PirateTeaParty/controllers/pathController.php' method='POST'>";
     findeljuego += "<input type ='hidden' name = 'path' value = '1' >";
     findeljuego += "<button type='submit' class='btn btn-success ml-2 mt-2'>Finalizar</button>";
     findeljuego += "</form>";
     
     var element = document.getElementById("game");
     element.innerHTML = findeljuego;
    }
    else if (puntos==0) {
        var findeljuego = "<div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>";
        findeljuego += "<strong><h2 style='font-weight:bold;'> No has dado ni una bien..." + "</h2></strong>";
        findeljuego += "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        findeljuego+= "<span aria-hidden='true'>&times;</span>";
       findeljuego+= "</button></div>";
       findeljuego += "<button type='button' onclick='recargarPagina()' class='btn btn-success ml-2 mt-2'>Volver a intentarlo!</button>";
       findeljuego += "<form action='/PirateTeaParty/controllers/pathController.php' method='POST'>";
       findeljuego += "<button type='submit' onclick='' class='btn btn-success ml-2 mt-2'>Finalizar</button>";
       findeljuego += "</form>";
       var element = document.getElementById("game");
       element.innerHTML = findeljuego;
    }
    else{

        var findeljuego = "<div class='alert alert-success alert-dismissible fade show mt-2' role='alert'>";
        findeljuego += "<strong><h2 style='font-weight:bold;'> No has contestado todas bien :( , Pero has contestado correctamente! " + juego.puntuacion + " de "+ juego.questions.length+ " preguntas" + "</h2></strong>";
        findeljuego += "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
        findeljuego+= "<span aria-hidden='true'>&times;</span>";
       findeljuego+= "</button></div>";
       findeljuego += "<button type='button' onclick='recargarPagina()' class='btn btn-success ml-2 mt-2'>Volver a intentarlo!</button>";
       findeljuego += "<form action='/PirateTeaParty/controllers/pathController.php' method='POST'>";
       findeljuego += "<button type='submit' onclick='' class='btn btn-success ml-2 mt-2'>Finalizar</button>";
       findeljuego += "</form>";
       var element = document.getElementById("game");
       element.innerHTML = findeljuego;
             
    }
};

// crear preguntas en array
var preguntas = [
    new Pregunta("Cual era la principal actividad lucrativa en los piratas del mediterráneo?", ["Oro", "Plata","Esclavos", "Metal"], "Esclavos"),
    new Pregunta("Que arma de fuego usaban los piratas berberiscos?", ["Pistola", "Ak-47","Thompson M1A1", "Mosquete y Arcabuz"], "Mosquete y Arcabuz"),
    new Pregunta ("Que objeto usaban los berberiscos para determinar la posición y altura de las estrellas sobre el cielo?",["Astrolabio","Telescopio","Prismáticos","No existia en esa época dicho objeto"],"Astrolabio"),
     new Pregunta("Los moriscos de la península al ser expulsados a África, porque algunos fueron esclavizados?",["Porque venían de la península","Por no llevar dinero","Por no reconocerlos como musulmanes","Porque no les cayeron bien"],"Por no reconocerlos como musulmanes"),
     new Pregunta("Porque razón principalmente los corsarios evitaban usar los cañones?",["Porque las balas de cañon pesaban mucho","Porque las balas de cañon eran costosas","Porque las balas eran difíciles de conseguir","Porque destrozaban parte del botín"],"Porque destrozaban parte del botín"),
     new Pregunta("Con quien se aliaron principalmente los berberiscos?",["Alemanes","Francia","Francia y el imperio Otomano","Con ninguno de estos"],"Francia y el imperio Otomano"),
     new Pregunta ("Que fue lo que propicio poco a poco el declive de la piratería en el mediterráneo?",["La invención de mejores armas","El descubrimiento de América","Las medidas tomadas en contra de esta","Ninguna de las anteriores"],"El descubrimiento de América")
];

// crear el juego
var juego = new Juego(preguntas);

// despues de mostrar todo y poner todo actualizado , mostramos la siguiente pregunta y cargamos las opciones (siempre que no haya acabado las preguntas)
seguirJuego();

function startTimer(duration, display) { //temporizador
    timer = duration;
	llamarTemporizador();
   miInterval= setInterval(function () {
		llamarTemporizador();
    }, 1000);
}
function llamarTemporizador ()
{
	   minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
		var fail = "fallo";
        juego.guess(fail);
        seguirJuego();
        }
}
function recargarPagina()
{
    location.reload(false);
}


