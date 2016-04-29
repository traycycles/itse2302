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
$sql = "INSERT INTO movies VALUES
('Mad Max: Fury Road', 2015 ),
('Inside Out', 2015),
('Selma', 2015),
('Brooklyn',2015),
('Star Wars: Episode VII - The Force Awakens',2015),
('It Follows',2015),
('The Martian',2015),
('Mission: Impossible Rogue Nation',2015),
('Creed',2015),
('Amy',2015),
('Kurt Cobain: Montage Of Heck',2015),
('Bridge of Spies',2015),
('Ex Machina',2015)";

if($db->query($sql)===TRUE){
    echo "done";
}else{
    echo "Error : ". $db->error;
}
mysqli_close($db);
?>
<script>
    setInterval(function(){window.location.assign('index.php')}, 1500);
</script>


