<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/18/2016
 * Time: 12:35 AM
 */

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 6</title>
    <link href="program6.css" rel="stylesheet">
</head>
<body>
<?php
define('PLANET_1','Mercury');
define('PLANET_2','Venus');
define('PLANET_3','Earth');
define('PLANET_4','Mars');
define('PLANET_5','Jupiter');
define('PLANET_6','Saturn');
define('PLANET_7','Uranus');
define('PLANET_8','Neptune');
define('PLANET_9','Pluto');
function displayPlanets()
{
    ?>
        <ul id="planetDisplay">
            <li><?= PLANET_1 ?></li>
            <li><?= PLANET_2 ?></li>
            <li><?= PLANET_3 ?></li>
            <li><?= PLANET_4 ?></li>
            <li><?= PLANET_5 ?></li>
            <li><?= PLANET_6 ?></li>
            <li><?= PLANET_7 ?></li>
            <li><?= PLANET_8 ?></li>
            <li><?= PLANET_9 ?></li>
        </ul>

<?php
}
displayPlanets();
?>
<h1 style="padding-top: 50px">Welcome to Program 6</h1>
<hr>
<h2>Requirement #1</h2>

Planets displayed horizontally across the top of the page.
<hr>
<!-- end requirement #1-->


<h2>Requirement #2</h2>

<?php
    $currentMonth = date('M');
function req2_weather($currentMonth){
    switch($currentMonth){
        case $currentMonth == 'Dec':
        case $currentMonth =='Jan':
        case $currentMonth =='Feb':
            echo 'It is chilly winter';
            break;
        case $currentMonth == 'Mar':
        case $currentMonth == 'Apr':
        case $currentMonth == 'May':
            echo 'A beautiful Spring';
            break;
        case $currentMonth == 'Jun':
        case $currentMonth == 'Jul':
        case $currentMonth == 'Aug':
            echo 'The heat of summer';
            break;
        case $currentMonth == 'Sep':
        case $currentMonth == 'Oct':
        case $currentMonth == 'Nov':
            echo 'Fabulous Fall';
            break;
    }
}
?>
The following is displayed about the weather
based on the current month:
    <?php
        req2_weather($currentMonth);

?>
<hr>
<!--end requirement #2-->


<h2>Requirement #3</h2>

<?php function req3_state($capital){
    switch ($capital){
        case$capital=='Richmond':
            echo $capital. ' is the Capital of Virginia';
            break;
        case$capital=='Austin':
            echo $capital. 'is the Capital of Texas';
            break;
        case$capital=='Baton Rouge':
            echo $capital. ' is the Capital of Louisiana';
            break;
        case$capital=='Sacramento':
            echo $capital. ' is the Capital of California';
            break;
        case$capital=='Arizona':
            echo $capital.' is the Capital of Arizona';
            break;
        case$capital=='Springfield':
            echo $capital.' is the Capital of Illinois';
            break;
        case$capital=='Denver':
            echo $capital. ' is the Capital of Colorado';
            break;
        case$capital=='Montgomery':
            echo $capital. ' is the Capital of Alabama';
            break;
        case$capital=='Atlanta':
            echo $capital. ' is the Capital of Georgia';
            break;
        default:
            echo "I'm not too sure about that one.";
            break;
    }
}
req3_state('Montgomery')?>
<hr>
<!--end requirement #3-->


<h2>Requirement #4</h2>

<?php
$currentDay = date('d');
//echo gettype($currentDay);

function req4_whileHello($currentDay){
    $i = 0;
    echo "It is day #".$currentDay." of the month: ";
    while($i < (int)$currentDay){
        echo "Hello\t";
        $i ++;
    }
}
req4_whileHello($currentDay);
?>
<hr>
<!--end requirement #4-->



<h2>Requirement #5</h2>
<?php
    function req5_doHello($currentDay){
        $i = 0;
        echo "It is day #".$currentDay." of the month: ";
        do{
            echo "Hello\t";
            $i ++;
        }while($i < (int)$currentDay);
}
req5_doHello($currentDay);
?>
<!--end requirement #5-->


<h2>Requirement #6</h2>
<?php

for($i = 0; $i < 25; $i++){
    $numSquared = pow(($i+1), 2);
    echo ($i+1).' squared is '.$numSquared.'.<br/>';
}
?>
<hr>
<!--end requirement #6-->



<h2>Requirement #7</h2>
<?php
$monthsOfYear = array(
        'January', 'February','March', 'April', 'May', 'June','July',
        'August', 'September', 'October', 'November','December');
function req7_foreach($someArray){
    foreach($someArray as $val) {
        echo $val . ' ';
    }
}
req7_foreach($monthsOfYear);
    ?>
<hr>
<!--end requirement #7-->


<h2>Requirement #8</h2>
<?php

function req8_football($playerName,$team ){
    echo $playerName. " plays for the ".$team .".<br/>";
}
req8_football('Tom Brady', 'Patriots');
req8_football('Cam Newton', 'Panthers');
req8_football('Andy Dalton', 'Bengals');
req8_football('Aaron Rodgers', 'Packers');
req8_football('Ben Roethlisberger', 'Steelers');
?>
<hr>
<!--end requirement #8-->


<h2>Requirement #9</h2>

<?php
function req9_divis($num1, $num2){
    if($num2 == 0){
        echo "There is an error. The denominator is 0.";
    }else{
        echo "The result of ". $num1. " divided by ".$num2." is ". ($num1/$num2).'<br/>';
    }
}
req9_divis(3, 5);
req9_divis(9, 3);
req9_divis(10, 5);
req9_divis(200, 5);
req9_divis(3, 0);
?>
<hr>
<!--end requirement #9-->


<h2>Requirement #10</h2>
<?php
$carsArray = array(
    'Audi'=>'Q5',
    'Chevrolet'=>'Silverado',
    'Toyota'=>'Camry',
    'Honda'=>'Accord',
    'Ford'=>'Escape',
    'Cadillac'=>'SRX',
    'Acura'=>'TLX'
);
foreach($carsArray as $maker=>$auto){
    echo $maker.' makes the best-selling '. $auto.'.<br/>';
}
?>
<hr>
<!--end requirement #10-->


<h2>Requirement #11</h2>
<?php
function carSort($array){
    ksort($array);
        foreach ($array as $key=>$val){
            echo $key.' makes the best-selling '.$val.'.<br/>';
        }
}
echo 'The keys (manufacturers) have been sorted in ascending order:<br/><br/>';
 carSort($carsArray);
?>
<!--end requirement 11-->


<h2>Requirement #12</h2>
<?php
function carValSort($array)
{
    $lowerCaseArray = []; //had to switch to lowercase because some values were all caps and were
                            //sorted out of alphabetical order to lowercase counterparts. Then returned back to uppercase.
    $backToRegular =[];
    foreach ($array as $key => $val) {
        $newVal = strtolower($val);
        $lowerCaseArray[$key]=$newVal;
    }

    asort($lowerCaseArray);
        foreach ($lowerCaseArray as $key=>$val) {
            $newVal = ucwords($val);
            $backToRegular[$key] = $newVal;
        }
            foreach($backToRegular as $key=>$val){
                echo $val.' is the best-selling car made by '.$key.'.<br/>';
        }
}
echo 'The values (models) have been sorted in ascending order:<br/><br/>';
carValSort($carsArray);
?>
<hr>
<!--end requirement 12-->


<h2>Requirement #13</h2>
<?php
function req13_superGlobals(){
    echo 'The name (and path) of the currently executing
    PHP file is: '. $_SERVER['PHP_SELF'].'<br/>';

    echo 'The IP address of the host
    server is: '. $_SERVER['SERVER_NAME'].'<br/>';

    echo 'The method of request sent to the
    server is: '.$_SERVER['REQUEST_METHOD'].'<br/>';

    echo 'The IP address of the browser viewing the
    page: '.$_SERVER['REMOTE_ADDR'];
}
req13_superGlobals();
?>
<hr>
<!--end requirement 13-->


<h2>Requirement #14</h2>

<?php
$carsArray2 = array(
    'Audi'=>'Q5',
    'Chevrolet'=>'Silverado',
    'Toyota'=>'Camry',
    'Honda'=>'Accord',
    'Ford'=>'Escape',
    'Cadillac'=>'SRX',
    'AMC'=>'Pacer',
    'Suzuki'=>'Samurai'

);

function whatDiff($array1, $array2){
    $req14_result = array_diff_assoc($array1,$array2);
    return $req14_result;
}
?>
<div style="inline">
    <div style="width: 25%; display: inline-block" >
        Array #1:
            <pre>
                <?php
                print_r($carsArray);?>
            </pre>
    </div>

    <div style="width: 25%; display: inline-block">Array #2:
            <pre>
                <?php
                print_r($carsArray2);?>
            </pre>
    </div>
    <div style="width: 25%; display: inline-block">
        The elements in Array #1 NOT in Array #2:<br/>
            <pre>
                <?php
                print_r(whatDiff($carsArray,$carsArray2));?>
            </pre>
        The elements in Array #2 NOT in Array #1:<br/>
        <pre>
            <?php
            print_r(whatDiff($carsArray2,$carsArray));?>
            </pre>
                </div>
    <hr>
    <!--end requirement #14-->


    <h2>Requirement #15</h2>
    <?php
    function whatSame($array1, $array2){
    $req15_result = array_intersect_assoc($array1,$array2);
    return $req15_result;
    }
    ?>
    <div style="inline">
        <div style="width: 25%; display: inline-block" >
            Array #1:
            <pre>
                <?php
                print_r($carsArray);?>
            </pre>
        </div>

        <div style="width: 25%; display: inline-block">Array #2:
            <pre>
                <?php
                print_r($carsArray2);?>
            </pre>
        </div>
        <div style="width: 25%; display: inline-block">
            The elements in Array #1 Matching Array #2:<br/>
            <pre>
                <?php
                print_r(whatSame($carsArray,$carsArray2));?>
            </pre>
        </div>
        <hr>
        <!--end requirement #15-->



    <h2>Requirement #16</h2>
        True or False:<br/>
        Searching to see if a key ('AMC') is present in the original Cars Array (Requirement #10):<br/>
        <?php
            function isItThere($key, $array){
                if(array_key_exists($key, $array)){
                    echo "True";
                }
                else{?>
                    <span style="color:red"><?='False'?></span>
                <?php
                }
            }
        isItThere('AMC', $carsArray);
        ?>
        <hr>
    <!--end requirement #16-->


    <h2>Requirement #17</h2>

        <?php
        function isItThere2($value, $array){
            if(in_array($value, $array)){
                $key = array_search($value, $array);?>
                Found Key: <span style="color: blue"><?=$key?></span>
            <?php
            }
            else{
                ?>
                <span style="color:red"><?='False'?></span>
                <?php
            }
        }
        isItThere2('Camry', $carsArray);
        ?>
        <hr>
        <br/><br/>
        <p>
            <a href="../index.html">return main page</a></p>



</body>
</html>