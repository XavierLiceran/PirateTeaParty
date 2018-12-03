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
    $('#loginModal').modal('hide');
    $('#registerModal').modal('show');
}

//Register que abre la ventana modal de Login
function openLogin() {
    $('#registerModal').modal('hide');
    $('#loginModal').modal('show');
}

//Función que valida la psw
function isValidPsw(){
    var psw = document.getElementById("passwordInput").value;

    if(psw.length < 6){

        var pswDiv = document.getElementById("pswDiv").className;
        var pswInput = document.getElementById("passwordInput").className;
        
        pswDiv += "has-danger";
        pswInput += "is-invalid";
        
        newDiv.setAttribute("class", "invalid-feedback");
        var text = document.createTextNode("Passwords doesn't match!");

        newDiv.appendChild(text);
        pswDiv.appendChild(newDiv);
    }
}

//Función que valida que la psw repetida sea idéntica a la principal
function isSamePsw(){
    var psw = document.getElementById("passwordInput").value;
    var psw2 = document.getElementById("repeatPasswordInput").value;
    var pswDiv = document.getElementById("repeatPswDiv").className;
    var pswInput = document.getElementById("repeatPasswordInput").className;

    var newDiv = document.createElement("div");
    newDiv.setAttribute("id", "newRepeatPswDiv");

    if(psw === psw2){
        pswDiv += "has-success";
        pswInput += "is-valid";
        
        newDiv.setAttribute("class", "valid-feedback");
        var text = document.createTextNode("Passwords match!");
    } else {
        pswDiv += "has-danger";
        pswInput += "is-invalid";
        
        newDiv.setAttribute("class", "invalid-feedback");
        var text = document.createTextNode("Passwords doesn't match!");
    }

    newDiv.appendChild(text);
    pswDiv.appendChild(newDiv);
}

//Función para validar el mail
function validateEmail(email) {
    var re = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
    return re.test(email);
}

//Función que cambiará el feedback al usuario dependiendo de lo que haya escrito en Email
function validate() {
    var email = document.getElementById("email").value;
    var emailDiv = document.getElementById("emailDiv").className;
    var emailInput = document.getElementById("email").className;

    var newDiv = document.createElement("div");
    newDiv.setAttribute("id", "newMailDiv");

    if (validateEmail(email)) {
        emailDiv += "has-success";
        emailInput += "is-valid";
        
        newDiv.setAttribute("class", "valid-feedback");
        var text = document.createTextNode("Invalid Email!!");
    } else {
        emailDiv += "has-danger";
        emailInput += "is-invalid";

        newDiv.setAttribute("class", "invalid-feedback");
        var text = document.createTextNode("Valid Email!!");
    }

    newDiv.appendChild(text);
    emailDiv.appendChild(newDiv);
    return false;
}