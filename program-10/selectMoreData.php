<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/8/2016
 * Time: 6:22 PM
 */
//error_reporting(1);
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (!isset ($_POST['teamsfields'])){?>
    <p style="color: red; font-size: larger">Select at least one fieldname!</p>
    <script>
    setInterval(function(){window.location.assign('index.php')}, 1500);
    </script>
    <?php
}else {
    $fields = array();
    //echo '<pre>';
    //print_r($fields[2]);//bestplayer
    foreach ($_POST['teamsfields'] as $value) {
        test_input($value);
        $fields[] = $value;
    }
    //$db = new mysqli("127.0.0.1", "root", "1234", "itse2302001019");
    $db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");
    if ($db->connect_error) {
        die('Failed to connect: ' . $db->connect_error);
    } else {
        for ($i = 0; $i < count($fields); $i++) {
            $sql = "SELECT $fields[$i] FROM teams";
            $res = $db->query($sql);
            if ($res === false) {
                echo "Error: " . $db->error;
            } else {
                $res->data_seek(0); //set position at the first row starting at the top
                while ($row = $res->fetch_assoc()) {
                    echo $fields[$i]."-". $row[$fields[$i]] . '<br/>';
                }
            }
        }
    }

    $db->close();
}
?>

<br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>




