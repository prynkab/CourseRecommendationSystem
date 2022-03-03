function validate_register(){
    var fname= document.getElementById("fname").value;
    var lname= document.getElementById("lname").value;
    var register_email= document.getElementById("register_email").value;
    var error_message= document.getElementById("error_message");

    var regname= /^[a-zA-Z]+[a-zA-Z]+$/;
    var text;
    if (fname.length <2 || !regname.test(fname)){
        text="Please Enter Valid First Name";
        error_message.innerHTML = text;
        return false;
    }
    else if(lname.length<2 || !regname.test(lname)){
        text="Please Enter Valid Last Name";
        error_message.innerHTML=text;
        return false;
    }
    else if(register_email.indexOf("@")==-1 || register_email.length<5){
        text="Please Enter Valid Email";
        error_message.innerHTML=text;
        return false;
    }
    else{
        alert("Submitted Successfully");
        return true;
    }
}