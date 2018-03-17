<?php
include_once("header.php");
if(!isset($_SESSION["admin"]))
{
    header("location:index.php");
}
?>
