<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thompson: Program 5</title>
    <link href="program5.css" rel="stylesheet">
</head>
<body>
    <hr>
    <h1>Program 5</h1>
    <hr>
    <h2>Requirement #1</h2>
    <h1><?='Welcome to PHP!'?></h1>

    <?php
        $name = 'Tracy Thompson';
        $x = pi()*(pow(33,2));
    ?>

    <h2 style="text-align: left"><?=$name?></h2>

    <?php
        echo $x . "<br/>";
    ?>
    <hr>
    <!--end requirement 1-->




    <h2>Requirement #2</h2>
<?php
$gVariable1 = "My name is ";
$gVariable2 = "Tracy";
$gNumVar1 = 2 + 2;
$gNumVar2 = 1 + 1;
echo "Here's a string using two global variables: ". $gVariable1 . $gVariable2. ".<br/>";
echo var_dump($gVariable1).var_dump($gVariable2)." <br/><br/>";
echo "Here are two numeric global variables: ". $gNumVar1 . " and ". $gNumVar2."<br/>";
echo var_dump($gNumVar1).var_dump($gNumVar2)." <br/><br/>";

function req2_myFunction(){
    $lVariable1 = "My favorite food is ";
    $lVariable2 = " sushi.";
    $lNumVar1 = 3 + 3;
    $lNumVar2 = 4 + 4;


    echo "Since the function was called, here's a string using two local variables: ". $lVariable1 . $lVariable2."<br/>";
    echo var_dump($lVariable1).var_dump($lVariable2)." <br/><br/>";
    echo "And here are two numeric local variables: ". $lNumVar1 . " and ". $lNumVar2."<br/>";
    echo var_dump($lNumVar1).var_dump($lNumVar2)." <br/><br/>";
}
req2_myFunction();

function req2_myStaticOne()
{
    static $num = 0;
    echo $num;
    $num++;
}
echo "The following is the use of a static variable:<br/>";
req2_myStaticOne();
echo "<br/>";
req2_myStaticOne();
echo "<br/>";
req2_myStaticOne();
echo "<br/>";


function req2_myStaticTwo()
{
    static $num2 = 0;
    echo $num2;
    $num2+=2;
}
echo "The following is the use of a static variable:<br/>";
req2_myStaticTwo();
echo "<br/>";
req2_myStaticTwo();
echo "<br/>";
req2_myStaticTwo();
echo "<br/>";
?>
    <hr>
<!--end requirement 2-->



    <h2 style="padding-bottom: 100px">Requirement #3</h2>
<?php
//
class DaysofWeek
{
    function DaysofWeek()
    {
        $daysOfWeek = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
        return $daysOfWeek;
    }
}
$DaysofWeek = new DaysofWeek();
$days = $DaysofWeek->DaysofWeek();
?>
    The following are the contents of the daysOfTheWeek array called by a function in the DaysofWeek class:<br/>
    <pre>
        <?php print_r($days);
        ?>
    </pre>
<hr>
<!--end requirement #3-->



<h2>Requirement #4</h2>

    <?php
        $req4String = "abcdefghijklmnopqrstuvwxyz JavaScript and PHP are so much fun!";
        $req4StringLength= strlen($req4String);
        $req4StringWords = str_word_count($req4String);
        $req4StringPosition = strpos($req4String,'PHP') + 1;
        $req4StringReplace = str_replace('so much fun', 'wonderful', $req4String);
    echo "The following string was created and assigned to a variable: <br/>". $req4String."<br/>";
    echo "It has a length of ".$req4StringLength . " characters.<br/>";
    echo "It has ". $req4StringWords ." whole words (including the alphabet as a word).<br/>";
    echo "The word 'PHP' begins at the ".$req4StringPosition."rd character.<br/>";
    echo $req4StringReplace."<br/>";
    ?>
    <hr>
    <!-- end requirement #4-->
    <h2>Requirement #5</h2>


    <?php
        $req5String = "Javascript and PHP are so much fun!";
        echo "String: ".$req5String."<br/>";
        $req5Array1 = explode(" ", $req5String);
        $req5Array2 = str_split($req5String);
    ?>
    String above converted to Array (by word & by letter, respectively):
    <pre>
       <?php
            print_r($req5Array1);
            print_r($req5Array2);
       ?>
    </pre>
    <hr>
    <!-- end requirement #5-->


    <h2>Requirement #6</h2>
    <?php
    $daysString = implode(" ",$days)?>
The following Array:
    <pre>
        <?php
            print_r($days);
        ?>
        </pre>
        Converted to string: <?=$daysString?>
    <hr>
    <!--end requirement #6-->


    <h2>Requirement #7</h2>

    <br style="padding-top: 100px"/>
    A sentence of formatted output using the variables from requirement #2:<br/>

    <?php
    printf("Hello there.  %s %s.",$gVariable1, $gVariable2);
    ?>
    <hr>
    <!-- end requirement #7-->


    <h2 style="padding-bottom: 100px">Requirement #8</h2>

    <?php
        $req8String="JavaScript and PHP are so much fun!";
        $req8StringDecoded = utf8_decode($req8String);
        $req8uniqChars = count_chars($req8StringDecoded,3);
        $req8unusedChars = count_chars($req8String,4);
        $req8uniqCharsArray = count_chars($req8String, 1);
    ?>

<p>
    The following string: <span style="font-weight: bold"><?=$req8StringDecoded?></span> has been decoded
    to the ISO-8859-1 charset.<br/><br/>
    It has the following unique characters: <?= $req8uniqChars?><br/><br/>
    A string listing of the characters not used: <?=$req8unusedChars?><br/><br/>
    An array that displays the ASCII code of each (character => occurrences):
    <pre>
         <?php
         print_r($req8uniqCharsArray);
         ?>
    </pre>
    <hr>
    <!--end requirement #8-->


    <h2>Requirement #9</h2>
<div style="padding-left: 100px">
    <?php
    $req9Var = "
<&
¢
£
¥
€
©
>"
    ?>
    <pre>
        <?php print $req9Var;
            ?>
    </pre>
    </div>
    <hr>
    <!-- end requirement #9-->



    <h2>Requirement #10</h2>

    <?php
    $req10String = $req5String;
    $req10StringShuffled = str_shuffle($req10String);
    echo $req5String. "<br/>";
    echo "Shuffled: ". $req10StringShuffled;
?>
<hr>
    <!-- end requirement #10-->


    <h2 style="padding-bottom: 100px">Requirement #11</h2>

    <?php
    $req11String = $req10String;
    $req11StringUC = ucwords($req11String, " ");
    echo $req11String. "<br/>";
    echo "First character of each word to uppercase: ". $req11StringUC;
    ?>
<hr>
    <!-- end requirement #11-->

    <h2>Requirement #12</h2>

    <?php
        $req12StrArray = $req5Array1;
        echo $req11String."<br/><br/>";
        echo "Printing out each word individually on  separate line:<br/>";

        foreach($req12StrArray as $words){
            echo $words."<br/>";
        }
    ?>
<hr>
    <!--end requirement #12-->




    <p>
        <a href="../index.html">return main page</a></p>

</body>
</html>