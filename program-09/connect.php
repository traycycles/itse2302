<?php
/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 2/28/2016
 * Time: 2:05 AM
 */
include 'dbInstance.php';
//$db = new mysqli("127.0.0.1", "root", "","itse2302001019");
//(local host, username, userpw, db) connects to db and returns a connex
if($db->connect_error){
    die("Failed to connect: ".$db->connect_error);
}
else{
    echo 'Connected!<br/>';
    if ($db->ping()) {
        printf ("Our connection is ok!\n");
    } else {
            printf ("Error: %s\n", $db->error);
        }
    switch (connection_status())
        {
        case 0:
            $txt = 'Connection is in a normal state';
            break;
        case 1:
            $txt = 'Connection aborted';
            break;
        case 2:
            $txt = 'Connection timed out';
            break;
        case 3:
            $txt = 'Connection aborted and timed out';
            break;
        default:
            $txt = 'Unknown';
            break;
    }?>
    <p style="font-weight: bold"><?=$txt?></p>
<?php
}
?>
<script>
    setInterval(function(){window.location.assign('index.php')}, 1500);
</script>
