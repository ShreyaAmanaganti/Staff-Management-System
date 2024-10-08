<?php

$servername = "localhost";
$dBUsername = "root";
$dbPassword = "";
$dBName = "staff";

$conn = mysqli_connect($servername, $dBUsername, $dbPassword, $dBName);

if(!$conn){
	echo "Database Connection Failed";
}
?>