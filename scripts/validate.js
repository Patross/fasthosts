let firstName = document.getElementById("firstName");
let email = document.getElementById("email");
let domain = document.getElementById("domain");
let submit = document.getElementById("submit");

firstName.addEventListener("blur",function(){
    validate(firstName);
})

email.addEventListener("blur",function(){
    validate(email);
})

domain.addEventListener("blur",function(){
    validate(domain);
})

submit.addEventListener("click",function(){ //checks if everything is valid once again if yes the proceeds.
    validate(firstName);
    !valid?event.preventDefault():null; 
    validate(email);
    !valid?event.preventDefault():null;
    validate(domain);
    !valid?event.preventDefault():null;
})
let valid;
function setValid(param){
    param.removeAttribute("class","invalid");
    valid = true;
}
function setInvalid(param){
    param.setAttribute("class","invalid");
    valid = false;
}


//VALIDATING HERE YO
function validate(param){
    if (param==email) {
        let regExp = /\S+@\S+\.\S+/;
        //checks if len and regexp are valid
        !regExp.test(param.value) || param.value.length ==0?setInvalid(param):setValid(param);
    }else{
        //len = 0 = invalid else valid 
         param.value.length ==0?setInvalid(param):setValid(param);
    }
}