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
    const pass = document.getElementById("Password");
    const confirmpass = document.getElementById("ConfirmPassword");

    var passval = document.getElementById("Password").value;
    var confirmpassval = document.getElementById("ConfirmPassword").value;

    if(passval!= "" && confirmpassval != ""){
        if(passval != confirmpassval){
            alert("Passwords does not have the same value!");
            confirmpass.focus();
        }
    }
}