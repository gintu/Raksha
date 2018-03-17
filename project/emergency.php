<?php
$title="Emergency";
include_once("distance.php");
include_once("dbconnect.php");
include_once("header.php");
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$dbupdate="insert into tasks(lat,lng,date) values(".$lat.",".$lng.",CURDATE())";
//echo $dbupdate;
mysqli_query($con,$dbupdate);
header("location:panicbutton.php");

mysqli_close($con);
?>