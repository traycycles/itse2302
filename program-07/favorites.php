<h2 style="text-align: center">Requirement #5</h2>
<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/19/2016
 * Time: 3:43 PM
 */


    $name = $movie = $food = $season = $comments = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name =test_input($_POST['name']);
    $movie=test_input($_POST['movie']);
    $food=test_input($_POST['food']);
    $season=test_input($_POST['season']);
    $comments=test_input($_POST['comments']);
    }
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
Welcome <?=$name?>!<br/>
Your favorite movie is: <?=$movie?><br/>
Your favorite food is: <?=$food?><br/>
Your favorite season is: <?=$season?><br/>
<?php
if ($comments !==''){
    echo "Your comments are: <br/>".$comments;
}
else{
    echo "You have no comments.";
}
?>
<br/><br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
