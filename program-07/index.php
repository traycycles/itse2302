<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 7</title>
    <link href="program7.css" rel="stylesheet">

</head>
<body>
<h1 style="padding-top: 50px">Welcome to Program 7</h1>
<hr>
<h2>Requirement #1</h2>
<ul>
    <li><a href="selfprocessor.php" >Self Processor </a></li>
    <li><a href="validatecontrols.php">Validate Controls</a></li>
</ul>
<div style="display: inline-block">
<!--Choose: <input type="text" list="languages">-->
<!--<label for="daysofweek">-->

    Choose: <label><select id="daysofweek" onchange="">
        <option value="Sunday">Sunday</option>
        <option value="Monday">Monday</option>
        <option value="Tuesday">Tuesday</option>
        <option value="Wednesday">Wednesday</option>
        <option value="Thursday">Thursday</option>
        <option value="Friday">Friday</option>
        <option value="Saturday">Saturday</option>
    </select></label>

</div>
<div style="display: inline-block">
    Choose: <label><select id="monthsofyear" onchange="">
        <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select></label>
</div>
<hr>
<!--end requirement 1-->


<h2>Requirement #2</h2>

<form action="daymonth.php" method="get">
    <div style="display: inline-block">

        <label for="daysofweek">Choose:
            <select name="daysofweek" >
                <option value="Sunday">Sunday</option>
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
            </select>
        </label>

    </div>
    <div style="display: inline-block">
        <label for="monthsofyear">Choose:
            <select name="monthsofyear" >
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </label>
        <input type="submit" value="Submit">
    </div>
</form>
<hr>
<!-- end requirements #2 & #3-->


<h2>Requirement #4</h2>

<form action="favorites.php" method="post">
    <label for="name">
        Name:
        <input type="text" name="name" size="30" title="name is required" required />
    </label><br/><br>
    <label for="movie">
        Favorite Movie:
        <input type="text" name="movie" size="50" title="movie is required" required />
    </label><br/><br/>
    <label for="food">
        Favorite Food:
        <input type="text" name="food" size="40" title="food is required" required />
    </label><br/><br/>
    <label for="season">
        <input type="radio" name="season" value="summer" checked/>Summer
        <input type="radio" name="season" value="fall" />Fall
        <input type="radio" name="season" value="winter" />Winter
        <input type="radio" name="season" value="spring">Spring
    </label><br/><br/>
    <label for="comments">Comments(optional):<br/>
        <textarea name="comments" rows="5" cols="60" wrap="hard" ></textarea>
    </label><br/><br/>
    <input type="submit" value="Submit">

</form>
<hr>
<!-- end requirement #4 & #5-->


<h2>Requirement #6</h2>

<form action="html.php" method="post">
    <label for="number">Select a color:
        <input type="color" name="color"/>
    </label><br/><br/>

    Check Veggies you like:<br/>
    <label for="veggies">
        <input type="checkbox" name="veggies[]" value="asparagus"/>Asparagus
    </label><br/>
    <label for="veggies">
        <input type="checkbox" name="veggies[]" value="cabbage"/>Cabbage
    </label><br/>
    <label for="veggies">
        <input type="checkbox" name="veggies[]" value="brussel sprouts"/>Brussel Sprouts
    </label><br/><br/>

    <input type="hidden" name="city" value="Austin" />

    Click Image to Submit <input type="image" src="images/img_submit.gif"
        alt="Submit" width="30" height="30"/><br/><br/>
    <button type="reset" value="reset">Reset</button>

</form>
<hr>
<!--end requirements #6 & #7-->


<a href="selfprocessor.php"><h2>Requirement #8</h2></a>

please click link above to go to requirement #8.
<hr>
<!--end requirement #8-->


<a href="validatecontrols.php"><h2>Requirement #9</h2></a>
please click link above to go to requirement #9.
<hr>
<!--end requirement #9-->
<p>
    <br/>
    <a href="../index.html">return main page</a></p>


</body>
</html>




