<?php
/**
 * Created by PhpStorm.
 * User: tracy
 * Date: 3/25/16
 * Time: 2:37 PM
 */

$db = new mysqli("lineofcode.com", "itse2302001019", "n3U%*Fh$", "itse2302001019");
//$db = new mysqli('127.0.0.1', 'root','1234','itse2302001019');

if ($db->connect_error) {
    die('Failed to connect: ' . $db->connect_error);
}
