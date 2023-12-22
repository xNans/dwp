<?php
require ("constants.php");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if(!$connection) {
    die("The webshop are down <br>");
}

$dbSelect = mysqli_select_db($connection, DB_NAME);
if(!$connection) {
    die("Error: ". mysqli_error($connection));
}
?>

