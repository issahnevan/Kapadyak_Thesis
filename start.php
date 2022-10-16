
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
                <p class="page-one-title">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                <p class="page-one-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
            </div>
            <div class="page-one-right">
                <img src="Images/cyclist1.jpg"/>
                <img src="Images/cyclist2.jpg"/>
                <img src="Images/cyclist4.png"/>
            </div>
        </section>
        <section class="page-two">
            wordwrap
        </section>  
        <section class="page-three">
            w
        </section>
    </div>
    
</div>
</body>
</html>