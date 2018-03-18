<?php
require_once 'dbconnect.php';
if(isset($_POST['mob'],$_POST['pass'])){
    $m = $_POST['mob'];
    $p = $_POST['pass'];

    $res = mysqli_query($con,"select * from volunteer where mobile = ".$m." and password = '".$p."'");
    if($res){
        $user = mysqli_fetch_assoc($res);
       $res_num = mysqli_num_rows($res);
       if($res_num == 1){
            session_start();
            $_SESSION['mobile'] = $m;
            $_SESSION['user'] = $user['name'];
            header('location:index2.php');
       }
       else{
           header('location:vollogin.php?error1=&vol=&error2=Invalid Password');
       } 
    }
    else
        header('location:vollogin.php?error1=Invalid User&vol=&error2');
}
if(isset($_GET['mob'])){
    $m = $_GET['mob'];
    $q = "select * from volunteer where mobile = ".$m."";
    $res = mysqli_query($con,$q);

    if($res){
        $res_num = mysqli_num_rows($res);
        if($res_num == 1){
            $row=mysqli_fetch_assoc($res);
            echo "Welcome ".$row["name"];
        }
        else{
            echo 'Invalid Mobile Number';
        } 
     }
     else{
        echo 'Invalid Mobile Number';   
     }
}