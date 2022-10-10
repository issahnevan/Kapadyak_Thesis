function displaySecond() {
    const layer1 = document.getElementById("register-layer1");
    const layer2 = document.getElementById("register-layer2");
    const layer3 = document.getElementById("register-layer3");
    const btn1 = document.getElementById("btnStep1");
    const btn2 = document.getElementById("btnStep2");
    const btn3 = document.getElementById("btnStep3");

    layer1.style.display = "none";
    layer2.style.display = "grid";
    layer3.style.display = "none";

    btn1.style.display = "none";
    btn2.style.display = "block";
    btn3.style.display = "none";
  }

function displayThird(){
    const layer1 = document.getElementById("register-layer1");
    const layer2 = document.getElementById("register-layer2");
    const layer3 = document.getElementById("register-layer3");
    const btn1 = document.getElementById("btnStep1");
    const btn2 = document.getElementById("btnStep2");
    const btn3 = document.getElementById("btnStep3");

    layer1.style.display = "none";
    layer2.style.display = "none";
    layer3.style.display = "grid";

    btn1.style.display = "none";
    btn2.style.display = "none";
    btn3.style.display = "block";
}

function success(){
    alert("Registration Success! You may now login.");
}

function checkPassword(){
    var pass = document.getElementById("password");
    var confirmpass = document.getElementById("confirmPassword");
    var passwordStrength = document.getElementById("password-strength");

    var passval = document.getElementById("password").value;
    var confirmpassval = document.getElementById("confirmPassword").value;

    if(confirmpass.value != ""){
        if(pass.value != confirmpass.value){
            alert("Password does not match!");
            confirmpass.value = "";
            confirmpass.focus();
        }
        else if(passwordStrength.style.width != "100%"){
            alert("Password must meet complexity requirements!");
            confirmpass.value = ""; 
            pass.focus();
        } 
    } else{
        alert("Password must not be empty!");
        setTimeout(function(){
            confirmpass.focus();
        },0);
    }
}

function showChecklist(){
    document.getElementById("progress-req").style.display = "block";
}

function showPassword(){
    var passval = document.getElementById("password");

    if(passval.type === "password"){
        passval.type = "text";
    } else {
        passval.type = "password";
    }
}

function showConfirmPassword(){
    var confirmpassval = document.getElementById("confirmPassword");

    if(confirmpassval.type === "password"){
        confirmpassval.type = "text";
    } else {
        confirmpassval.type = "password";
    }
}

function showBothPassword(){
    var passval = document.getElementById("password");
    var confirmpassval = document.getElementById("confirmPassword");
    if(passval.type === "password"){
        passval.type = "text";
        confirmpassval.type = "text";
    } else {
        confirmpassval.type = "password";
        passval.type = "password";
    }
}