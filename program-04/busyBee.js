
var counter = 0;
function showImages() {
    var interval = setInterval(function () {
        if (counter > 3) {
            clearInterval(interval);
        }
        var imageArray = ["images/odd_die.jpg", "images/angry_cat_ur_mama.jpg", "images/even_die.jpg", "images/pic_bulbon.jpg", "images/pic_bulboff.jpg"];

         var i="<img src='" + imageArray[counter] + "' style='width:200px'>";
        postMessage(i);
        counter++;
    }, 3000);
}
showImages();
