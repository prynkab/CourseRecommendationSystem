function validate(){
    var Fname = document.getElementById("fname").value;
    var Lname = document.getElementById("lname").value;
    var phone = document.getElementById("phone").value;
    var email = document.getElementById("email").value;
    var password1 = document.getElementById("Password1").value;
    var password2 = document.getElementById("Password2").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "10px";
    
    var text;
    if(Fname.length < 5){
      text = "Please Enter valid First Name";
      error_message.innerHTML = text;
      return false;
    }
    if(Lname.length < 5){
      text = "Please Enter valid Last Name";
      error_message.innerHTML = text;
      return false;
    }
    if(isNaN(phone) || phone.length != 10){
      text = "Please Enter valid Phone Number";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") == -1 || email.length < 6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if(password1 != password2){
      text = "Password does not match";
      error_message.innerHTML = text;
      return false;
    }
    alert("Registered Successfully!");
    return true;
  }