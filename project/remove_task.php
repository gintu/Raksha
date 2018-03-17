<?php
include_once("dbconnect.php");
session_start();
if(isset($_GET['id']))
{
    $query = "delete from tasks where id = '".$_GET['id']."'";
    $rslt = mysqli_query($con,$query);
}
header("location:admin_dash.php");
?>
