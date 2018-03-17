<?php
$title="Emergency";
include_once("distance.php");
include_once("dbconnect.php");
include_once("header.php");
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$tasklist = "select * from tasks where lat=".$lat." and lng = ".$lng." and date = CURDATE()";
//echo $tasklist;
$itasklist = mysqli_query($con,$tasklist);
if ($itasklist==NULL) {

    $dbupdate="insert into tasks(lat,lng,date) values(".$lat.",".$lng.",CURDATE())";
    echo $dbupdate;
    mysqli_query($con,$dbupdate);
    $query="SELECT * from volunteer where task IS NULL";
    //echo $query;
    $result = mysqli_query($con,$query);
    if ($result) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if((distance($lat,$lng,$row['lat'],$row['lng']))<20)
            {
                // UPDATE FEED OF VOLUNTEER
                // NOTIFY VOLUNTEER ABOUT LOCATION
                // $qry = "update volunteer set task = scope_identity() where mobile = ".$row['mobile'];
                // $rslt = mysqli_query($con,$qry);
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