/**
 * Created by Tracy on 1/31/2016.
 */

"use strict";

function req1_regex(){
    var firstString1 = document.getElementById("string1").value;
    var searchFor1 = new RegExp(document.getElementById("searchString1").value, "i");
    var res = searchFor1.test(firstString1);

    if(res == true){
        document.getElementById("result1").innerHTML= "found.";
    }else{
        document.getElementById("result1").innerHTML= "not found.";
    }
}


    function req2_regexReplace(){
        var str = document.getElementById("initialString2").innerHTML;
        var searchFor2 = new RegExp(document.getElementById("searchString2").value, "g");
        console.log(typeof (searchFor2));
        var replaceWith2 = document.getElementById("replacementString2").value;
        var newstr2 = replaceWith2.toString();
        console.log(typeof (newstr2));

        document.getElementById("result2").innerHTML=str.replace(searchFor2, newstr2);
    }

    function req3_catchThrow3(){
        var res3 = document.getElementById("result3");
        res3.innerHTML = "";
        var guess3 = document.getElementById("num3").value;
        var patt = /\s/g;
        try {
            if(guess3 == "") throw "is empty";
            if(isNaN(guess3) || guess3.match(patt)) throw "is not a number";
            guess3 = Number(guess3);
            if(guess3 > 2000)   throw "is too high.You are "+ (guess3-2000) + " away.";
            if(guess3 < 500)    throw "is too low. You are " + (500 - guess3) + " away.";
        }
        catch(err) {
            alert("Input " + err);
        }
        finally {
            document.getElementById("num3").value = "";
        }
    }


    function req4_debugConsole(){


        var num4 = 2 + 2;
        debugger;
        document.getElementById("result4").innerHTML = num4;
        console.log(num4);

    }

function req5_openit1(clicknumber) {
    var jsStyleWindow;
        if(clicknumber == 'click1') {
          window.open("jsStyleGuide.html#click1","jsStyleWindow","location = 1,scrollbars=1,height=400,width=600");
        }
        else if(clicknumber == 'click2') {
        window.open("jsStyleGuide.html#click2", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click3') {
            window.open("jsStyleGuide.html#click3", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click4') {
        window.open("jsStyleGuide.html#click4", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click5') {
            window.open("jsStyleGuide.html#click5", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click6') {
            window.open("jsStyleGuide.html#click6", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click7') {
            window.open("jsStyleGuide.html#click7", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click8') {
            window.open("jsStyleGuide.html#click8", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click9') {
            window.open("jsStyleGuide.html#click9", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click10') {
            window.open("jsStyleGuide.html#click10", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click11') {
            window.open("jsStyleGuide.html#click11", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }else if(clicknumber == 'click12') {
            window.open("jsStyleGuide.html#click12", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
        }
}

function req7_openit1(clicknumber) {
    var jsStyleWindow;
    if(clicknumber == 'click1') {
        window.open("jsBestPractices.html#click1","jsStyleWindow","location = 1,scrollbars=1,height=400,width=600");
    }
    else if(clicknumber == 'click2') {
        window.open("jsBestPractices.html#click2", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click3') {
        window.open("jsBestPractices.html#click3", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click4') {
        window.open("jsBestPractices.html#click4", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click5') {
        window.open("jsBestPractices.html#click5", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click6') {
        window.open("jsBestPractices.html#click6", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click7') {
        window.open("jsBestPractices.html#click7", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click8') {
        window.open("jsBestPractices.html#click8", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click9') {
        window.open("jsBestPractices.html#click9", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click10') {
        window.open("jsBestPractices.html#click10", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }else if(clicknumber == 'click11') {
        window.open("jsBestPractices.html#click11", "jsStyleWindow", "location=1,scrollbars=1,height=400,width=600");
    }
}


function req8_jsStringFromJSON(){
var textJSON = '{"stateCapitals":[' +
    '{"state":"Texas", "capital":"Austin"},' +
    '{"state":"Virginia","capital":"Richmond"},' +
    '{"state":"Illinois", "capital":"Springfield"},' +
    '{"state":"Louisiana","capital":"Baton Rouge"}]}'

    var obj = JSON.parse(textJSON);
    document.getElementById("result8").innerHTML =
    "The Capital of " + obj.stateCapitals[1].state + " is " + obj.stateCapitals[1].capital + ".";


}

function req9_validateForm(){
    var fname = document.forms["req9Form"]["firstname9"].value;
    var lname = document.forms["req9Form"]["lastname9"].value;
    if(fname == null || fname == ""){
        alert("First name must be filled out");
        return false;
    }else if(lname == null || lname ==""){
        alert("Last name must be filled out");
        return false;
    }
}


function req11_Overflow(){
    var text11 = "";
    if(document.getElementById("fieldId11").validity.rangeOverflow){
        text11 = "Input value is too large";
    }else {
        text11 = "Input is valid";

    }
    document.getElementById("result11").innerHTML = text11;
}

function req11_Underflow(){
    var text11 = "";
    if(document.getElementById("fieldId11a").validity.rangeUnderflow){
        text11 = "Input value is too small";
    }else {
        text11 = "Input is valid";

    }
    document.getElementById("result11").innerHTML = text11;
}

function req11_Missing(){
    var text11 = "";
    if(document.getElementById("fieldId11b").validity.valueMissing){
        text11 = "Input must be entered";
    }else {
        text11 = "Input is valid";

    }
    document.getElementById("result11").innerHTML = text11;
}

function req12_objLiteral() {

    var mediaLibrary = {
        artistFirstName: document.getElementById("fname12").innerHTML,
        artistLastName: document.getElementById("lname12").innerHTML,
        album: document.getElementById("album12").innerHTML,
        releaseYear: document.getElementById("year12").innerHTML}

    var res = "";
    for (var prop in mediaLibrary) {
        res += prop + " : " + mediaLibrary[prop] + "; ";
    }
    alert("new object created: " + res);

    localStorage.setItem("mediaLibrary", JSON.stringify(mediaLibrary));

}



function req12_keywordNew() {

    var mediaLibrary2 = new Object();
    mediaLibrary2.artistFirstName = document.getElementById("fname12a").innerHTML;
    mediaLibrary2.artistLastName = document.getElementById("lname12a").innerHTML;
    mediaLibrary2.album = document.getElementById("album12a").innerHTML;
    mediaLibrary2.releaseYear = document.getElementById("year12a").innerHTML;
    var res2 = "";
    for (var prop in mediaLibrary2) {
        res2 += prop + " : " + mediaLibrary2[prop] + "; ";
    }
    alert("new object created: " + res2);
    localStorage.setItem("mediaLibrary2", JSON.stringify(mediaLibrary2));

}


function req12_objConstructor(firstName, lastName, album, year){
    this.artistFirstName = firstName;
    this.artistLastName = lastName;
    this.album = album;
    this.releaseYear = year;
}
function req12_makeInstance() {
    var fname = document.getElementById("fname12b").innerHTML;
    var lname = document.getElementById("lname12b").innerHTML;
    var album = document.getElementById("album12b").innerHTML;
    var year = document.getElementById("year12b").innerHTML;
    var collectionInstance1 = new req12_objConstructor(fname, lname, album, year);


    var res3 = "";
    for (var prop in collectionInstance1) {
        res3 += prop + " : " + collectionInstance1[prop] + "; ";
    }
    alert("new object created: " + res3)
    localStorage.setItem("collectionInstance1", JSON.stringify(collectionInstance1));
}

function req12_displayArray(){
    var retreivedMediaLibrary = localStorage.getItem('mediaLibrary');
    var mediaLibrary = JSON.parse(retreivedMediaLibrary);

    var retreivedMediaLibrary2 = localStorage.getItem('mediaLibrary2');
    var mediaLibrary2 = JSON.parse(retreivedMediaLibrary2);

    var retreivedCollectionInstance = localStorage.getItem('collectionInstance1');
    var collectionInstance = JSON.parse(retreivedCollectionInstance);


    var req12_addupObjects = new Array();
    req12_addupObjects[0] = mediaLibrary;
    req12_addupObjects[1] = mediaLibrary2;
    req12_addupObjects[2] = collectionInstance;




    for (var i = 0; i < req12_addupObjects.length; i++){
        console.log(req12_addupObjects[i]);
        document.getElementById("result12" + i).innerHTML = "Object "+ (i + 1) + "   album: " + req12_addupObjects[i].album + ",  " +
            "artist first name: " + req12_addupObjects[i].artistFirstName + ",  " +
            "artist last name: " + req12_addupObjects[i].artistLastName + ",  " +
            "release year: " + req12_addupObjects[i].releaseYear;
            }
}

function req13_addProp(){
    var retreivedMediaLibrary = localStorage.getItem('mediaLibrary');
    var mediaLibrary = JSON.parse(retreivedMediaLibrary);
    var anotherK = document.getElementById("addProp13k").innerHTML;
    var anotherV = document.getElementById("addProp13v").innerHTML;
    mediaLibrary[anotherK]=anotherV;
    alert("new property added: " + JSON.stringify(mediaLibrary));
    localStorage.setItem("newMediaLibrary", JSON.stringify(mediaLibrary));
}

function req13_deleteProp(){
    var newRetreivedMediaLibrary = localStorage.getItem('newMediaLibrary');
    var newmediaLibrary = JSON.parse(newRetreivedMediaLibrary);

    delete newmediaLibrary["Billboard Peak"];
    alert("new property deleted: " + JSON.stringify(newmediaLibrary));
}

function req14_aircraft(manufacturer, type, speed, numCrash) {
    this.manufacturer = manufacturer;
    this.aircraftType = type;
    this.topSpeed = speed;
    this.numOfCrashes = numCrash;
    this.changeSpeed = function (speed){
        this.topSpeed = speed;
    }

}
//I have been using local instances. If I were to create an object with a top speed that permanently changes,
//the new instance created below on line #298 would be outside of the function below.
function req14_speedChange() {
    var aircraftId1 = new req14_aircraft("Boeing", "B777", 590, 45);
    alert("New Object created. " + aircraftId1['manufacturer'] + " " + aircraftId1['aircraftType'] +
        " has a top speed of " + aircraftId1['topSpeed'] + "MPH.");


    if(document.getElementById("addone").checked== true){
      var newspeed1 = Number(document.getElementById("speedAmount").value) + aircraftId1['topSpeed'];
        aircraftId1.changeSpeed(newspeed1);
            }
    else if(document.getElementById("subone").checked== true) {
        var newspeed2 = aircraftId1['topSpeed'] - Number(document.getElementById("speedAmount").value);
        aircraftId1.changeSpeed(newspeed2);
            }
    document.getElementById('result14').innerHTML =
    "The " + aircraftId1['manufacturer'] + " " + aircraftId1['aircraftType'] +
    " NOW has a top speed of " + aircraftId1['topSpeed'] + " MPH.";
    console.log(aircraftId1);

    localStorage.setItem("newaircraftId1", JSON.stringify(aircraftId1));
}

function req15_addPrototype(){
    req14_aircraft.prototype.range = 9500;
    var newone = new req14_aircraft("Boeing", "B777", 590, 45);
    req14_aircraft.prototype.addFuel= function(num) {
        this.fuel = fuel;
    }

    for (var prop in newone){
        document.getElementById("result15").innerHTML += newone[prop] + "<br/>";
    }

}
