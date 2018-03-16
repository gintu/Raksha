<?php
require_once 'dbconnect.php';

if(isset($_POST['mob'],$_POST['pass'])){
    $m = $_POST['mob'];
    $p = $_POST['pass'];

    $res = mysqli_query($con,"select * from volunteer where mob = ".$m." and password = '".$p."');
    $res_num = mysqli_num
}