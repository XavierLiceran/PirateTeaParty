
function nextCard(){
    cardNumber++;
    var texto = document.getElementById("text");
    var imagen = document.getElementById("imagen");
    buttons(true);
    texto.innerHTML = text[cardNumber];
    imagen.setAttribute("src", img[cardNumber]); 

    if(cardNumber >2){
        imagen.classList.add('col-6', 'float-left','tamanyo');
        texto.classList.add('col-6', 'float-right');
    }
    
    else if(cardNumber < 3){
        imagen.classList.remove('col-6', 'float-left', 'tamanyo');
        texto.classList.remove('col-6', 'float-right');
    }

}
function previousCard(){
    cardNumber--;
    var texto = document.getElementById("text");
    var imagen = document.getElementById("imagen");
    buttons(false);
    texto.innerHTML = text[cardNumber];
    imagen.setAttribute("src", img[cardNumber]); 
    
    if(cardNumber >2){
        imagen.classList.add('col-6', 'float-left', 'tamanyo');
        texto.classList.add('col-6', 'float-right',);
    }
    
    else if(cardNumber < 3){
        imagen.classList.remove('col-6', 'float-left','tamanyo');
        texto.classList.remove('col-6', 'float-right');
    }
    
}

function buttons(next){
    var botones = document.getElementById("botones");
    if(cardNumber === 0 && document.getElementById("btn2")){        
        botones.removeChild(document.getElementById("btn2"));
    }
    else if (next && !document.getElementById("btn2") && cardNumber < 5){
        var btn2 = document.createElement("button");
        btn2.classList.add("boton","btn","btn-sm", "col-3");
        btn2.setAttribute("onclick","previousCard()");
        btn2.setAttribute("type", "button");
        btn2.setAttribute("id","btn2");
        btn2.setAttribute("style","float: left;");
        btn2.innerHTML = "Anterior";
        botones.appendChild(btn2);
    }
    else if(document.getElementById("btn1") && cardNumber === 5){
        
        var btn1 = document.getElementById("btn1");
        if(empezado){
            botones.removeChild(btn1);
        }
        else{
            btn1.setAttribute("onclick","startGame()");
            btn1.innerHTML = "EMPEZAR!";
        }

    }
    else if(cardNumber === 4){
        if(empezado && !document.getElementById("btn1")){
            var btn1 = document.createElement("button");
            btn1.classList.add("boton","btn","btn-sm", "col-3");
            btn1.setAttribute("onclick","nextCard()");
            btn1.setAttribute("id","btn1");
            btn1.setAttribute("type", "button");
            btn1.setAttribute("style","float: right;");
            btn1.innerHTML = "Siguiente";
            botones.appendChild(btn1);
        }
        else{
            var btn1 = document.getElementById("btn1");
            btn1.setAttribute("onclick","nextCard()");
            btn1.innerHTML = "Siguiente";
        } 
    }


}
function startGame(){
    empezado = true;

    setTimeout(function(){
        victoria = false;    
        endGame();
    }, 10000);

}

function endGame(){
    var texto = document.getElementById("text");
    var imagen = document.getElementById("imagen");
    // document.getElementById("path").setAttribute("action","controllers/pathController.php");
    terminado = true;
    if(document.getElementById("btn2")){
        document.getElementById("btn2").style.display ="none";
    }
    if(document.getElementById("btn1")){
        btn1 = document.getElementById("btn1");
        btn1.setAttribute("type", "submit");
        btn1.removeAttribute("onclick");
        btn1.innerHTML = "FINALIZAR";
    }
    else{
        var btn1 = document.createElement("button");
        btn1.classList.add("boton","btn","btn-sm", "col-3");
        btn1.setAttribute("id","btn1");
        btn1.setAttribute("type", "submit");
        btn1.setAttribute("style","float: right;");
        btn1.innerHTML = "FINALIZAR";
        document.getElementById("botones").appendChild(btn1);
    }
    imagen.parentElement.removeChild(imagen);
    texto.classList.remove('col-6', 'float-right');
    if(victoria){
        texto.innerHTML = "Gracias a tu maestría y liderazgo de tropas has encaminado a la flota hacia la victoria. Eres todo un estratega!!!";
        alert("Felicidades, has completado el enigma con éxito!! pulsa FINALIZAR para terminar");
    
    }
    else{
        texto.innerHTML = "La batalla es inminente y tus suporiores no pueden esperar mas, Has demostrado no estar a la altura del un puesto para el que, con toda seguridad, no estabas preparado."
        alert("Se te ha acabado el tiempo, pulsa FINALIZAR para terminar");
    }
}