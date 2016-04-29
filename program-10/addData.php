<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/7/2016
 * Time: 10:28 PM
 */
$db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$","itse2302001019");
//$db = new mysqli("127.0.0.1", "root", "1234", "itse2302001019");

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

foreach ($_POST['teamname'] as $value){
    test_input($value);
    if (!(preg_match('/^[a-zA-Z]+( [a-zA-Z]+)$/', $value) ||
        preg_match('/^[a-zA-z]*$/', $value))) { // two names allowed separated by a space ('The Rams', etc.)
        $teamnameErr = 'Only letters and white space allowed';
        die('Error entering a Team Name: '.$teamnameErr);
    }
}
foreach ($_POST['city'] as $value){
    test_input($value);
    if (!(preg_match('/^[a-zA-Z]+( [a-zA-Z]+)$/', $value) ||
        preg_match('/^[a-zA-z]*$/', $value))){
        //two names allowed separated by space ('Los Angeles', 'El Paso', etc.)
        $cityErr = 'Only letters and white space allowed';
        die('Error entering a City Name: '.$cityErr);
    }
}
foreach ($_POST['bestplayer'] as $value){
    test_input($value);
    if (!(preg_match('/^[a-zA-Z]+( [a-zA-Z]+)$/', $value) ||
        preg_match('/^[a-zA-z]*$/', $value))){
        //surname and family name allowed. No periods. Only one white space.
        $bestplayerErr = 'Only letters and white space allowed';
        die('Error entering a Best Player Name: '.$bestplayerErr);
    }
}
foreach ($_POST['yearperformed'] as $value){
    test_input($value);
    if (!preg_match('/(19|20)\d\d/', $value)) {
        $yearErr = 'four digit year 20th-21st century';
        die('Error entering a valid year: '.$yearErr);
    }
}
foreach ($_POST['website'] as $value){
    test_input($value);
    //will work for general type www.xyz.com emails
    if (!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $value)) {
        $websiteErr = "Invalid URL";
        die('Error entering a valid year: '.$websiteErr);
    }
}
$teamname = $_POST['teamname'];
$city = $_POST['city'];
$bestplayer = $_POST['bestplayer'];
$website = $_POST['website'];
$yearperformed = $_POST['yearperformed'];


if(mysqli_connect_error()){
    die('Failed to connect: '. mysqli_connect_error());
}
else {
    for ($i = 0; $i < 4; $i++) {
        $sql = "INSERT INTO teams (teamname, city, bestplayer, website, yearperformed)
          VALUES(?,?,?,?,?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("sssss", $teamname[$i], $city[$i], $bestplayer[$i], $website[$i], $yearperformed[$i]);
        if($stmt->execute()=== TRUE){
            echo "New record created successfully<br/>";
            if($i == 3) {
                $last_id = $db->insert_id;
                echo "last record's id is: ". $last_id;
            }
        }else{
            echo "Error: ". $stmt->error;
        }
    }
}
$stmt->close();
$db->close();
?>


<br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
