
function seguirJuego() {
    if(juego.isEnded()) {          // ha superado en el contador el maximo
        mostrarResultados();
    }
    else { //---------->
        // enseñamos pregunta
		
		var tiempo = 10;
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
    if (juego.puntuacion==juego.questions.length)
    {
   var findeljuego = "<div class='card' style='width: 18rem;'>";
   findeljuego = "<div class='card-body'>";
    findeljuego += "<h2 id='score'> Has acertado " + juego.puntuacion + " de "+ juego.questions.length+" preguntas" +"</h2>";
    findeljuego += "</div> </div>";
    var element = document.getElementById("game");
    element.innerHTML = findeljuego;
    }
};

// crear preguntas en array
var preguntas = [
    new Pregunta("Que arma de fuego usaban los piratas Berberiscos?", ["Pistola", "Ak-47","Thompson M1A1", "Mosquete y Arcabuz"], "Mosquete y Arcabuz"),
	 new Pregunta("Cual era la principal actividad lucrativa en los piratas del mediterraneo?", ["Oro", "Plata","Esclavos", "Metal"], "Esclavos")
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



