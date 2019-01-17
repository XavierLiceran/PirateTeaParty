var fallos = new Array(7);

 
function Juego(questions) {
    this.puntuacion = 0;
    this.questions = questions;
    this.questionIndex = 0;      
}

Juego.prototype.getQuestionIndex = function() {
	return this.questions[this.questionIndex];
	}

Juego.prototype.guess = function(answer) {
			auxind = this.questionIndex + 1;
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.puntuacion++;
        fallos[this.questionIndex] = "Pregunta Nº" +auxind+" Correcta! "; 
    }
    else {
        fallos[this.questionIndex] = "Pregunta Nº"+auxind+" Incorrecta! ";
    }
    this.questionIndex++;
	clearInterval(miInterval);
}

Juego.prototype.isEnded = function() {  // devuelve true en caso que el numero de la pregunta sea  igual a el lengh total (la ultima pregunta)
    return this.questionIndex === this.questions.length;
}
