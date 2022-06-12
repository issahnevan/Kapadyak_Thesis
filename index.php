<?php

 session_start();

 if(!isset($_SESSION['SessionEmail'])){

  header('location:login.php?=YouMustLoginFirst');
  }

if(isset($_GET['data'])){

    $data= $_GET['data'];
    echo"<script> $data </script>";
}

// if(isset($_SESSION['MailingAddress'])){
//     $MailingAdd = $_SESSION["MailingAddress"];
//     echo "<script> sessionStorage.setItem('MailingAddress','$MailingAdd');</script>";
// }

// if(isset( $_SESSION["AccountType"])){

// $AccountType = $_SESSION["AccountType"];
//     echo"<script> sessionStorage.setItem('AccountType','$AccountType')</script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home / Kapadyak</title>
  <link rel="ICON" type="image/x-icon" href="Images/logo.ico">
  <link rel="stylesheet" href="Style.css" type="text/css">
</head>
<body>
<?php
   if(isset($_SESSION['SessionEmail'])){
      include_once("includes/header.php");
    }else{
      header('location:login.php?=YouMustLoginFirst');
    }
  ?>
</body>
</html>