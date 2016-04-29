<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/8/2016
 * Time: 4:33 PM
 *
 * */

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");
//$db = new mysqli("127.0.0.1", "root", "1234", "itse2302001019");

$fieldname = test_input($_POST['fieldnames']);


if($db->connect_error){
    die('Failed to connect: '. $db->connect_error);
}
else {
        $sql = "SELECT $fieldname FROM teams";
        $res = $db->query($sql);
        if($res === false){
            echo "Error: ". $db->error;
        }else{
            $res->data_seek(0); //set position at the first row starting at the top
            while($row = $res->fetch_assoc()){
                echo  $row[$fieldname].'<br/>';
            }
        }
    }

$res->free(); //cleaning $res
$db->close();
?>

<br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
