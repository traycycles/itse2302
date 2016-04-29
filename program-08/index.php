<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/22/2016
 * Time: 12:46 AM
 */
session_start();
include 'header.php';
include 'footer.php';

$cookie_name = "user_id";
$cookie_value = 12345;
setcookie($cookie_name, $cookie_value, time()
    + (86400 * 365),"/");

?>
<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 8</title>
    <link href="program8.css" rel="stylesheet">

</head>
<body>
<h1 style="padding-top: 50px">Welcome to Program 8</h1>
<hr>


<h2>Requirement #1</h2>
<?=$dateTime?><br/>
<?=$copy?>
<hr>
<!-- end requirement #1-->


<h2>Requirement #2</h2>
    <?php
        include 'menu.php';
    ?>
<hr>
<!-- end requirement #2-->


<h2>Requirement #3</h2>

<div>
    <p>
        Based on my years of observations and scant research, I have created the following array of regional
        food sales. Please note, I have had the pleasure of residing in all four regions throughout my life.
    </p>
</div>
<div style="display: inline-block; width: 40%" >
    <?php
        $regions = array(
            'North'=>array(
                'steak',
                'pork ribs',
                'sausage',
                'pizza',
                'corned beef'),
            'South'=>array(
                'fried chicken',
                'grits',
                'meat tacos',
                'brisket',
                'mac & cheese'),
            'East'=>array(
                'crab',
                'cod',
                'lobster',
                'clams',
                'pasta'),
            'West'=>array(
                'avacados',
                'granola',
                'noodles',
                'sushi',
                'fish tacos')
        );
    ?>

    <pre>
        <?php
            print_r($regions);
        ?>
    </pre>
</div>
<div style="display: inline-block; width: 40%">
    <?php

        foreach($regions as $region=>$food){
            echo '<br/>'.$region.':<br/>';
            foreach($regions[$region] as $food){
                echo $food.'<br/>';
            }
        }
    ?>
</div>
<hr>
<!-- end requirement #3-->


<h2>Requirement #4</h2>

<?php
    $my_file = file_get_contents("files/streetnames");
    $my_file2 = file_get_contents("files/streetdescriptions");
?>
<div style="display: inline-block; width: 20%">
    <?= $my_file ?>
</div>
<div style="display: inline-block; width: 70%">
    <?=$my_file2?>
</div>
    <hr>
    <!--end requirement #4-->



<h2>Requirement #5</h2>
<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
    $landmark1 = test_input($_POST['landmark1']);
    $landmark2 = test_input($_POST['landmark2']);
    $landmark3 = test_input($_POST['landmark3']);
    $landmark4 = test_input($_POST['landmark4']);
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
    Enter 4 Austin landmarks:<br/>
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        #1:<label for="landmark1">
            <input type="text" name="landmark1">
        </label>&nbsp;&nbsp;
        #2:<label for="landmark2">
            <input type="text" name="landmark2">
        </label>&nbsp;&nbsp;
        #3:<label for="landmark3">
            <input type="text" name="landmark3">
        </label>&nbsp;&nbsp;
        #4:<label for="landmark4">
            <input type="text" name="landmark4">
        </label>
        <input type="submit" value="Submit">
    </form>

<?php
$myFile = fopen("landmarks.txt","w+") or die("Unable to open file");
    if(isset($landmark1, $landmark2,$landmark3,$landmark4)) {
        $txt = $landmark1 . "\n";
        fwrite($myFile, $txt);
        $txt = $landmark2 . "\n";
        fwrite($myFile, $txt);
        $txt = $landmark3 . "\n";
        fwrite($myFile, $txt);
        $txt = $landmark4 . "\n";
        fwrite($myFile, $txt);
        fclose($myFile);
    }
?>

<hr>
<!-- end requirement #5-->


<h2>Requirement #6</h2>
<form method="post" action="toUpload.php" enctype="multipart/form-data">
    <label>Select file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
        </label>
    </form>
<hr>
<!-- end requirement #6-->


<h2>Requirement #7</h2>

    <br/>
    <p style="font-size: smaller; font-style: italic">Please note that you may have to refresh the
    page in order to set the cookie.</p>
<?php

if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie named '".$cookie_name."' is not set!";
}else{
    echo "Cookie named '".$cookie_name."' is set!<br/>";
    echo "The value is: ".$_COOKIE[$cookie_name];
}
?>
<hr>
<!--end requirement #7-->



<h2>Requirement #8</h2>

<?php
$_SESSION['city'] = 'Austin';
$_SESSION['state'] = 'Texas';
?>
Click to head to a new page and see the session variables that were set.
<button onclick="location.href='session_display.php';">New Page</button>
<br/>
<hr>
<!-- end requirement #8-->


<h2>Requirement #9</h2>

The following is a list of all of the PHP filters:
<br/>
<?php

function allPHPFilters(){
    $list = filter_list();
    foreach($list as $id=>$filter){
        echo $filter.' (#'. filter_id($filter).')<br/>';
    }
}
allPHPFilters();
?>
<hr>
<!-- end requirement #9-->


<h2>Requirement #10</h2>

<?php


if(isset($_POST['url']) && !empty($_POST['url'])){
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    if(!filter_var($url,FILTER_VALIDATE_URL)=== false){
        $validurl = "Address is valid";
    }else{?>
        <p style="color: darkred">Invalid Address</p> <?php
    }
}

if(isset($_POST['email']) && !empty($_POST['email'])){
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
        $validemail = 'Email is valid';
    }else{?>
        <p style="color: darkred">Invalid Email</p><?php
    }
}

?>Enter the following:<br/>
<form action="" method="post">
Email: <input type="text" name="email" /> &nbsp;&nbsp; URL <span style="font-style: italic; font-weight: lighter">
        (please include http(s)://)</span>:<input type="text" name="url" />
<input type="submit" value="submit" />
    </form>

<?php
if (isset($validurl) && isset($validemail)) {?>
    <p style="color: darkgreen"><?= $validemail;?></p>
    <p style="color: darkgreen"><?= $validurl;?></p><?php
}
?>
<hr>
<!--end requirement #10-->


<h2>Requirement #11</h2>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
    $filename= test_input($_POST['filename']);
    }
?>
<form action="index.php" method="post" >
    Enter file to locate. Please include extension:<input type="text" name="filename" id="filename">
    <input type="submit" value="submit">
<?php

if(!file_exists("$filename")) {
   echo("File not found");
} else {
    $myfile=fopen("$filename","r");?>
    <p style="color: darkgreen">
    <?= fread($myfile,filesize("$filename"))?></p>
    <?php
        fclose($myfile);
}
?><br/>
<hr>
<!-- end requirement #11-->

    <h2>Requirement #12</h2>

    <?php
    if($_SERVER['REQUEST_METHOD']=='POST') {
        $numberGuess= test_input($_POST['numberGuess']);
    }
    ?>

    Enter a number between 33 and 77 (inclusive)
    <form method="post" action="index.php">
        <input type="text" name="numberGuess"/>
        <input type="submit" value="submit"/>
    </form>

    <?php
            $min = 33;
            $max = 77;
            try {
                if (filter_var($numberGuess, FILTER_VALIDATE_INT,
                        array("options" => array("min_range" => $min, "max_range" => $max))) === false
                ) {
                    throw new Exception ("Your guess isn't within range.");
                }

                 else {
                    echo "Your guess is within range.";
                }
            }catch (Exception $exp){
                    echo "Error: ".$exp->getMessage();
                }
    ?>

    <hr><p>
        <a href="../index.html">return main page</a></p>
</body>
</html>