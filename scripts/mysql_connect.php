<?php

$db_host = "localhost:3306";
$db_username = "shakguqg";
$db_password = "power123$";
$db_name = "shakguqg_data";

$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
