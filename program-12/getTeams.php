<style>
    table {
        border: 1px solid black;
        text-align: center;
        width: 800px;
    }
    td, tr, th{

        border: 1px solid black;
        text-align: center;
    }
</style>
<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/30/16
 * Time: 2:13 PM
 */

include "connect.php";

$q= $_GET['q'];

$sql="SELECT * FROM teams WHERE teamname= '$q'";
$res=$db->query($sql);
if($res === false) {
    echo "Error: " . $db->error;
}else {
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Team Name</th>
            <th>City</th>
            <th>Best Player</th>
            <th>Website</th>
            <th>Year</th>
        </tr>
        <?php
        while ($row = $res->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['teamname'] ?></td>
                <td><?= $row['city'] ?></td>
                <td><?= $row['bestplayer'] ?></td>
                <td><?= $row['website'] ?></td>
                <td><?= $row['yearperformed'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <?php
}
