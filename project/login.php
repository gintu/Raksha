<!doctype html>
<?php
 if(!isset($_GET['error1'])){
     $error1 = "";
     $vol = "" ;
     $error2 = "";
 }
 else{
    $error1 = $_GET['error1'];
    $vol = $_GET['vol'] ;
    $error2 = $_GET['error2']; 
 }
?>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title>Raksha-Home</title>
    <link rel="stylesheet" href="bootsrap.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Raksha</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Volunteers</a>
            </li>

        </ul>

    </div>
</nav>

<br>
<br>


<div class="container">

    <form id="_form" method="post" action="loginAction.php">
        <fieldset>
            <legend>Volunteer Login</legend>
            <br>



            <div class="form-group">
                <div><span id="com_mob"><?php echo $vol; ?></span></div>
                <label for="phonenumber">Phone Number</label>
                <input class="form-control" name ="mob" id="phonenumber" aria-describedby="emailHelp" placeholder="Enter phonenumber" type="text" onchange="check()">
                <small id="phoneHelp" class="form-text text-muted">We'll never share your phone number with anyone else.</small>
                <div><span id="err_mob" style="color:red;"><?php echo $error1; ?></span></div>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input  name = "pass" class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
                <div><span style="color:red;"><?php echo $error2; ?></span></div>
            </div>



            <button  class="btn btn-primary" name="reg_user">Submit</button>
        </fieldset>
    </form>


</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    function check() {
        var xhttp = new XMLHttpRequest();
        var mob = document.getElementById('phonenumber').value;
        document.getElementById("com_mob").innerHTML = "";
        document.getElementById("err_mob").innerHTML = "";
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == 'Invalid Mobile Number')
              document.getElementById("err_mob").innerHTML = this.responseText; 
            else
              document.getElementById("com_mob").innerHTML = this.responseText; 
        }
      };
     xhttp.open("GET", "loginAction.php?mob="+mob, true);
     xhttp.send();
  }
</script>
</body>
</html>
