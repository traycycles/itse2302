<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 11</title>
    <link href="program11.css" rel="stylesheet">
    <script type="text/javascript" src="program11.js"></script>

</head>
<body>
<h1 style="padding-top: 50px">Welcome to Program 11</h1>
<hr>

<h2>Requirement #1</h2>


<?php


$colors=array('00ffff', 'ff00ff', 'f0000f', 'cc00cc',
                '00cccc', '0cccc0', 'bbcc00','bb00cc',
                '00bbcc', 'ddcc00', 'dd00cc', '00ddcc',
                '0ddcc0', 'eebb00', 'ee00bb', '00eebb',
                '0eebb0', 'aa00aa', '0aaaa0', '00aa00');
?>
<div id="changeit">
    <?php
    for ($i = 0; $i <20; $i++) {
        $sizew = rand(30, 100);
        $sizeh = rand(50, 200);
    ?>
        <div id="div<?=$i+1?>" style="background-color:#<?=$colors[$i]?>; width:<?=$sizew?>%; height:<?=$sizeh?>px"></div>

    <?php
    }?>
</div>
<hr>

<!--end requirement 1-->




<h2>Requirement #2</h2>

<p>Below is the URL of the current page by using the window.location object</p>
<p id="req2_paragraph" style="color: green"></p>
    <script>
        document.getElementById("req2_paragraph").innerHTML=
            window.location.href;
    </script>
<p style="padding-top: 25px">
    Click appropriate button to go back or forward:
    <button onclick="goBack()">Back</button>
    <button onclick="goForward()">Forward</button>
</p>
<p>
    cookies enabled?
    <button onclick="cookieStatus()">Click</button>
    Java enabled?
    <button onclick="javaStatus()">Click</button>

</p>
<p id="req2_paragraph2" style="color: green"></p>
<hr>
<!--end requirement #2-->




<h2>Requirement #3</h2>

<p>
    Click to change the colors of the divs above by reading some cool xml data
    <button onclick="changeitNow()">Change</button>
</p>
<hr>
<!-- end requirement #3-->

<h2>Requirement #4</h2>
<script>





</script>


Please set a frequency of color changes: Every
<label for="time">
    <input type="number" id="time" min="1" max="100" width="50px" required/></label>seconds.
<p>
    <button onclick="setTimer()">ON/OFF</button>

        <p id="printit"></p>
</p>
<hr>
<!--end requirement 4-->



<h2>Requirement #5</h2>
<p>
    The following are the first 4 color values:
</p>
<?php
    if(file_exists("divcolors.xml")) {
        $xml = simplexml_load_file("divcolors.xml");
        echo $xml->div1[0]->color1[0] . "<br/>";
        echo $xml->div2[0]->color2[0] . "<br/>";
        echo $xml->div3[0]->color3[0] . "<br/>";
        echo $xml->div4[0]->color4[0] . "<br/>";
    }
?>


<hr>
<!--end requirement 5-->


<h2>Requirement #6</h2>

<p id="result6"></p>

    <script>
        var h = "Total height of your screen is " + screen.height + "px <br/>";
            document.getElementById("result6").innerHTML = h;

        var w = "Total Width of your screen is "+ screen.width + "px";
            document.getElementById("result6").innerHTML += w;
    </script>

<hr>
<!--end requirement 6-->


<h2>Requirement #7</h2>

Click button to head to a new url in this window:
<button onclick="goAway()">New</button>

<hr>
<!-- end requirement 7-->



<h2>Requirement #8</h2>
<p>
    Create two cookies:
    <button onclick="writeCookie('name','Doe',7)">Create #1</button>
    <button onclick="writeCookie('favorite','sushi',7)">Create #2</button>

</p>
<p>
    Delete them:
    <button onclick="deleteCookie('name')">Delete #1</button>
    <button onclick="deleteCookie('favorite')">Delete #2</button>
</p>
<!--end requirement 8-->


<p>

    <br/>
    <a href="../index.html">return main page</a></p>
</body>
