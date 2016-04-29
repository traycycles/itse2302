<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link href="program9.css" rel="stylesheet">
    <title>Thompson:Program 9</title>
</head>
<body>

<h1>Welcome to Program 9</h1>
<hr>
<h2>Requirement #1</h2>
<p>
Click button to connect to the database:
    <input type="button" value="New" onclick="newDoc()">
</p>
<script>
    function newDoc(){
        window.location.assign("connect.php")
    }
    function newDoc2(){
        window.location.assign("disconnect.php")
    }
    function newDoc3(){
        window.location.assign("createTable.php")
    }
</script>

<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/27/2016
 * Time: 12:21 AM
 */
?>
<hr>
<!--end requirement 1-->


<h2>Requirement #2</h2>

<p>Click button to close connection to the database:
    <input type="button" value="New" onclick="newDoc2()">
</p>
<hr>
<!-- end requirement #2-->


<h2>Requirement #3</h2>
<p>Click button to create table named `teams`:
    <input type="button" value="New" onclick="newDoc3()">
</p>
<hr>
<!--end requirement #3-->


<h2>Requirement #4</h2>

<!--<p>Team Name #1</p>-->
<!--<form action="addData.php" method="post">-->
<!--    Name: <input type="text" name="teamname1"><br>-->
<!---->
<!--    <input type="submit">-->
<!--</form>-->
<p>
Complete Form. All fields are required and must be valid.<br/>
    <span style="font-style: italic; font-size: smaller">
        Websites must begin with 'www' and end with '.com'<br/>
        Year must be this century or last. And must be four digits<br/>

    </span>
</p>

<form action="addData.php" method="post">
<div style="sp ">
    Team Name #1: <input type="text" name="teamname[]" required>
    Team Name #2: <input type="text" name="teamname[]" required>
    Team Name #3: <input type="text" name="teamname[]" required>
    Team Name #4: <input type="text" name="teamname[]" required><br/><br/>
</div>

<div>
    City Team #1: <input type="text" name="city[]" required>
    City Team #2: <input type="text" name="city[]" required>
    City Team #3: <input type="text" name="city[]" required>
    City Team #4: <input type="text" name="city[]" required><br/><br/>
</div>
<div>
    Best Player Team #1: <input type="text" name="bestplayer[]" required>
    Best Player Team #2:<input type="text" name="bestplayer[]" required>
    Best Player Team #3: <input type="text" name="bestplayer[]" required>
    Best Player Team #4: <input type="text" name="bestplayer[]" required><br/><br/>
</div>
<div>
    Website Team #1: <input type="text" name="website[]" required>
    Website Team #2: <input type="text" name="website[]" required>
    Website Team #3: <input type="text" name="website[]" required>
    Website Team #4: <input type="text" name="website[]" required><br/><br/>
</div>
<div>
    Year Performed Team #1: <input type="text" name="yearperformed[]" required>
    Year Performed Team #2: <input type="text" name="yearperformed[]" required>
    Year Performed Team #3: <input type="text" name="yearperformed[]" required>
    Year Performed Team #4: <input type="text" name="yearperformed[]" required><br/><br/>
</div>
<input type="submit" > </form>

<!--<script>-->
<!--    function createEntry(){-->
<!--        for-->
<!--    }-->
<!--</script>-->

<hr>
<p>
    <a href="../index.html">return main page</a></p>
</body>
</html>