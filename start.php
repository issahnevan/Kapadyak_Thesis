
<?php
//   require 'connect/connection.php';
//   include('session.php');
?>
<?php 

// if (!isset($_SESSION['SessionEmail'])) {
//  header("location:../login.php?=Error");
//  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="image/x-icon" href="Images/logo.ico">
    <link rel="stylesheet" href="Style.css" type="text/css">
    <script defer src="Scripts/app.js"></script>
    <title>Get Started</title>
</head>
<body>
<div class="start-container">
    <div class="start-header">
        <div class="header-logo" id="headerLogo">
            <a href="index.php"><img src="Images/logo.png" >
                <span class="start-header-logo-text">APADYAK</span>
            </a>
        </div>
        <div class="start-header-button">
            <a href="login.php" class="header-login-button">LOGIN</a>
            <button class="join-button">
               JOIN NOW 
            </button>
        </div>
    </div>

    <div class="start-content">
        <section class="page-one">
            <div class="page-one-left">
                <div class="page-one-title">A place to connect with other cyclist enthusiast</div>
                <div class="page-one-subtitle">Interact and collaborate by expressing your thoughts through creative and engaging discussions.</div >
            </div>
            <div class="page-one-right">
                <img src="Images/cyclist1.jpg"/>
                <img src="Images/cyclist2.jpg"/>
                <img src="Images/cyclist4.png"/>
            </div>
        </section>
        <section class="page-two">
            <section class="page-two-bike">
                <img src="Images/cyclist5.png" class="bike">
            </section>
            <div class="page-two-title">Rent a bike today</div>
            <div class="page-two-subtitle">Own a spare bicycle? Get it rented right away by posting it on the platform.</div >
        </section>  
        <section class="page-three">
            <div class="page-three-map">
                <img src="Images/cyclist3.png">
            </div>
            <div class="page-three-text">
            <div class="page-three-title">Track places easily using 2D mapping</div>
            <div class="page-three-subtitle">Setting the location in posting may benefit other cyclist in finding the location you had been visited.</div >
            </div>
        </section>
    </div>
    
</div>
</body>
</html>