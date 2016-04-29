/**
 * Created by Tracy on 1/24/2016.
 */

function req1_concatenate(){
   var concatparagraph = (document.getElementById("ptext1").value) + " " +(document.getElementById("ptext2").value);
    document.getElementById("req1_paragr").innerHTML = concatparagraph;
}

function req2_local_storage() {
    if (typeof (Storage) !== "undefined") {
        localStorage.firsttext = document.getElementById('ptext1').value;
        localStorage.secondtext = document.getElementById('ptext2').value;

        alert("stored");
    }


    else
        {

            document.getElementById("req2_text").innerHTML = "Sorry, your browser doesn't support web storage.";
        }

}

function req2_local_retreive1(){
    var first_already_there = document.getElementById("req2_text").innerHTML;
    if (first_already_there == "") {
        document.getElementById("req2_text").innerHTML = localStorage.firsttext;
    } else {
        document.getElementById("req2_text").innerHTML = first_already_there + "<br><br>" +(localStorage.firsttext);
    }
}
function req2_local_retreive2() {
    var first_already_there = document.getElementById("req2_text").innerHTML;
    if (first_already_there == "") {
        document.getElementById("req2_text").innerHTML = localStorage.secondtext;
    } else {
        document.getElementById("req2_text").innerHTML = first_already_there + "<br><br>" +(localStorage.secondtext);
    }
}
function req2_local_remove(){

    alert("removing");
    localStorage.removeItem("firsttext");
    localStorage.removeItem("secondtext");
    alert("removed");
}



function req3_findit(){

    var textarea3 = document.getElementById("ptext1forreq3").value;
    var searchstring3 = document.getElementById("textboxforreq3").value;
    var foundit = textarea3.search(searchstring3);
    if (foundit != -1){
        document.getElementById("isitthere").innerHTML = "Found it!";
    }else{
        document.getElementById("isitthere").innerHTML = "Not there";
    }
}


function req4_slice(){
    var str = document.getElementById("textboxforreq4").value;
    document.getElementById("result4").innerHTML = "Sliced section: " + str.slice((document.getElementById("firstnumber").value),(document.getElementById("secondnumber").value));
}

function req4_substring(){
     var str = document.getElementById("textboxforreq4").value;
    document.getElementById("result4").innerHTML = "Extracted section: " + str.substring((document.getElementById("firstnumber").value),(document.getElementById("secondnumber").value));
}
function req4_substrops(){
    var str = document.getElementById("textboxforreq4").value;
    document.getElementById("result4").innerHTML = "Extracted: " + str.substr((document.getElementById("firstnumber").value),(document.getElementById("secondnumber").value));

}


function req5_replace(){
    var str1 = document.getElementById("string5").value;
    var str2 = document.getElementById("replacementstring5").value;
    var strSentence = document.getElementById("sentence").value;
    var res5 = strSentence.replace(str1, str2);
    document.getElementById("result5").innerHTML = "Result: " + res5;
}

function req6_convertarray(){
    var str = document.getElementById("string6").value;
    var res6 = str.split("&");
    document.getElementById("result6").innerHTML = "Result is array containing the following values: " + "<strong>" + res6 + "</strong>";

}

function req7_clickCounter(){
    if(typeof(Storage) !== "undefined"){
        if(sessionStorage.clickcount){
            sessionStorage.clickcount = Number(sessionStorage.clickcount) +1;
        }else{
            sessionStorage.clickcount = 1;
        }
        console.log(sessionStorage.clickcount)

    }else{
        document.getElementById("result7").innerHTML = "Sorry, your browser doesn't support web storage";
    }
}


function req7_sessionclicks(){
    document.getElementById("result7").innerHTML =
        "You have clicked the panda " + sessionStorage.clickcount + " time(s) this session!"
}


function req8_division(){

    var res8 = parseInt(document.getElementById("firstnumber8").value) / parseInt(document.getElementById("nada8").value);
    document.getElementById("result8").innerHTML = "Result: " + res8;
}



function req9_table() {
    var mydiv = document.getElementById("divreq9");
    var x = document.createElement("TABLE");

    mydiv.appendChild(x);
    x.setAttribute("id", "myTable");

    var row = document.createElement("TR");
    x.appendChild(row);

    var i;
    for(i = 0; i < 3; i ++) {
        var header = document.createElement("TH");
        row.appendChild(header);
        header.setAttribute("id", "head" + i);
        switch (i) {
            case i = 0:
                var headerfill0 = document.createTextNode("Number()");
                header.appendChild(headerfill0);
                break;
            case i = 1:
                var headerfill1 = document.createTextNode("parseInt()");
                header.appendChild(headerfill1);
                break;
            case i = 2:
                var headerfill2 = document.createTextNode("parseFloat()");
                header.appendChild(headerfill2);
                break;
        }
    }
    var row = document.createElement("TR");
    x.appendChild(row);

    var j;
    for(j = 0; j < 3; j ++) {
        var data = document.createElement("TD");
        row.appendChild(data);
        data.setAttribute("id", "data" + j);
        switch (j) {
            case j = 0:
                var z = false;
                var data0 = document.createTextNode(Number(z));
                data.appendChild(data0);
                break;
            case j = 1:
                var z1 = "10.33";
                var data1 = document.createTextNode(parseInt(z1));
                data.appendChild(data1);
                break;
            case j = 2:
                var z2 = "10.33";
                var data2 = document.createTextNode(parseFloat(z2));
                data.appendChild(data2);
                break;
        }
    }
}




function req10_numbers(){
    var res1 = parseFloat(Math.floor(Math.random() * 7) +1);
    var res2 = parseFloat(Math.floor(Math.random() * 223) + 33);
    var res3 = parseFloat(Math.floor(Math.random() *(723-572 +1))+572);
    document.getElementById("result10").innerHTML = "Between 1 and 7: " +res1 + "<br>"
    + "Between 33 and 255: " + res2 + "<br>" + "Between 572 and 723: " + res3;
}

function req11_exponentation(){
    var base11 = parseFloat(document.getElementById("basenumber").value);
    var exop11 = parseFloat(document.getElementById("exponent11").value);
    var pow11 = Math.pow(base11, exop11);
    document.getElementById("result11").innerHTML = "Result: " + pow11;
}

function req12_date(){
    var longdate1 = new Date("January 27, 2016");
    var longdate2 = new Date("27 Jan 2016");
    var shortdate1 = new Date ("01/27/2016");
    var shortdate2 = new Date ("2016/01/27");
    document.getElementById("result12").innerHTML = "'Long date': January 27, 2016 = " + longdate1 + "<br>"
     + "'Long date': 27 Jan 2016 = " + longdate2 + "<br>"
     + "'Short date': 01/27/2016 = " + shortdate1 + "<br>"
     + "'Short date': 2016/01/27 = " + shortdate2 + "<br>";
}




function req13_table(){

    var d = new Date();
    var stringdate = d.toDateString();
    document.getElementById("results13").innerHTML = "Today's date: " + stringdate;

    var daytoday = d.getDate();
    document.getElementById("data00").innerHTML = daytoday;
    var monthtoday = d.getMonth();
    document.getElementById("data01").innerHTML = monthtoday;
    var yeartoday = d.getFullYear();
    document.getElementById("data02").innerHTML = yeartoday;

    var numday = d.setDate(1);
    var setday = new Date(numday);
    document.getElementById("data10").innerHTML = setday.toDateString();

    var nummonth = d.setMonth(1);
    var setmonth = new Date(nummonth);
    document.getElementById("data11").innerHTML = setmonth.toDateString();

    var numyear = d.setFullYear(2015);
    var setyear = new Date(numyear);
    document.getElementById("data12").innerHTML = setyear.toDateString();
}



function req14_planetArray(){
    var planetStr = document.getElementById("planets14").value;
    var res14 = planetStr.split(",");
    localStorage.planetArray = res14;
    document.getElementById("result14").innerHTML = "Result is array containing the following values: " + "<strong>" + res14 + "</strong>";
}
function req14_planetArrayJoin(){
    if(document.getElementById("planets14").value == ""){
        document.getElementById("result14").innerHTML = "Please enter planets and convert first";
    }else{
        var res14to = localStorage.planetArray.split(",");
        console.log(res14to);
        var res14join = res14to.join(", ");
        document.getElementById("result14").innerHTML = "Joined Array: " + "<strong>" + res14join + "</strong>";
    }
}




function req15_planetRemove(){
    var storageToArray = localStorage.planetArray.split(",");
    storageToArray.splice(-2,2);
    document.getElementById("result15").innerHTML = "New Array: " + "<strong>" + storageToArray + "</strong>";
    localStorage.newPlanetArray = storageToArray;
    //console.log(localStorage.newPlanetArray);
}
function req15_addon(){
    var newStoredArray = localStorage.newPlanetArray.split(",");
    newStoredArray.push(document.getElementById("firstadd15").value);
    newStoredArray.push(document.getElementById("secondadd15").value);
    document.getElementById("result15").innerHTML = "New Joined Array: " + "<strong>" + newStoredArray + "</strong>";
}



function req16_planetRemove(){
    var storageToArray = localStorage.planetArray.split(",");
    storageToArray.shift();
    document.getElementById("result16").innerHTML = "New Array: " + "<strong>" + storageToArray + "</strong>";
    localStorage.newPlanetArray = storageToArray;
    console.log(localStorage.newPlanetArray);
}
function req16_addon(){
    var newStoredArray = localStorage.newPlanetArray.split(",");
    newStoredArray.splice(0,0,document.getElementById("firstadd16").value);
    document.getElementById("result16").innerHTML = "New Array: " + "<strong>" + newStoredArray + "</strong>";
}



function req17_addon() {
    var storageToArray = localStorage.planetArray.split(",");
    storageToArray.splice(2, 0, document.getElementById("thirdadd17").value);
    document.getElementById("result17").innerHTML = "New Array: " + "<strong>" + storageToArray + "</strong>";
    localStorage.newPlanetArray = storageToArray;
}
function req17_sortit(){
    var newStoredArray = localStorage.newPlanetArray.split(",");
    var sortedarray = newStoredArray.sort(function(a, b){return a > b? 1: -1;});
   document.getElementById("result17").innerHTML = "New Array: " + "<strong>" + newStoredArray + "</strong>";
}



function req18_new4ElementArray(){
    var storageToArray = localStorage.planetArray.split(",");
    var new4ElementArray = storageToArray.slice(0,4);
    document.getElementById("result18").innerHTML = "Old Array: " + "<strong>" + storageToArray + "</strong>" + "<br>"
    + "New Array: " + "<strong>" + new4ElementArray + "</strong>";
}



function req19_compare() {
    var firstnumber = parseInt(document.getElementById("req19_firstnumber").value);
    var secondnumber = parseInt(document.getElementById("req19_secondnumber").value);

    if(firstnumber == secondnumber) {
        document.getElementById("result19").innerHTML = "The numbers are equal";
    }else if(firstnumber < secondnumber) {
        document.getElementById("result19").innerHTML = firstnumber + " is smaller than " + secondnumber;
    }else{
            document.getElementById("result19").innerHTML = firstnumber + " is larger than " + secondnumber;
    }
}



function req20_logic() {

    var entry20 = parseFloat(document.getElementById("req20_number").value);
        if (isNaN(entry20)){
            document.getElementById("result20").innerHTML ="Input Numbers. Try again.";
       }else{
            if( entry20 >= 3 && entry20 <= 55){
                document.getElementById("result20").innerHTML ="Your number is between 3 and 55.";
            }else if (! (entry20 >= 77 && entry20 <= 99)){
                document.getElementById("result20").innerHTML ="Your number is outside the range of 77 - 99.";
            }else{
                document.getElementById("result20").innerHTML ="Your number is not between 3 and 55." + "<br>" +
                    "Your number is not outside the range of 77 - 99.";
            }

        }
}


function req21_logic(){
    var entry21 = document.getElementById("req21_guesses").value.toLowerCase();
        if(entry21 == "gold"){
            document.getElementById("result21").innerHTML ="Your metal is gold.";
        }else if(entry21 == "silver"){
            document.getElementById("result21").innerHTML ="Your metal is silver.";
        }else if(entry21 == "platinum"){
            document.getElementById("result21").innerHTML ="Your metal is platinum.";

        }else{
            document.getElementById("result21").innerHTML ="Your metal isn't too precious!";
        }

}

function req22_logic(){
    var entry22 = document.getElementById("req22_guesses").value.toLowerCase();
    switch (entry22){
        case "matt damon":
            document.getElementById("result22").innerHTML ="Your actor is Matt Damon.";
            break;
        case "mark whalberg":
            document.getElementById("result22").innerHTML ="Your actor is Mark Whalberg.";
            break;
        case "ben affleck":
            document.getElementById("result22").innerHTML ="Your actor is Ben Affleck.";
            break;
        default:
            document.getElementById("result22").innerHTML ="You're not from Boston!";
    }

}



function req23_logic(){
    var entry23 = document.getElementById("req23_guesses").value.toLowerCase();
    switch (entry23){
        case "bird":
        case "bat":
        case "squirrel":
            document.getElementById("result23").innerHTML ="Your animal flies.";
            break;
        case "horse":
        case "tiger":
        case "dog":
        case "cat":
        case "bear":
            document.getElementById("result23").innerHTML ="Your animal runs.";
            break;
        case "human":
        case "turtle":
        case "snail":
        case "lizard":
            document.getElementById("result23").innerHTML ="Your animal crawls.";
            break;
        default:
            document.getElementById("result23").innerHTML ="I've never seen one of those!";
            break;
    }

}




function req24_morePlanetArray(){
    var storageToArray24 = localStorage.planetArray.split(",");
    //console.log(storageToArray24);
    for(planet in storageToArray24){
       alert(storageToArray24[planet]+ " is in the planetArray") ;
    }

}
function req24_whileloop(){
    var storageToArray24 = localStorage.planetArray.split(",");
    console.log(storageToArray24);
    var i = 0;
    while(i < 3){
        alert(storageToArray24[i] + " is planet number " + (i+1));
        i++
    }
}
function req24_dowhileloop(){
    var storageToArray24 = localStorage.planetArray.split(",");
    console.log(storageToArray24);
    var i = 0;
    do{
        alert(storageToArray24[(storageToArray24.length - (i+1))] + " is the last planet in the array.");
        i++;
    }while (i < 1);
}


