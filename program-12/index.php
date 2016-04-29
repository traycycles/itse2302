
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 12</title>
    <link href="program12.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <script type="text/javascript">
        function getMovies(value){
            $.post("getMovies.php", {partialMovie:value}, function(data){
                $("#results1").html(data)
            });
        }

        function showTeam(value){
            if(value==""){
                document.getElementById("results2").innerHTML="";
                return;
            }else{
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    //IE6, IE5 :-o
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
                        document.getElementById("results2").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET", "getTeams.php?q="+value,true);
                xmlhttp.send();
            }

        }
        function showCar(str){
            if(str==""){
                document.getElementById("results3").innerHTML="";
                return;
            }
            if(window.XMLHttpRequest){
                xmlhttp=new XMLHttpRequest();
            }else{
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange=function(){
                if(xmlhttp.readyState==4 && xmlhttp.status==200){
                    document.getElementById("results3").innerHTML=xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","getAutos.php?q="+str, true);
            xmlhttp.send();
        }

    </script>
</head>
<body>
<h1 style="padding-top: 50px">Welcome to Program 12</h1>
<hr>



<h2>Requirement #1</h2>

Select a name of a movie and suggestions will be made live as you type:
    <input type="text" onkeyup="getMovies(this.value)"/>
<br/>

<div id="results1"></div>
<hr>
<!--end requirement #1-->




<h2>Requirement #2</h2>
<form>
    <select name="teams" onchange="showTeam(this.value)">
        <option value="">SELECT</option>
        <?php
        include "connect.php";
        $sql="SELECT teamname FROM teams";
        $res=mysqli_query($db, $sql);   //obj w/ one field('teamname') 'x' #rows
        while($row = mysqli_fetch_array($res))
        {
            ?>
            <option value="<?=$row['teamname']?>"><?= $row['teamname']?></option>
            <?php
        }
        ?>
    </select>
</form>
<br>
<div id="results2">Team info will be listed here...</div>
<hr>

<!--end requirement #2-->

<h2>Requirement #3</h2>

<form>
    Select a Car:
    <select name="autos" onchange="showCar(this.value)">
        <option value="">Select a Car:</option>
        <option value="Charger">Charger</option>
        <option value="Sorento">Sorento</option>
        <option value="Corvette">Corvette</option>
        <option value="Mustang">Mustang</option>
    </select>
</form>
<div id="results3">

    Automobile information will be listed here....

</div>
<hr>
<!--end requirement #3-->



<h2>Requirement #4</h2>


<p class="req4">All about the RSS feed</p>
    <button class="accordion req4">The HTML</button>
    <div class="panel">
        <p class="req4">When the user selects an RSS-feed via input (such as a dropdown list),
            a Javascript function is triggered</p>
    </div>

    <button class="accordion req4">The JavaScript</button>
    <div class="panel">
        <p class="req4">that will
            create an XMLHttpRequest object, create the function to be executed when the server
            response is ready and send off that request to a file on the server.</p>
    </div>

    <button class="accordion req4">The PHP & XML</button>
    <div class="panel">
        <p class="req4">The page on the server called by Javascript create a new XML DOM object,load the RSS
            document in the xml variable, extract and out put elements from the channel element
            and finally extract and output elements from the item elements.</p>
    </div>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
            }
        }
    </script>

<hr>
<!--end requirement #4-->


<h2>Requirement #5</h2>

<p class="req5">All about the AJAX Poll</p>

    <div id="req5div1" onmouseover="step1()"><span id="firstp" style="visibility: hidden">
            When a user chooses an option, a function is executed. The function is triggered by the 'onclick' event</span></div>
    <div id="req5div2" onmouseover="step2()"><span id="secondp" style="visibility: hidden">
            That function creates an XMLHttpRequest object, creates the function to be executed when the server response is ready,
            and sends the request off to a file on the server. The "vote" parameter is sent via URL to the PHP file.</span></div>
    <div id="req5div3" onmouseover="step3()"><span id="thirdp" style="visibility: hidden">Once the value is sent from the JavaScript,
            the following happens: PHP files gets the content of the ".txt" file (where the data is stored),
            puts the content of the file in variables and add one to the selected variable, writes the result to the ".txt" file,
            and outputs a graphical representation of the poll result.</span></div>
<script>
    var myvar;
    function step1(){
        {
            myvar =setTimeout(function(){
                document.getElementById("firstp").style.visibility="visible";},2000);
        }
        document.getElementById("req5div1").style.width="500px";
    }function step2(){
        {
            myvar =setTimeout(function(){
                document.getElementById("secondp").style.visibility="visible";},3000);
        }
        document.getElementById("req5div2").style.width="800px";
    }function step3(){
        {
            myvar =setTimeout(function(){
                document.getElementById("thirdp").style.visibility="visible";},5000);
        }
        document.getElementById("req5div3").style.width="1100px";
    }
</script>


        <p>
            <br/>
            <a href="../index.html">return main page</a></p>
        </body>
        </html>
