<?php
$title = "Task force";
include_once("header.php");
include_once("dbconnect.php");
session_start();
?>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Members</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $qry = "select * from volunteers where task=".$_GET['id']." order by id";
            $task = mysqli_query($con,$qry);
            if($task!=false)
            {
                while($row=mysqli_fetch_assoc($task))
                {
                    echo '<tr>
                    <th scope="row">'.$row['id'].'</th>
                    <td><a class="btn btn-primary btn-lg" href="taskmembers.php/?id='.$row['name'].'" role="button">'.$row['strength'].'</a></td>
                    </tr>';
                }
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

