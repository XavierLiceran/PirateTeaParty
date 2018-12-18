
function nextCard(){
    cardNumber++;
    var texto = document.getElementById("text");
    var imagen = document.getElementById("imagen");
    buttons(true);
    texto.innerHTML = text[cardNumber];
    imagen.setAttribute("src", img[cardNumber]); 


    

}
function previousCard(){
    cardNumber--;
    var texto = document.getElementById("text");
    var imagen = document.getElementById("imagen");
    buttons(false);
    texto.innerHTML = text[cardNumber];
    imagen.setAttribute("src", img[cardNumber]); 

    
}

function buttons(next){
    var botones = document.getElementById("botones");
    if(cardNumber === 0 && document.getElementById("btn2")){        
        botones.removeChild(document.getElementById("btn2"));
    }
    else if (next && !document.getElementById("btn2") && cardNumber < 5){
        var btn2 = document.createElement("button");
        btn2.classList.add("btn", "col-3");
        btn2.setAttribute("onclick","previousCard()");
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
    else if(!next && cardNumber === 4){
        if(empezado){
            var btn1 = document.createElement("button");
            btn1.classList.add("btn", "col-3");
            btn1.setAttribute("onclick","nextCard()");
            btn1.setAttribute("id","btn1");
            btn1.setAttribute("style","float: right;");
            btn1.innerHTML = "Siguiente";
            botones.appendChild(btn2);
        }
        else{
            var btn1 = document.getElementById("btn1");
            btn1.setAttribute("onclick","nextCard()");
            btn1.innerHTML = "Siguiente";
        } 
    }

}
function startGame(){

}
function endGame(){

}