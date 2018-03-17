<?php
$title="Emergency";
include_once("distance.php");
include_once("dbconnect.php");
include_once("header.php");
include('way2sms-api.php');

function get_tiny_url($url)  {  
    $ch = curl_init();  
    $timeout = 5;  
    curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
    $data = curl_exec($ch);  
    curl_close($ch);  
    return $data;  
}

$lat = $_POST["lat"];
$lng = $_POST["lng"];
$dbupdate="insert into tasks(lat,lng,date) values(".$lat.",".$lng.",CURDATE())";

//echo $dbupdate;
//$r=mysqli_query($con,$dbupdate);
$getVol = mysqli_query($con,"select * from volunteer");

while($volAssoc = mysqli_fetch_assoc($getVol)){
   /* if( distance($lat, $lng, $volAssoc['lat'], $volAssoc['lng']) <20 ){
        
        $dir_link = 'https://www.google.co.in/maps/dir/'.$lat.','.$lng.'/'.$volAssoc['lat'].','.$volAssoc['lng'].'/';
        $new_url = get_tiny_url($dir_link);
        $sender = $volAssoc['mobile'];
        $message = "Alert TaskForce. Follow the link immediately... ".$new_url;
        
        sendWay2SMS ( '8281860141' , 'M2826E' , $sender , $message); 
    } */
   // $v = distance($lat, $lng, $volAssoc['lat'], $volAssoc['lng']);
    //echo $v.'<br>';
    echo $lat.' '.$lng.'<br>';
    echo $volAssoc['lat'].'<br>';
    echo $volAssoc['lng'].'<br>';
    echo $volAssoc['mobile'].'<br>';
    $v = distance($lat, $lng, $volAssoc['lat'], $volAssoc['lng']);
    echo $v.'=V value<br>';
    echo '<br>-------<br>';
}   
 
//header("location:panicbutton.php");

//mysqli_close($con);
?>