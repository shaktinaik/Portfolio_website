<?php

$db_host = "localhost:3306";
$db_username = "shakguqg";
$db_password = "power123$";
$db_name = "shakguqg_data";

$con = mysqli_connect("$db_host","$db_username","$db_password","$db_name");
$date = date("Y-m-d");
$userIp = $_SERVER['REMOTE_ADDR'];
$query = "SELECT * FROM `unique_visitors` WHERE `date` = '$date'";
$result = mysqli_query($con, $query);
if(!isset($_COOKIE['visitor'])){
	$time = strtotime('next day 00:00');
	setcookie('visitor','hey',$time);
}
if($result -> num_rows == 0){
	$insertQuery = "INSERT INTO `unique_visitors` (`date`,`ip`) VALUES ('$date','$userIp')";
	mysqli_query($con, $insertQuery);
}else{
	$row = $result -> fetch_assoc();
	if(!isset($_COOKIE['visitor']))
		$newIP = "$row[ip]";
	if(!preg_match('/'.$userIp.'/',$newIP)){
		$newIP .= " $userIp";
	}
	$updateQuery = "UPDATE `unique_visitors` SET `ip` = '$newIP', `views`=`views`+1 WHERE `date`='$date'";
	mysqli_query($con, $updateQuery);
	}
mysqli_close($con);
?>