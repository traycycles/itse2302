<?php
include 'dbInstance.php';
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/28/2016
 * Time: 2:07 AM
 */

$db->close();

?>
A 'ping' will not be successful if the connection is closed. An error will be returned.<br/>
<?php

echo 'connection closed.'. '<br/>';
if ($db->ping()) {
    printf ("Our connection is ok!\n");
} else {
    printf ("Error: %s\n", $db->error);
    echo"Connection is closed";
}?>

<script>
   setInterval(function(){window.location.assign('index.php')}, 2000);
</script>
