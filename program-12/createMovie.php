<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 4/2/2016
 * Time: 9:12 PM
 */
//$db = new mysqli("127.0.0.1", "root", "1234","itse2302001019");
$db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");

if($db->connect_error){
    die('Failed to connect: '. $db->connect_error);
}
$sql = "CREATE TABLE movies (
name VARCHAR(50),
year  VARCHAR(4)
)";

if($db->query($sql)===TRUE){
    echo "Table 'movies' created successfully";
}else{
    echo "Error creating table: ". $db->error;
}
mysqli_close($db);
?>
<script>
    setInterval(function(){window.location.assign('index.php')}, 1500);
</script>


