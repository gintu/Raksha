<?php
$title="Emergency";
include_once("project/dbconnect.php");
include_once("header.php");
include_once("distance.php");
$lat = $_POST["lat"];
$lng = $_POST["lng"];
$query="SELECT * from volunteer where ".."";
echo $query;
$result = mysqli_query($con,$query);
if ($result) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "'Name: '" . $row['name'];
    }
} else {
    echo "0 results";
}
mysqli_close($con);
?>