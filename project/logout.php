<?php
include_once("dbconnect.php");
session_destroy();
header("location:index.php");
?>