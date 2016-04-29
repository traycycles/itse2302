<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/21/16
 * Time: 3:11 AM
 */
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$fieldname = test_input($_POST['fieldnames']);
$fieldData = test_input($_POST['fieldData']);
$id = test_input($_POST['id']);



if (!(preg_match('/^[a-zA-Z]*$/',$fieldData) ||
    preg_match('/(19|20)\d\d/', $fieldData) ||
    preg_match('/^[a-zA-Z]+( [a-zA-Z]+)$/', $fieldData)||
    preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $fieldData))){
    echo "Please enter valid field data.";
}else {

    //$db = new mysqli("127.0.0.1", "root", "1234", "itse2302001019");
    $db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");
    if ($db->connect_error) {
        die('Failed to connect: ' . $db->connect_error);
    } else {
        $sql = "UPDATE teams SET $fieldname=? WHERE id=$id";
        if ($stmt = $db->prepare($sql)) {
            $stmt->bind_param("s", $fieldData);
            $stmt->execute();
            if($db->affected_rows>0){
?>                   <p style="color: darkgreen; font-size: larger">UPDATED!!!</p>
<?php
            }else{
?>                  <p style="color: red; font-size: larger">Check your input!</p>
<?php       }
        }

    }
}
//$res->free();
$stmt->close();
$db->close();
?>





<script>
    setInterval(function(){window.location.assign('index.php')}, 1500);
</script>
