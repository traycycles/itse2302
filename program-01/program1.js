/**
 * Created by Tracy on 1/24/2016.
 */

function lightbulbOnOff_require1(){
    var image = document.getElementById('Lightbulb');
    if (image.src.match("bulbon")) {
        image.src = "images/pic_bulboff.gif";
    }else{
        image.src = "images/pic_bulbon.gif";
    }
}

function displayDate_require1(){
    var d = new Date();
    document.getElementById('belowBulb').innerHTML = d;
}

function changeSize_require2(sizename){
    document.getElementById('Lightbulb').className=sizename;
}

function clearPage_require3(){
    var body = document.body;
    body.innerHTML = "";
    body.style.backgroundColor="red";
    body.innerHTML ="Page Cleared. <a href='../program-01/index.html'>go back</a>";
}

function changeText_require4(){
    var paragraph = document.getElementById("req4");
    paragraph.style.color = "blue";
    paragraph.style.fontSize ="30px";
    console.log(paragraph.innerHTML);
}
function getLocation_require5() {
    var x = document.getElementById("location");
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition_require5);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition_require5(position) {
    var x = document.getElementById("location");
    x.innerHTML = "Latitude: " + position.coords.latitude +
        "<br>Longitude: " + position.coords.longitude;
}

function require6(){
    var num1 = parseInt(document.getElementById("firstnumber").value);
    var num2 = parseInt(document.getElementById("secondnumber").value);

    var addup = "Added: " +(num1 + num2);
    var subup = "Subracted: " + (num1 - num2);
    var multup = "Multiplied: " + (num1 * num2);
    var divup = "Divided: " + (num1 / num2);
    document.getElementById("labeladd").innerHTML = addup;
    document.getElementById("labelsub").innerHTML = subup;
    document.getElementById("labelmult").innerHTML = multup;
    document.getElementById("labeldiv").innerHTML = divup;
}
function require7(){
    var strnum1 = document.getElementById("num1").value;
    var strnum2 = document.getElementById("num2").value;

    document.getElementById("stradd").innerHTML = "Added together makes " + (strnum1 + strnum2);
}

function require8(){
    var input1 = parseInt(document.getElementById("n1").value);
    var odd_or_even = input1 % 2;
    var image = document.getElementById("rollem");
    if(odd_or_even == 0){
         image.src="images/even_die.jpg" ;
    }else{
        image.src="images/odd_die.jpg" ;
    }
}

function require9(){
    var input1 = parseInt(document.getElementById("numb").value);

    if(document.getElementById("addone").checked== true){
        input1+= 1;
    }if(document.getElementById("subone").checked== true){
        input1 -=1;
    }
    document.getElementById("funnum").innerHTML = "Your number is now: " + input1;

}

function require10() {
    var nameselected = document.getElementById("nameselect").value;
    document.getElementById("mynames").innerHTML = nameselected;

    console.log(nameselected);
    if(nameselected == "Name 1"){
        document.getElementById("mynames").style.color="red";
    }else if(nameselected == "Name 2"){
        document.getElementById("mynames").style.color="blue";
    }else if(nameselected == "Name 3"){
        document.getElementById("mynames").style.color="green";
    }else if(nameselected == "Name 4"){
        document.getElementById("mynames").style.color="purple";
    }


}

function allowDrop_require11(ev) {
    ev.preventDefault();
}

function drag_require11(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop_require11(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");

    ev.target.appendChild(document.getElementById(data));
    console.log("meow");

}
function colorChange(){
    document.getElementById("lastdamnrequirement").style.backgroundColor="#221500"
}
function backToNormal(){
    document.getElementById("lastdamnrequirement").style.backgroundColor="#ffffff"
}
