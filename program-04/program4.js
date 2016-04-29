"use strict";
var req1_x = function (theId) {

    var d = new Date();
    return document.getElementById(theId).innerHTML = d;


}


function req2_colorChange(color) {
    var value = color.value;
    return document.getElementById('dateDisplay').style.color = value;
}

function req3_cookieCheck() {
    var user = document.cookie;
    if (user != "") {
        document.getElementById("result3").innerHTML = "Welcome back " + user;
    } else {
        user = prompt("Enter your name:", "");
        if (user != "" && user != null) {
            document.cookie = user;
            document.getElementById("result3").innerHTML = "cookie set.";
        }
    }
}

var req4_closure = (function () {
    var clickNumber = 0;
    return function () {
        clickNumber += 1;
        var res4 = parseFloat(Math.floor(Math.random() * 100) + 1);
        return document.getElementById("result4").innerHTML = "Number of Clicks: " +
            clickNumber + "<br/>Random Number:  " + res4;
    }

})();

function req5_toggle(elemP){
     var kippies = document.getElementById("ptags").children;
        for(var i = 0; i < kippies.length; i ++){
        kippies[i].className = "petIpsum";
    }
    elemP.className = "petIpsumOff";
}

function req6_changeFont(){
    var kippies = document.getElementById("ptags").children;
    for(var i = 0; i < kippies.length; i ++){
        kippies[i].style.fontSize = "8px";
        kippies[i].style.fontFamily = "cursive";

    }

}

function req7_showMeItAll() {

var req7Obj = document.querySelectorAll('*');
var res7 = "";
    for (var i= 0; i < req7Obj.length; i++) {
        res7 += req7Obj[i].innerHTML + "; ";
    }
    //console.log(res7);
document.getElementById("result7").innerHTML=res7;
}



function req8_tableFill(elemS) {
    var id = elemS.value;
    var tdata = document.getElementById('req8image').selectedIndex;
    var tdataimage = document.getElementsByClassName('req8')[tdata].value;
    var existingImage = document.getElementById('showingimage');
    if(existingImage) {
        var parent = existingImage.parentElement;
        parent.removeChild(existingImage);
    }
    document.getElementById(id).innerHTML += "<img id='showingimage' style='height:200px' src='images/" + tdataimage + ".jpg'>";
}

function startWebWorker() {
    if (window.Worker) {

        var myWorker = new Worker("busyBee.js");
        myWorker.onmessage = function (event) {
          //  console.log(event.data);
            document.getElementById("result9a").innerHTML = event.data;
        };

    } else {
        throw 'Your browser is not compatible';
    }
}


function req10_visibility() {
    document.getElementById("result9a").classList.toggle("req9ClassOutputAlt");
    }

function req13_pCreate() {
    var myDiv = document.getElementById("req13Div");
    var x = document.createElement("P");
    myDiv.appendChild(x);
    var textnode = document.createTextNode("I've just been created!");
    x.appendChild(textnode);
}

function req14_totalP(){
    var allElem = document.getElementsByTagName('P');
    var totalElem = allElem.length;
    document.getElementById('result14').innerHTML = "There are " + totalElem + " paragraph elements on this page.";

}





