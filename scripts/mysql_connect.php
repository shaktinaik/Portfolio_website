<?php

$db_host = "localhost:3306";
$db_username = "shakguqg";
$db_password = "power123$";
$db_name = "shakguqg_data";

$conn = mysql_connect($db_host, $db_username, $db_password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}
$db_select = mysql_select_db($db_name,$conn);

if(!$db_select){
    die("Database selection failed: " . mysql_error());
}

?>
