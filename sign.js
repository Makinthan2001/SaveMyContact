var signin=document.querySelector(".signin")
var signup=document.querySelector(".signup")
var overlay=document.querySelector(".overlay")

function MoveToSignUp(){
    overlay.style="display:block"
    signup.style="display:block"
    signin.style="display:none"
}
function MoveToSignIn(){
    overlay.style="display:none"
    signup.style="display:none"
    signin.style="display:block"
}


function validation(){
    var inemail=document.getElementById("inemail")
    var inpassword=document.getElementById("inpassword")
    var upname=document.getElementById("upname")
    var upemail=document.getElementById("upemail")
    var uppassword=document.getElementById("uppassword")
    var upc_password=document.getElementById("upc_password")

    var isvalid=true

    if(inemail.value==""){
        inemail.closest(".form-group").querySelector(".error").textContent="Email Can't be Empty"
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
    }else{
        inpassword.closest(".form-group").querySelector(".error").textContent=""
        inpassword.style.border="1px solid green"
    }
    
    return isvalid
}

