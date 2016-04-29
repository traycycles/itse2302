<!DOCTYPE HTML>
<html>

<head>
    <style>
        .error {
            color: deeppink;
        }
    </style>
</head>
<body>
<h2 style="text-align: center; padding-bottom: 100px">Requirement #8</h2>

<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/18/2016
 * Time: 11:28 PM
 */
$nameErr = $movieErr = $foodErr ='';
$daysofweek= $monthsofyear= $name = $movie = $food = $season = $comments =$color=$city= $veggies[]='';

if($_SERVER['REQUEST_METHOD']== 'POST') {    //checking whether form was submitted
    if (!empty($_POST['veggies'])) {
        $checkedveggy = count($_POST['veggies']);
        for ($i = 0; $i < $checkedveggy; $i++) {
            $veggies[$i] = '';
        }
    }
    if(empty($_POST['name'])){
        $nameErr = 'Name is required';
    }else {
        $name = test_input($_POST['name']);
        if(!preg_match('/^[a-zA-z]*$/', $name)){
            $nameErr ='Only letters and white space allowed';
        }
    }
    if(empty($_POST['movie'])){
        $movieErr ='Movie is required';
    }else{
        $movie = test_input($_POST['movie']);
        if(!preg_match('/^[a-zA-z\s0-9]*$/', $movie)){
            $movieErr ='Only letters and white space allowed';
        }
    }
    if(empty($_POST['food'])){
        $foodErr = 'Food is required';
    }else{
        $food = test_input($_POST['food']);
        if(!preg_match('/^[a-zA-z]*$/', $food)){
            $nameErr ='Only letters and white space allowed';
        }
    }
    $daysofweek = test_input($_POST['daysofweek']);
    $monthsofyear = test_input($_POST['monthsofyear']);
    $season = test_input($_POST['season']);
    $city = test_input($_POST['city']);
    if(empty($_POST['comments'])){
        $comments='';
    }else {
        $comments = test_input($_POST['comments']);
    }
        $color = test_input($_POST['color']);
        if (!empty($_POST['veggies'])) {
        foreach ($_POST['veggies'] as $veggy) {
            test_input($veggy);
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<p><span class="error">* required field.</span> </p>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div style="display: inline-block">

        <label for="daysofweek">Choose:
            <select name="daysofweek">
                <option value="Sunday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Sunday')echo 'selected';?>>
                    Sunday</option>
                <option value="Monday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Monday')echo 'selected';?>>
                    Monday</option>
                <option value="Tuesday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Tuesday')echo 'selected';?>>
                    Tuesday</option>
                <option value="Wednesday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Wednesday')echo 'selected';?>>
                    Wednesday</option>
                <option value="Thursday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Thursday')echo 'selected';?>>
                    Thursday</option>
                <option value="Friday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Friday')echo 'selected';?>>
                    Friday</option>
                <option value="Saturday"
                    <?php if(isset($daysofweek)&& $daysofweek == 'Saturday')echo 'selected';?>>
                    Saturday</option>
            </select>
        </label>

    </div>
    <div style="display: inline-block">
        <label for="monthsofyear">Choose:
            <select name="monthsofyear">
                <option value="January"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'January')echo 'selected';?>>
                    January</option>
                <option value="February"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'February')echo 'selected';?>>
                    February</option>
                <option value="March"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'March')echo 'selected';?>>
                    March</option>
                <option value="April"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'April')echo 'selected';?>>
                    April</option>
                <option value="May"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'May')echo 'selected';?>>
                    May</option>
                <option value="June"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'June')echo 'selected';?>>
                    June</option>
                <option value="July"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'July')echo 'selected';?>>
                    July</option>
                <option value="August"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'August')echo 'selected';?>>
                    August</option>
                <option value="September"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'September')echo 'selected';?>>
                    September</option>
                <option value="October"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'October')echo 'selected';?>>
                    October</option>
                <option value="November"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'November')echo 'selected';?>>
                    November</option>
                <option value="December"
                    <?php if(isset($monthsofyear)&& $monthsofyear == 'December')echo 'selected';?>>
                    December</option>
            </select>
        </label>

    </div><br/><br/>
<!-----form2---->
    <label for="name">
        Name:
        <input type="text" name="name" size="30" title="name is required" value="<?=$name?>" />
        <span class="error">*<?=$nameErr?></span>
    </label><br/><br>
    <label for="movie">
        Favorite Movie:
        <input type="text" name="movie" size="50" title="movie is required" value="<?=$movie?>" />
        <span class="error">*<?=$movieErr?></span>
    </label><br/><br/>
    <label for="food">
        Favorite Food:
        <input type="text" name="food" size="40" title="food is required" value="<?=$food?>" />
        <span class="error">*<?=$foodErr?></span>
    </label><br/><br/>
    <label for="season">
        <input type="radio" name="season" value="summer" checked/>Summer
        <input type="radio" name="season" value="fall" />Fall
        <input type="radio" name="season" value="winter" />Winter
        <input type="radio" name="season" value="spring" />Spring
    </label><br/><br/>
    <label for="comments">Comments(optional):<br/>
        <textarea name="comments" rows="5" cols="60" wrap="hard" ><?=$comments?></textarea>
    </label><br/><br/>

<!----form3--->
    <label for="number">Select a color:
        <input type="color" name="color"/>
    </label><br/><br/>
    Check Veggies you like:<br/>
    <label for="veggies">
        <input type="checkbox" name="veggies[]" value="asparagus"
            <?php if(isset($veggy)&& $veggy == 'asparagus')echo 'checked';?> />Asparagus
    </label><br/>
    <label for="veggies">
        <input type="checkbox" name="veggies[]" value="cabbage"
            <?php if(isset($veggy)&& $veggy == 'cabbage')echo 'checked';?> />Cabbage
    </label><br/>
    <label for="veggies">
        <input type="checkbox" name="veggies[]" value="brussel sprouts"
            <?php if(isset($veggy)&& $veggy == 'brussel sprouts')echo 'checked';?> />Brussel Sprouts
    </label><br/><br/>

    <input type="hidden" name="city" value="Austin" />

    Click Image to Submit <input type="image" src="images/img_submit.gif"
                                 alt="Submit" width="30" height="30"/><br/><br/>

    <input type="reset" value="Reset">

    <p style="font-size: smaller; font-style: italic">please note that reset will only reset user input.</p>

</form>
<br/><br/>

<h2>Input</h2>

Welcome <?=$name?>!<br/>
Your favorite movie is: <?=$movie?><br/>
Your favorite food is: <?=$food?><br/>
Your favorite season is: <?=$season?><br/>
The hexidecimal representation of the color you selected was <?=$color?><br/>
The hidden value of the hidden identifier of 'city' was <?=$city?><br/>

<?php
if(isset($_POST['veggies'])){
    foreach($_POST['veggies'] as $veggy) {
        echo 'You like eating '.$veggy.'<br/>';
    }
}
else
    echo "You don't like the vegetables listed."
?>


<br/><br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
</body>
</html>