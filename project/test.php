<?php
$location = $_GET['loc'];
$url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($location);
$output = file_get_contents($url); 
$out = json_decode($output, true);
$lat = $out['results'][0]['geometry']['location']['lat'];
$lng = $out['results'][0]['geometry']['location']['lng'];

print_r($lat."<br>");
print_r($lng."<br>");
