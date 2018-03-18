<?php
$title = "Send response";
session_start();
include_once("header.php");
include_once("dbconnect.php");
?>
<div class="container">
    <h2> Send broadcast to members</h2>
    <form method="post" action="send_broadcast.php">
        <div class="form-group">
            <input type="text" class="form-control" id="response" name="response" placeholder="Send Broadcast">
        </div>
        <button type="submit" id="submitbutton" class="btn btn-primary">Submit</button>
    </form>
<?php
    $query = "select * from responses where taskid=".$_GET['id']." order by id desc";
    $result = mysqli_query($con,$query);   
//    echo $query;
    $adr=0;
    while($response = mysqli_fetch_assoc($result))
    {
        echo '
        <br/><div class="card-block">
            <div class="card" >
            <div class="card-block">
            <h6 class="card-title" style="margin-left: 20px;margin-top: 10px;"><strong>'.$response['name']." : </strong>".$response['response'].'</h6>
            <small><p class="card-text" style="margin-left: 20px">'.$response['date'].'</p></small>
            </div>
        </div>';
    }
?>
</div>
