
<?php
$title = "admin page";
include_once("header.php");
include_once("dbconnect.php");
session_start();
$qry = "select * from volunteer where task=".$_GET['id'];
//echo $qry;
$task = mysqli_query($con,$qry);
$i=0;
?>

<div class="container">
<br/>
<a href="<?php echo 'messages.php?id='.$_GET['id']; ?>"><button type="button" class="btn btn-primary btn-lg" >Message</button><br/><br/></a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone No</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($task))
            {
                echo '<tr>
                <th scope="row">'.++$i.'</th>
                <th scope="row">'.$row['name'].'</th>
                <th scope="row">'.$row['mobile'].'</th>';
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

