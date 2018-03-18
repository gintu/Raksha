<?php
include_once("dbconnect.php");
session_start();
if(isset($_GET['id']))
{
    $query = "delete from responses where id = '".$_GET['id']."'";
    $rslt = mysqli_query($con,$query);
}
header("Location:../sendresponse.php",true);
?>
