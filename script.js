var _overlay=document.querySelector(".overlay")
var _popup_box=document.querySelector(".popup-box")
var _are_you_sure=document.querySelector(".are-you-sure")
var main_box=document.getElementById("main-box")
var in_name=document.getElementById("in_name")
var in_pnum=document.getElementById("in_pnum")
var in_email=document.getElementById("in_email")
var in_address=document.getElementById("in_address")

function show(){
    _overlay.style.display="block"
    _popup_box.style.display="block"
    previous_error_clear()
}
function cancel(){
    _overlay.style.display="none"
    _popup_box.style.display="none"
}
function save(){
    if(!validation()){
        return;
    }
    if (in_address.value == "") {
        isvalid = false;
        in_address.value = "Empty";
    }
    if (in_email.value == "") {
        isvalid = false;
        in_email.value = "Empty";
    }

    var box=document.createElement("div")
    box.className="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 col-xxl-3 my-3"

    box.innerHTML=`<div class="card shadow ">
                    <div class="card-body">
                        <button onclick="show_are_you_sure(this)" class=" delete-button btn btn-lg position-absolute top-0 end-0 m-2">
                            <i class="fa-sharp fa-solid fa-trash"></i>
                        </button>
                        <h4>Name:</h4>
                        <p>${in_name.value}</p><hr>
                        <h4>Phone Number:</h4>
                        <p>${in_pnum.value}</p><hr>
                        <h4>Email:</h4>
                        <p>${in_email.value}</p><hr>
                        <h4>Address:</h4>
                        <p>${in_address.value}</p><hr></hr>
                    </div>
                </div>`
    main_box.append(box)

    previous_error_clear()

    cancel()
}
var YesToDelete=null
function show_are_you_sure(button){
    _are_you_sure.style.display="block"
    _overlay.style.display = "block";
    YesToDelete = button.closest(".col-12");
}
function hide_are_you_sure(){
    _overlay.style.display="none"
    _are_you_sure.style.display="none"
}
function delete_yes(){
    if (YesToDelete) {
        YesToDelete.remove();
        YesToDelete = null;
    }
    _are_you_sure.style.display = "none";
    _overlay.style.display = "none";
}

function validation(){
    var isvalid=true;

    if(in_name.value==""){
        in_name.closest(".form-group").querySelector(".error").textContent="Name can not empty"
        in_name.style.border = "1px solid red";
        isvalid=false;
    }else{
        in_name.style.border = "1px solid green";
        in_name.closest(".form-group").querySelector(".error").textContent=""

    }

    if(in_pnum.value==""){
        in_pnum.closest(".form-group").querySelector(".error").textContent="PhoneNumber can not empty"
        in_pnum.style.border = "1px solid red";
        isvalid=false;
    }
    else if(in_pnum.value.length < 7 || in_pnum.value.length > 15){
        in_pnum.closest(".form-group").querySelector(".error").textContent="Phone number length should be from 7 to 15 digits"
        in_pnum.style.border = "1px solid red";
        isvalid=false;
    }
    else{
        in_pnum.style.border = "1px solid green";
        in_pnum.closest(".form-group").querySelector(".error").textContent=""

    }

    if(!in_email.value==""){
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if(!emailPattern.test(in_email.value)){
            in_email.closest(".form-group").querySelector(".error").textContent="Enter Valid Email"
            in_email.style.border = "1px solid red";
            isvalid=false;
        }else{
            in_email.style.border = "1px solid green";
        }
    }
    return isvalid
}
function previous_error_clear(){
    in_name.value=""
    in_pnum.value=""
    in_email.value=""
    in_address.value=""
    in_name.closest(".form-group").querySelector(".error").textContent = ""
    in_name.style.border = ""
    in_pnum.closest(".form-group").querySelector(".error").textContent = ""
    in_pnum.style.border = ""
    in_email.closest(".form-group").querySelector(".error").textContent = ""
    in_email.style.border = ""
}
          


// ===== SEARCH FUNCTIONALITY ===== //
document.getElementById("searchForm").addEventListener("submit", function(e) {
    e.preventDefault();
    searchContacts();
});

document.getElementById("searchInput").addEventListener("input", searchContacts);

function searchContacts() {
    const searchText = document.getElementById("searchInput").value.toLowerCase();
    const contactContainers = document.querySelectorAll("#main-box > div");
    
    contactContainers.forEach(container => {
        const card = container.querySelector(".card");
        const name = card.querySelector("p").textContent.toLowerCase();
        const phone = card.querySelectorAll("p")[1].textContent.toLowerCase();
        const email = card.querySelectorAll("p")[2].textContent.toLowerCase();
        
        if (name.includes(searchText) || phone.includes(searchText) || email.includes(searchText)) {
            container.style.display = "block";
        } else {
            container.style.display = "none";
        }
    });
}

// ===== SAVE BUTTON HANDLER ===== //
document.getElementById("saveButton").addEventListener("click", function(e) {
    e.preventDefault();
    if(validation()) {
        document.forms[0].submit();
    }
});