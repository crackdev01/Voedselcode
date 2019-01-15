function myFunction() {
    var colon = document.getElementById("colon");
    var showImg = document.getElementById("showImg");
    var buttonText = document.getElementById("myButton");
  
    if (colon.style.display === "none") {
      colon.style.display = "inline";
      buttonText.innerHTML = "Klik voor Cirkeldiagram"; 
      showImg.style.display = "none";
    } else {
      colon.style.display = "none";
      buttonText.innerHTML = "Verberg Cirkeldiagram"; 
      showImg.style.display = "inline";
    }
  }