/**
 * Created by tracy on 3/24/16.
 */


//requirement #2

function cookieStatus(){
    document.getElementById("req2_paragraph2").innerHTML=
        "Cookies enabled is " + navigator.cookieEnabled;
}
function javaStatus(){
    document.getElementById("req2_paragraph2").innerHTML+=
        "/Java enabled is "+navigator.javaEnabled();
}

function goBack(){
    window.history.back()
}
function goForward(){
    window.history.forward()
}




//requirement #3
function changeitNow() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            myXML(xhttp)
        }
    };
    xhttp.open("GET", "divcolors.xml", true);
    xhttp.send();

    function myXML(xml) {
        var xmlDoc = xml.responseXML;
        //document.getElementById("rightHere").innerHTML =
        //   xmlDoc.getElementsByTagName("color1")[0].childNodes[0].nodeValue; //'blue'

        for (var i = 0; i < 20; i++) {
            document.getElementById("div" + (i+1)).style.backgroundColor=
                xmlDoc.getElementsByTagName("color" + (i+1))[0].childNodes[0].nodeValue;//'green'
        }
    }
}

//requirement #4

function makeRandomColor(){
    var hex='0123456789ABCDEF'.split('');
    var color='#';
    while (color.length < 7) {
        color += hex[Math.floor(Math.random() * 16)];
    }
    return color;
}

function colorEachDiv(){
    for(var i = 0; i < 20; i++) {
        document.getElementById("div" + (i + 1)).style.backgroundColor = makeRandomColor();
    }
}

var intervalId;
function setTimer(){
    if(intervalId){
        clearInterval(intervalId);
        intervalId=undefined;
    }
    else {
        intervalId = setInterval(colorEachDiv, parseInt(document.getElementById("time").value) * 1000);
    }
}



//requirement 7


function goAway() {
    window.location.assign("http://www.codeandtheory.com/");
}


//requirement 8

function writeCookie(name, value, days) {
    if(days){
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
    }
    else var expires = "";
    document.cookie = name+"="+value+expires+"; path=/";
    alert(document.cookie);
}
//just write over-- day set to yesterday
function deleteCookie(name){
    writeCookie(name, "", -1);
}

