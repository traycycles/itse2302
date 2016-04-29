<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 10</title>
    <link href="program10.css" rel="stylesheet">

</head>
<body>
<h1 style="padding-top: 50px">Welcome to Program 10</h1>
<hr>

<h2>Requirement #1</h2>

<p>
    Complete Form. All fields are required and must be valid.<br/>
    <span style="font-style: italic; font-size: smaller">
        Websites must begin with 'www' and end with '.com'<br/>
        Year must be this century or last. And must be four digits<br/>

    </span>
</p>

<form action="addData.php" method="post">
    <div>
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


<hr>
<!--end requirement #1-->

<h2>Requirement #2</h2>

<div>
    <form action="selectData.php" method="post">
        <label for="fieldnames">Choose a fieldname to receive ALL of the data:
            <select name="fieldnames" >
                <option value="teamname">Team Name</option>
                <option value="city">City</option>
                <option value="bestplayer">Best Player</option>
                <option value="website">Website</option>
                <option value="yearperformed">Year Performed</option>
            </select>
        </label>
        <input type="submit" value="Submit">
    </form>
</div>
<hr>
<!--end requirement #2-->

<h2>Requirement #3</h2>

<form action="selectMoreData.php" method="post">
        Select column(s) to list data from the `teams` Table:<br/>
    <label for="teamsfields">
        <input type="checkbox" name="teamsfields[]" value="teamname"/>Team Name
    </label><br/>
    <label for="teamsfields">
        <input type="checkbox" name="teamsfields[]" value="city"/>City
    </label><br/>
    <label for="teamsfields">
        <input type="checkbox" name="teamsfields[]" value="bestplayer"/>Best Player
    </label><br/>
    <label for="teamsfields">
        <input type="checkbox" name="teamsfields[]" value="website"/>Website
    </label><br/>
    <label for="teamsfields">
        <input type="checkbox" name="teamsfields[]" value="yearperformed"/>Year Performed
    </label><br/><br/>

    Click to Submit <input type="submit" value="Submit">

</form>
<hr>
<!-- end requirement #3-->


<h2>Requirement #4</h2>
<?php
include 'printTable.php';
echo printTable();
?>
<br/>
<div>
    <form action="deleteData.php" method="post">
        <label for="fieldnames">Choose a record to delete. Select a fieldname:
            <select name="fieldnames" >
                <option value="teamname">Team Name</option>
                <option value="city">City</option>
                <option value="bestplayer">Best Player</option>
                <option value="website">Website</option>
                <option value="yearperformed">Year Performed</option>
            </select>
        </label>
        <label for="fieldData">AND the data in that record's field:
                <input type="text" name="fieldData" required/>
        </label>
        <input type="submit" value="Submit">
    </form>
</div>
<hr>
<!--end requirement #4-->


<h2>Requirement #5</h2>
<?php

echo printTable();
?>
<br/>
<div>
    <form action="updateData.php" method="post">
        Choose a record to update. <label for="id">
            <input type="number" name="id" min="1" max="100" width="50px" required/></label>

            <label for="fieldnames">Select a field to update:
            <select name="fieldnames" >
                <option value="teamname">Team Name</option>
                <option value="city">City</option>
                <option value="bestplayer">Best Player</option>
                <option value="website">Website</option>
                <option value="yearperformed">Year Performed</option>
            </select>
        </label>
        <label for="fieldData">AND the new data for record's field:
            <input type="text" name="fieldData" required/>
        </label>
        <input type="submit" value="Submit">
    </form>
</div>
<hr>


<!-- end requirement #5 -->


<h2>Requirement #6</h2>
The following is a display of the first 3 rows of the 'teams' table:
<p>
<?=printThreeRows()?>
</p>
<hr>
<p>
    <br/>
    <a href="../index.html">return main page</a></p>

</body>
</html>
