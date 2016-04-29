<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/28/2016
 * Time: 6:23 PM
 */
//$db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$","itse2302001019");
$db = new mysqli("127.0.0.1", "root", "1234","playplayplayplay");

if($db->connect_error){
    die('Failed to connect: '. $db->connect_error);
}
    $sql = "CREATE TABLE teams (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
teamname VARCHAR(30),
city VARCHAR(30),
bestplayer VARCHAR(50),
website VARCHAR(50),
yearperformed VARCHAR(4)
)";

if($db->query($sql)===TRUE){
    echo "Table 'teams' created successfully";
}else{
    echo "Error creating table: ". $db->error;
}
mysqli_close($db);
?>
<script>
    setInterval(function(){window.location.assign('index.php')}, 1500);
</script>


