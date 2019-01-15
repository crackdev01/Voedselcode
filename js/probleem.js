// start slideshow

var imageArray = [];
var imageIndex = 0;
var sliderTime = 4000;

imageArray[0] = "images/waste.jpg"
imageArray[1] = "images/waste1.jpg"
imageArray[2] = "images/waste2.jpg"
imageArray[3] = "images/waste3.jpg"

function slideNext() {
    document.waste.src = imageArray[imageIndex];
    if (imageIndex < imageArray.length -1) {
        imageIndex++;
    }
    else {
        imageIndex = 0;
    }
    if (imageIndex === 0) {
        document.getElementById("text1").innerHTML="Wanneer is genoeg genoeg?";
        document.getElementById("text1").style.margin = "-10rem 0 0 -24rem"
        
    }
    if (imageIndex === 1) {
        document.getElementById("text1").innerHTML="Geven we dit aan onze kinderen mee?";
        document.getElementById("text1").style.margin = "-10rem 0 0 -24rem"
    }
    if (imageIndex === 2) {
        document.getElementById("text1").innerHTML="40 kilo voedselverspilling per persoon per jaar";
        document.getElementById("text1").style.margin = "10rem 0 0 24rem"
    }
    if (imageIndex === 3) {
        document.getElementById("text1").innerHTML="De tijd van wachten is voorbij";
        document.getElementById("text1").style.margin = "10rem 0 0 -24rem"
    }

    setTimeout("slideNext()", sliderTime)
}
window.onload=slideNext;

