var signin=document.querySelector(".signin")
var signup=document.querySelector(".signup")
var overlay=document.querySelector(".overlay")

function MoveToSignUp(){
    overlay.style="display:block"
    signup.style="display:block"
    signin.style="display:none"
    previous_error_clear()
}
function MoveToSignIn(){
    overlay.style="display:none"
    signup.style="display:none"
    signin.style="display:block"
    previous_error_clear()
}


function validation_signin(){
    var inemail=document.getElementById("inemail")
    var inpassword=document.getElementById("inpassword")

    var isvalid=true
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,63}$/;
    if(inemail.value==""){
        inemail.closest(".form-group").querySelector(".error").textContent="Email Can't be Empty"
        inemail.style.border="1px solid red"
        isvalid=false
    }
    else if(!emailPattern.test(inemail.value.trim())){
        inemail.closest(".form-group").querySelector(".error").textContent="Enter Valid Email"
        inemail.style.border="1px solid red"
        isvalid=false
    }else{
        inemail.closest(".form-group").querySelector(".error").textContent=""
        inemail.style.border="1px solid green"
    }

    if(inpassword.value==""){
        inpassword.closest(".form-group").querySelector(".error").textContent="Password Can't be Empty"
        inpassword.style.border="1px solid red"
        isvalid=false
    }
    else if(inpassword.value.length<8 || inpassword.value.length>15){
        inpassword.closest(".form-group").querySelector(".error").textContent="Password length should be from 7 to 15 digits"
        inpassword.style.border="1px solid red"
        isvalid=false
    }
    else{
        inpassword.closest(".form-group").querySelector(".error").textContent=""
        inpassword.style.border="1px solid green"
    }
    
    return isvalid
}

function validation_signup(){
    var upname=document.getElementById("upname")
    var upemail=document.getElementById("upemail")
    var uppassword=document.getElementById("uppassword")
    var upc_password=document.getElementById("upc_password")

    var isvalid=true

    if(upname.value==""){
        upname.closest(".form-group").querySelector(".error").textContent="Name Can't be Empty"
        upname.style.border="1px solid red"
        isvalid=false
    }else{
        upname.closest(".form-group").querySelector(".error").textContent=""
        upname.style.border="1px solid green"
    }

    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,63}$/;
    if(upemail.value==""){
        upemail.closest(".form-group").querySelector(".error").textContent="Email Can't be Empty"
        upemail.style.border="1px solid red"
        isvalid=false
    }
    else if(!emailPattern.test(upemail.value.trim())){
        upemail.closest(".form-group").querySelector(".error").textContent="Enter Valid Email"
        upemail.style.border="1px solid red"
        isvalid=false
    }else{
        upemail.closest(".form-group").querySelector(".error").textContent=""
        upemail.style.border="1px solid green"
    }

    if(uppassword.value==""){
        uppassword.closest(".form-group").querySelector(".error").textContent="Password Can't be Empty"
        uppassword.style.border="1px solid red"
        isvalid=false
    }
    else if(uppassword.value.trim().length<8 || uppassword.value.trim().length>15){
        uppassword.closest(".form-group").querySelector(".error").textContent="Password length should be from 7 to 15 digits"
        uppassword.style.border="1px solid red"
        isvalid=false
    }
    else{
        uppassword.closest(".form-group").querySelector(".error").textContent=""
        uppassword.style.border="1px solid green"
    }

    if(upc_password.value==""){
        upc_password.closest(".form-group").querySelector(".error").textContent="Password Can't be Empty"
        upc_password.style.border="1px solid red"
        isvalid=false
    }
    else if(uppassword.value.trim() != upc_password.value.trim()){
        upc_password.closest(".form-group").querySelector(".error").textContent="Psswords don't match"
        upc_password.style.border="1px solid red"
        isvalid=false
    }
    else{
        upc_password.closest(".form-group").querySelector(".error").textContent=""
        upc_password.style.border="1px solid green"
    }
    
    return isvalid
}

function previous_error_clear(){
    inemail.value=""
    inpassword.value=""
    upname.value=""
    upemail.value=""
    uppassword.value=""
    upc_password.value=""
    inemail.closest(".form-group").querySelector(".error").textContent = ""
    inemail.style.border = ""
    inpassword.closest(".form-group").querySelector(".error").textContent = ""
    inpassword.style.border = ""
    upname.closest(".form-group").querySelector(".error").textContent = ""
    upname.style.border = ""
    upemail.closest(".form-group").querySelector(".error").textContent = ""
    upemail.style.border = ""
    uppassword.closest(".form-group").querySelector(".error").textContent = ""
    uppassword.style.border = ""
    upc_password.closest(".form-group").querySelector(".error").textContent = ""
    upc_password.style.border = ""
}

function togglePassword(id, iconId) {
    const field = document.getElementById(id);
    const icon = document.getElementById(iconId);
    if (field.type === "password") {
        field.type = "text";
        icon.classList.remove("bi-eye-slash-fill");
        icon.classList.add("bi-eye-fill");
    } else {
        field.type = "password";
        icon.classList.remove("bi-eye-fill");
        icon.classList.add("bi-eye-slash-fill");
    }
}

