<?php
session_start();
$title = "Send response";
include_once("dbconnect.php");

if(isset($_POST['response']))
{
    $mob = $_SESSION["mobile"];
    $query = "insert into responses(taskid,name,response,date) values(".$_GET['taskid'].",'Admin','".$_POST['response']."',CURDATE())";
    echo $query;
    $result = mysqli_query($con,$query);   
    header("location:sendresponse.php",true); 
}

?>