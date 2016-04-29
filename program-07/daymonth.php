<h2 style="text-align: center">Requirement #3</h2>
    <?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/18/2016
 * Time: 11:29 PM
 */
    $daysofweek=$monthsofyear = '';
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $daysofweek =test_input($_GET['daysofweek']);
            $monthsofyear=test_input($_GET['monthsofyear']);
        }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>
Welcome!<br/>
You selected the day: <?=$daysofweek?><br/>
And you selected the month: <?=$monthsofyear?><br/>

<a href="index.php" style="text-decoration: none; color: crimson; font-size: larger">Go Back</a>
