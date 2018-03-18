<?php
session_start();
$title = "Assign";
include_once("dbconnect.php");
include_once("header.php");

if(isset($_GET['id']))
{    
    $task = $_GET["id"];
    $mob = $_SESSION["mobile"];
    $query1 = "update volunteer set task=".$task." where mobile=".$mob;
    $result = mysqli_query($con,$query1);
    $query2 = "update tasks set strength=strength+1 where id=".$task;
    $result = mysqli_query($con,$query2);
    echo $query2;
}
    header("location: index2.php",true);
?>