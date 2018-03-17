<?php
require_once 'dbconnect.php';
if(isset($_POST['userName'],$_POST['password']))
{
    $uname = $_POST['userName'];
    $p = $_POST['password'];
    $res = mysqli_query($con,"select * from admins where username='".$uname."' and password = '".$p."'");
    if($res){
       $res_num = mysqli_num_rows($res);
       if($res_num != 0){
            $_SESSION['admin'] = $uname;
            header('location:admin_dash.php');
       }
       else{
          header('location:admin_login.php?message=Error in logging in');
       }
    }
    else
    {
        header('location:admin_login.php?message=Error in logging in');
    }
}
?>