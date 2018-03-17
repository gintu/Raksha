<?php
require_once 'dbconnect.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if($_POST['name'] != "" && $_POST['email']!="" && $_POST['mobile'] != "" && $_POST['password']!= "" && $_POST['location']!="" && $_POST['abt']!="" ){
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$location = $_POST['location'];
$abt = $_POST['abt'];
$res = mysqli_query($con,$q);
$url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($location);
$output = file_get_contents($url); 
$out = json_decode($output, true);
$lat = $out['results'][0]['geometry']['location']['lat'];
$lng = $out['results'][0]['geometry']['location']['lng'];

$q = "INSERT INTO `volunteer` (`mobile`, `email`, `name`, `password`, `abt`, `location`, `lat`, `lng`) VALUES (".$mobile.", '".$email."','".$name."', '".$password."', '".$abt."', '".$location."', ".$lat.", ".$lng.");";
echo $q;
$res = mysqli_query($con,$q);
echo $res;
if($res)
  header('location:vollogin.php');
else
  echo "<body style=\"background-color:#c0392b;color:#3498db;\"><center>MisFortune<br><a href =\"index.html\">SafePlace</a></center>";
}
else
   echo "<body style=\"background-color:#c0392b;color:#3498db;\"><center>Missing Inputs<br><a href =\"index.html\">SafePlace</a></center>";
}
if(isset($_GET['mob'])){
    $m = $_GET['mob'];
    $q = "select * from volunteer where mobile = ".$m."";
    $res = mysqli_query($con,$q);
     if($res){
        $res_num = mysqli_num_rows($res);
        if($res_num >= 1){
            //$row=mysqli_fetch_assoc($res);
            echo 'Already Exists';
        }
        else{
            echo '';
        } 
     }
     else{
        echo '';   
     }
}
if(isset($_GET['email'])){
  $m = $_GET['email'];
  $q = "select * from volunteer where email = '".$m."'";
  $res = mysqli_query($con,$q);
   if($res){
      $res_num = mysqli_num_rows($res);
      if($res_num >= 1){
          //$row=mysqli_fetch_assoc($res);
          echo 'Already Exists';
      }
      else{
          echo '';
      } 
   }
   else{
      echo '';   
   }
}

