window.onload = function() {
    enigmas = document.getElementsByClassName("enigma");

    Array.prototype.forEach.call(enigmas,function(enigma) {
        if (enigma.getAttribute("enigma") == getCookie("pTPE")){
            
            enigma.style.display = "block";
        }
        else{
            enigma.style.display = "none";
        }

    });
};


function redirigir(ruta){
    window.location.replace("http://localhost:8080/pirateteaparty/" + ruta);
}