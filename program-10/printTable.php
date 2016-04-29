<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/9/2016
 * Time: 10:47 PM
 */
function printTable()
{
//  $db = new mysqli("127.0.0.1", "root", "1234", "itse2302001019");
    $db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");

    if ($db->connect_error) {
        die('Failed to connect: ' . $db->connect_error);
    } else {
        $sql = "SELECT * FROM teams";
        $res = $db->query($sql);
        if ($res === false) {
            echo "Error: " . $db->error;
        } else {
            $res->data_seek(0);
            echo "<table><tr><th>ID</th><th>Team Name</th><th>City</th><th>Best Player</th><th>Website</th><th>Year Performed</th></tr>";
            while ($row = $res->fetch_assoc()) {
                echo "<tr><td>" . $row['id'] . "</td><td>" . $row['teamname'] . "</td><td>" . $row['city'] . "</td><td>" . $row['bestplayer'] .
                    "</td><td>" . $row['website'] . "</td><td>" . $row['yearperformed'] . "</td></tr>";
            }
            echo "</table>";
        }
    }
    $db->close();
}

function printThreeRows(){
    {
        $db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");

        if ($db->connect_error) {
            die('Failed to connect: ' . $db->connect_error);
        } else {
            $sql = "SELECT * FROM teams LIMIT 3";
            $res = $db->query($sql);
            if ($res === false) {
                echo "Error: " . $db->error;
            } else {
                $res->data_seek(0);
                echo "<table><tr><th>ID</th><th>Team Name</th><th>City</th><th>Best Player</th><th>Website</th><th>Year Performed</th></tr>";
                while ($row = $res->fetch_assoc()) {
                    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['teamname'] . "</td><td>" . $row['city'] . "</td><td>" . $row['bestplayer'] .
                        "</td><td>" . $row['website'] . "</td><td>" . $row['yearperformed'] . "</td></tr>";
                }
                echo "</table>";
            }
        }
        $db->close();
    }


}