<?php
$title="Emergency";
include_once("distance.php");
include_once("dbconnect.php");
include_once("header.php");
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$tasklist = "select * from tasks where lat like ".$lat." and lng like ".$lng." and date like CURDATE()";
//echo $tasklist;
$itasklist = mysqli_query($con,$tasklist);
if (!isset($itasklist)) {

    $dbupdate="insert into tasks(lat,lng,date) values(".$lat.",".$lng.",CURDATE())";
    //echo $dbupdate;
    mysqli_query($con,$dbupdate);
    $query="SELECT * from volunteer where task IS NULL";
    //echo $query;
    $result = mysqli_query($con,$query);
    if ($result) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if((distance($lat,$lng,$row['lat'],$row['lng']))<20)
            {

            }
        }
    } else {
        echo "0 results";
    }

}
else
echo "Task already issued. We're on it.";
mysqli_close($con);
?>