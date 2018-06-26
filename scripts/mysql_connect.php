<?php

$db_host = "localhost:3306";
$db_username = "shakguqg";
$db_password = "power123$";
$db_name = "shakguqg_data";

@mysql_connect("$db_host","$db_username","$db_password") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name") or die ("No DataBase");

?>