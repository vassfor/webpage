
<?php

    $database_server_name="localhost";
    $database_user_name="root";
    $database_password= "";
    $database_name="db1";

    $conn=mysqli_connect($database_server_name,$database_user_name,$database_password,$database_name);

    if (!$conn) {
        die("Connection Unsuccessful ". mysqli_connect_error());
    }

?>