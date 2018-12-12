function Juego(questions) {
    this.puntuacion = 0;
    this.questions = questions;
    this.questionIndex = 0;      
}

Juego.prototype.getQuestionIndex = function() {
	return this.questions[this.questionIndex];
	}

Juego.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.puntuacion++;
    }
    this.questionIndex++;
	clearInterval(miInterval);
}

Juego.prototype.isEnded = function() {  // devuelve true en caso que el numero de la pregunta sea  igual a el lengh total (la ultima pregunta)
    return this.questionIndex === this.questions.length;
}
