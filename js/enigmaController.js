window.onload = function() {
    console.log("hola");
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