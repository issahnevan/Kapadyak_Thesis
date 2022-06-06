function displayNext() {
    var layer1 = document.getElementById("register-layer1");
    var layer2 = document.getElementById("register-layer2");
    
    var layer1_display = window.getComputedStyle(layer1).display;
    var layer2_display = window.getComputedStyle(layer2).display;

    if(layer1_display != "none" && layer2_display == "none"){
        layer1.style.display = "none";
        layer2.style.display = "grid";
    } else if(layer1_display == "none" && layer2_display != "none"){
        layer1.style.display = "grid";
        layer2.style.display = "none";
    }
  }