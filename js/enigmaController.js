function mostrarEnigmas(){
    enigmas = document.getElementsByClassName("enigma");

    Array.prototype.forEach.call(enigmas,function(enigma) {
        if (piece.getAttribute("enigma") == getCookie("pTPE")){
            
            enigma.style.display = "block";
        }
        else{
            enigma.style.display = "none";
        }

    });  

}