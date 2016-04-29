<?php
include 'dbInstance.php';


function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

foreach ($_POST['teamname'] as $value){
    test_input($value);
    if (!preg_match('/^[a-zA-z]*$/', $value)) {
        $teamnameErr = 'Only letters and white space allowed';
        die('Error entering a Team Name: '.$teamnameErr);
    }
}
foreach ($_POST['city'] as $value){
    test_input($value);
    if (!preg_match('/^[a-zA-z]*$/', $value)) {
        $cityErr = 'Only letters and white space allowed';
        die('Error entering a City Name: '.$cityErr);
    }
}
foreach ($_POST['bestplayer'] as $value){
    test_input($value);
    if (!preg_match('/^[a-zA-z]*$/', $value)) {
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
//echo'<pre>';
//print_r($teamname);
//print_r($city);
//print_r($bestplayer);
//print_r($website);
//print_r($yearperformed);



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

/**
 * Below is the "insert multiple technique"
 * I couldn't locate a similar method to use with prepared statements, but
 * coudn't looping as above work efficiently?
 */
//$sql ='';
//for($i= 0; $i < 4; $i ++) {
//    $sql .= "INSERT INTO teams(teamname, city, bestplayer, website, yearperfomed)
//      VALUES('$teamname[$i]', '$city[$i]', '$bestplayer[$i]', '$website[$i]', $yearperformed[$i]);";
//}
//
//if($db->multi_query($sql)){                 //mysqli_multi_query($db, $sql)){
//    echo "New records created successfully<br/>";
////
//}
//else{
//    echo "insert failed in multi_query, error: ". $sql. "<br/>". $db->error;
//}
////
mysqli_close($db);
?>
<br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
