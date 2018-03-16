<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <title><?php echo "Raksha - " . $title ;?></title>
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
<?php
if(isset($_SESSION["mobile"]))
{
echo('<a class="nav-link" href="logout.php">Logout<span class="sr-only">(current)</span></a>');
}
else
{
echo('<a class="nav-link" href="login.html">Login<span class="sr-only">(current)</span></a>');    
}
?>
    </li>
</ul>
</div>
</nav>

