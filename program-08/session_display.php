<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/24/2016
 * Time: 11:36 PM
 */
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <h2 style="text-align: center; padding-bottom: 100px">Requirement #8</h2>
    <?php
        echo "City is ".$_SESSION['city'].".<br/>";
        echo "State is ".$_SESSION['state'].".<br/>";
    ?>
<hr>
<br/><a href="index.php" style="color: darkred; font-size: larger">Go Back</a>
</body>
</html>

</html>
