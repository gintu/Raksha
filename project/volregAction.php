<?php
require_once 'dbconnect.php';

if($_POST['name'] != "" && $_POST['email']!="" && $_POST['mobile'] != "" && $_POST['password']!= "" && $_POST['location']!="" && $_POST['abt']!="" ){
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$location = $_POST['location'];
$abt = $_POST['abt'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

$q = "INSERT INTO `volunteer` (`mobile`, `email`, `name`, `password`, `abt`, `location`, `lat`, `lng`) VALUES (".$mobile.", '".$email."','".$name."', '".$password."', '".$abt."', '".$location."', ".$lat.", ".$lng.");";
echo $q;

$res = mysqli_query($con,$q);

if($res)
  echo "SUCCESS";
else
  echo "Fail";
}
else
 echo "<body style=\"background-color:#c0392b;color:#3498db;\"><center>Missing Inputs<br><a href =\"index.php\">SafePlace</a></center>";
