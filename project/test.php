<?php
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

$dir_link = 'https://www.google.co.in/maps/dir/9.78888,78.4922752/9.28051,78.5190665/';
$new_url = get_tiny_url($dir_link);
$sender = '8281860141';
$message = "Alert TaskForce. Follow the link immediately... ".$new_url;

sendWay2SMS ( '8281860141' , 'M2826E' , $sender , $message); 