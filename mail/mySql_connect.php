<?php

$db_host = "https://server165.web-hosting.com";
$db_username = "shakguqg";
$db_password = "power123$";
$db_name = "shakduqg_data";

@mysql_connect("$db_host","$db_username","$db_password") or die ("Could not connect to MySQL");
@mysql_select_db("$db_name") or die ("No DataBase");

echo "Successful Connection.";

?>