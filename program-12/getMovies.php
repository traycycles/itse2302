<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/25/16
 * Time: 2:42 PM
 */
    include "connect.php";
    //to do ***sanitize**
    $q=$_POST['partialMovie'];
    $sql="SELECT name FROM movies WHERE name LIKE '$q%'";
    $res=mysqli_query($db, $sql);

    while($movieNamesArray = mysqli_fetch_array($res))
    {
        echo "<div>".$movieNamesArray['name']."</div>";
    }
