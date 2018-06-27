<?php

$db_host = "68.65.122.53:3306";
$db_username = "shakguqg";
$db_password = "power123$";
$db_name = "shakguqg_data";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
