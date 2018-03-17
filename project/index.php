<?php
include_once("dbconnect.php");
$title="Home";
include_once("header.php");

?>

<div class="jumbotron " style="text-align: center;margin-top: 15vh">
    <h1 class="display-1" style="text-align: center">Raksha!</h1>
    <p class="lead" style="text-align: center">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>In case of emergency press this button.</p>
    <p class="lead">
        <form id="regis_form" method="POST" action="emergency.php">
            <input name="lat" id="lat" value = "" hidden>
            <input name="lng" id="lng" value = "" hidden>
        <button class="btn btn-outline-danger btn-lg" onclick="submitF()">Emergency</a>
</form>
    </p>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>    
<script>
    var lat,lng;
    
    (function() {
      getLocation();
    })();
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else { 
            alert("Geolocation is not supported by this browser.");
        }
    }
    
    function showPosition(position) {
        document.getElementById('lat').value = position.coords.latitude;
        console.log(position.coords.latitude);
        document.getElementById('lng').value = position.coords.longitude;
    }
    function submitF(){
        document.getElementById("regis_form").submit();
    }
    </script>
    
</html>