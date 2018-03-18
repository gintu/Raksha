<?php
$title = "Send response";
session_start();
include_once("header.php");
include_once("dbconnect.php");
?>
<div class="container">
    <h2> Send response to higher Authority</h2>
    <form method="post" action="sendresponseaction.php">
        <div class="form-group">
            <input type="text" class="form-control" id="response" name="response" placeholder="Enter your response">
        </div>
        <button type="submit" id="submitbutton" class="btn btn-primary">Submit</button>
    </form>
<?php
    $query = "select * from responses where mobile=".$_SESSION['mobile']." order by id desc";
    $result = mysqli_query($con,$query);   
//    echo $query;
    $adr=0;
    while($response = mysqli_fetch_assoc($result))
    {
        echo '
        <br/><div class="card-block">
            <div class="card" >
            <div class="card-block">
            <h4 class="card-title" style="margin-left: 20px;margin-top: 10px;">'.$response['response'].'</h4>
            <p class="card-text" style="margin-left: 20px">Date : '.$response['date'].'</p>
            <a href="remove_response.php/?id='.$response["id"].'"><button class="btn btn-primary" style="margin-left: 20px;margin-bottom: 20px">remove </button></a>
            </div>
        </div>';
    }
?>
</div>
