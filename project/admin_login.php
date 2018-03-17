<!doctype html>
<?php
$title = "Login";
include_once("dbconnect.php");
include_once("header.php");


?>
<div class="container">

    <form id="_form" method="post" action="adminLoginAction.php">
        <fieldset>
            <legend>Admin Login</legend>
            <br>
            <div class="form-group">
                <label for="userName">User Name</label>
                <input class="form-control" name ="userName" id="userName" aria-describedby="emailHelp" placeholder="Enter User Name" type="text" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input  name = "password" class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
                <div><span id="err_mob" style="color:red;"><?php if(isset($_GET['message'])) { echo $_GET['message']; }?></span></div>
            </div>



            <button  class="btn btn-primary" name="reg_user" type="submit">Submit</button>
        </fieldset>
    </form>


</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
