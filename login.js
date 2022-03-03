function validate_login(){
    var login_email= document.getElementById("login_email").value;
    var login_password=document.getElementById("login_password").value;
    var error_message=document.getElementById("error_message");

    error_message.style.padding= "10px";
    var text;
    if(login_email.indexOf("@")==-1 || login_email.length<5){
        text="Please Enter Valid Email";
        error_message.innerHTML=text;
        return false;
    }
    else if(login_password.length<5){
        text="Please Enter Valid Password";
        error_message.innerHTML=text;
        return false;
    }
    else{
        alert("Login In Successfull!");
        return true;
    }
}