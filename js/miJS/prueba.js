//alert('Yo entro');

// //Modals
// var loginModal = document.getElementById('loginModal');
// var registerModal = document.getElementById('registerModal');

// //Btns
// var openLoginBtn = document.getElementById('openLoginBtn');
//var openRegisterBtn = document.getElementById('openRegisterBtn');

//Functions
// openLoginBtn.onclick = function() {
//     if(registerModal.style.display == "block"){
//         registerModal.style.display = "none";
//     }
//     loginModal.style.display = "block";
// }

//Funcion que abre la ventana modal Register
function openRegister() {
    $('#registerModal').modal('show');
    $('#loginModal').modal('hide');
}

//Register que abre la ventana modal de Login
function openLogin() {
    $('#loginModal').modal('show');
    $('#registerModal').modal('hide');
}

//Función que valida la psw
function isValidPsw(){
    var psw = document.getElementById("passwordInput").value;
    if(psw.length > 6){
        
    }
}

//Función que valida que la psw repetida sea idéntica a la principal
function isSamePsw(){
    var psw = document.getElementById("email").value;
    var psw2 = document.getElementById("repeatPasswordInput").value;

    if(psw == psw2){
        
    } else {
        
    }
}

//Función para validar el mail
function validateEmail(email) {
    var re = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
    return re.test(email);
}

//Función que cambiará el feedback al usuario dependiendo
function validate() {
    var $result = $("#result");
    var email = document.getElementById("email").value;
    $result.text("");
  
    if (validateEmail(email)) {
      

    } else {
      
    }
    return false;
}