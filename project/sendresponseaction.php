<?php
session_start();
$title = "Send response";
include_once("dbconnect.php");

if(isset($_POST['response']))
{
    $mob = $_SESSION["mobile"];
    $query = "insert into responses(taskid,mobile,name,response,date) values(".$_SESSION['xxtaskid'].",".$_SESSION["mobile"].",'".$_SESSION['user']."','".$_POST['response']."',CURDATE())";
    echo $query;
    $result = mysqli_query($con,$query);   
    header("location:".$_GET['returnurl'],true); 
}

?>