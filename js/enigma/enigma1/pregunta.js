function Pregunta(text, choices, answer) {
    this.text = text;   //pregunta
    this.choices = choices; //opciones
    this.answer = answer; //respuesta
}

Pregunta.prototype.isCorrectAnswer = function(choice) {
    return this.answer === choice;
}
