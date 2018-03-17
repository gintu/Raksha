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
<<<<<<< HEAD
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
=======
 echo "<body style=\"background-color:#c0392b;color:#3498db;\"><center>Missing Inputs<br><a href =\"index.php\">SafePlace</a></center>";
>>>>>>> 5244e0b4c4a2c927a24e9e1c11beb33851e7a89c
