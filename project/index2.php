<?php
$title = "Dashboard";
include_once("dbconnect.php");
include_once("header.php");
include_once("distance.php");

$mob = $_SESSION["mobile"];
$query = "select * from volunteer where mobile=".$mob;
$result = mysqli_query($con,$query);
$volunteer = mysqli_fetch_assoc($result);

?>
<div class="container">

    <h1 class="display-4" style="text-align: center">Your Feed</h1>
    <br>
        <?php 
// $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452&sensor=true/false';
// $output = file_get_contents($url); 
// $out = json_decode($output, true);
// //$data = $result[0];
// $adr = $out["results"][0]["formatted_address"];
$query1 = "select * from tasks";
    $result1 = mysqli_query($con,$query1);
    if ($result1) {
        $i=0;
        // output data of each row
        while($row = mysqli_fetch_assoc($result1)) {
            if((distance($volunteer['lat'],$volunteer['lng'],$row['lat'],$row['lng']))<20)
            {
                $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$row['lat'].','.$row['lng'].'&sensor=true/false';
                $output = file_get_contents($url); 
                $out = json_decode($output, true);
                $adr = $out["results"][0]["formatted_address"];
                echo '<div class="card-block">
                Task #'.$i++. 
                '</div>
                
                        <h4 class="card-title" style="margin-left: 20px;margin-top: 10px;">'.$adr.'</h4>
                        <p class="card-text" style="margin-left: 20px">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="assign.php/?id='.$row["id"].'" class="btn btn-primary" style="margin-left: 20px;margin-bottom: 20px">Accept</a><button class="btn btn-primary" style="margin-left: 20px;margin-bottom: 20px" onclick="window.open(\'https://www.google.com/maps/dir/'.$volunteer['lat'].','.$volunteer['lng'].'/'.$row['lat'].','.$row['lng'].'\',\'_blank\')">Get Directions</button>
                    </div>
                </div>
                <br>
                ';
            }
        }
    }
    
        ?>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
