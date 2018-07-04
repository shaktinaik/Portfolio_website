<?php
require_once('scripts/mysql_connect.php');

$date = date("Y-m-d");
echo $date;
$userIp = $_SERVER['REMOTE_ADDR'];

echo $userIp;

$result = mysql_query("SELECT * FROM unique_visitors WHERE date = '$date'");

if($result -> num_rows == 0){
	mysql_query("INSERT INTO unique_visitors (date,ip) VALUES ('$date','$userIp')");
}else{
	$row = $result -> fetch_assoc();
	$newIP = "$row[ip]";
	if(!preg_match('/'.$userIp.'/',$newIP)){
		$newIP .= " $userIp";
	}
	mysql_query("UPDATE unique_visitors SET ip = '$newIP', views = views+1 WHERE date='$date'");
}
?>