
<?php

$servername="localhost";
$username="root";
$password="";
$database="db2";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection Unsuccessful ". mysqli_connect_error());
}

?>