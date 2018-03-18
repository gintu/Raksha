<?php
$title = "admin page";
include_once("header.php");
include_once("dbconnect.php");
session_start();
?>

<div class="container">
<br/>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Location</th>
            <th scope="col">Task Force Assigned</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <?php
            $qry = "select * from tasks order by id";
            $task = mysqli_query($con,$qry);
            while($row=mysqli_fetch_assoc($task))
            {
                $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.$row['lat'].','.$row['lng'].'&sensor=true/false';
                $output = file_get_contents($url); 
                $out = json_decode($output, true);
                $adr = $out["results"][0]["formatted_address"];
                echo '<tr>
                        <th scope="row">'.$row['id'].'</th>
                        <td>'.$adr.'</td>
                        <td><a class="btn btn-primary btn-lg" href="taskmembers.php?id='.$row['id'].'" role="button">'.$row['strength'].'</a></td>
                        <td><a class="" href="remove_task.php?id='.$row['id'].'" >Remove task</a></td>
                    </tr>';
            }
            ?>
            
        </tbody>
    </table>

</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

