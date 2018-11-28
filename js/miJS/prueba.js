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

function openRegister() {
    $('#registerModal').modal('show');
    $('#loginModal').modal('hide');
}

function openLogin() {
    $('#loginModal').modal('show');
    $('#registerModal').modal('hide');
}