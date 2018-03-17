<?php
$title="Emergency";
include_once("distance.php");
include_once("dbconnect.php");
include_once("header.php");
$lat = $_POST["lat"];
$lng = $_POST["lng"];
// $dbupdate="insert into tasks(lat,lng,date) values(".$lat.",".$lng.",date())";
// echo $dbupdate;
$query="SELECT * from volunteer where task IS NULL";
echo $query;
$result = mysqli_query($con,$query);
if ($result) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if((distance($lat,$lng,$row['lat'],$row['lng']))<20)
        {
            $qry = "update volunteer set task=11 where mobile = ".$row['mobile'];
            $reslt = mysqli_query($con,$qry);
        }
    }
} else {
    echo "0 results";
}
mysqli_close($con);
?>