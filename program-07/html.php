<h2 style="text-align: center">Requirement #7</h2>
<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/19/2016
 * Time: 3:43 PM
 */


$color=$city=$veggies[]='';

if($_SERVER['REQUEST_METHOD']=='POST') {
    if (!empty($_POST['veggies'])) {
        $checkedveggy = count($_POST['veggies']);
        for ($i = 0; $i < $checkedveggy; $i++) {
            $veggies[$i] = '';
        }
    }

    $color = test_input($_POST['color']);
    $city = test_input($_POST['city']);
    if (!empty($_POST['veggies'])) {
        foreach ($_POST['veggies'] as $veggy) {
            test_input($veggy);
        }
    }
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
The hexidecimal representation of the color you selected was <?=$color?>.<br/>
The hidden value of the hidden identifier of 'city' was <?=$city?><br/>

<?php
if(isset($_POST['veggies'])){
    foreach($_POST['veggies'] as $veggy) {
        echo 'You like eating '.$veggy.'<br/>';
    }
}
else
echo "You don't like the vegetables listed."
?>
<br/>
<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
