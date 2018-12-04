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
    var child = document.getElementById("pswFeedback");

    if(typeof(child)!= 'undefined' && child != null){
        document.getElementById("pswDiv").removeChild(child);
    }

    if(psw.length < 6){

        document.getElementById("pswDiv").className = "form-group has-danger";
        document.getElementById("passwordInput").className = "form-control is-invalid";
        
        var newDiv = document.createElement("div");
        newDiv.setAttribute("id", "pswFeedback");
        newDiv.setAttribute("class", "invalid-feedback");
        var text = document.createTextNode("Password is less than 6 characters!");

        newDiv.appendChild(text);
        document.getElementById("pswDiv").appendChild(newDiv);
    } else {

        document.getElementById("pswDiv").className = "form-group has-success";
        document.getElementById("passwordInput").className = "form-control is-valid";

        var newDiv = document.createElement("div");
        newDiv.setAttribute("id", "pswFeedback");
        newDiv.setAttribute("class", "valid-feedback");
        var text = document.createTextNode("Password is strong!");

        newDiv.appendChild(text);
        document.getElementById("pswDiv").appendChild(newDiv);
    }
}

//Función que valida que la psw repetida sea idéntica a la principal
function isSamePsw(){
    var psw = document.getElementById("passwordInput").value;
    var psw2 = document.getElementById("repeatPasswordInput").value;
    var pswDiv = document.getElementById("repeatPswDiv").className;
    var pswInput = document.getElementById("repeatPasswordInput").className;

    var child = document.getElementById("newRepeatPswDiv");

    if(typeof(child)!= 'undefined' && child != null){
        document.getElementById("repeatPswDiv").removeChild(child);
    }

    var newDiv = document.createElement("div");
    newDiv.setAttribute("id", "newRepeatPswDiv");

    if(psw === psw2){
        document.getElementById("repeatPswDiv").className = "form-group has-success";
        document.getElementById("repeatPasswordInput").className = "form-control is-valid";
        
        newDiv.setAttribute("class", "valid-feedback");
        var text = document.createTextNode("Passwords match!");
    } else {
        document.getElementById("repeatPswDiv").className = "form-group has-danger";
        document.getElementById("repeatPasswordInput").className = "form-control is-invalid";
        
        newDiv.setAttribute("class", "invalid-feedback");
        var text = document.createTextNode("Passwords doesn't match!");
    }

    newDiv.appendChild(text);
    document.getElementById("repeatPswDiv").appendChild(newDiv);
}

//Función para validar el mail
function validateEmail(email) {
    // var re = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
    // var patt = new RegExp(re);
    if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)){
        return true;
    }else {
        return false;
    }
}

//Función que cambiará el feedback al usuario dependiendo de lo que haya escrito en Email
function validate() {
    var email = document.getElementById("email").value;
    var emailDiv = document.getElementById("emailDiv").className;
    var emailInput = document.getElementById("email").className;
    var child = document.getElementById("newMailDiv");

    if(typeof(child)!= 'undefined' && child != null){
        document.getElementById("emailDiv").removeChild(child);
    }

    var newDiv = document.createElement("div");
    newDiv.setAttribute("id", "newMailDiv");

    if (validateEmail(email)) {
        emailDiv = "form-group has-success";
        emailInput = "form-control is-valid";
        
        newDiv.setAttribute("class", "valid-feedback");
        var text = document.createTextNode("Valid Email!!");
    } else {
        emailDiv = "form-group  has-danger";
        emailInput = "form-control is-invalid";

        newDiv.setAttribute("class", "invalid-feedback");
        var text = document.createTextNode("Invalid Email!!");
    }
    document.getElementById("emailDiv").className = emailDiv;
    document.getElementById("email").className = emailInput;
    newDiv.appendChild(text);
    document.getElementById("emailDiv").appendChild(newDiv);
    return false;
}