
<?php 
session_start();

if (!isset($_SESSION['SessionEmail'])) {
 header("location:login.php?=LoginFirst");
 }
// $temp = $_SESSION['user_id'];
// session_destroy();
// session_start();
// $_SESSION['user_id'] = $temp;
// ob_start(); 
// // Establish Database Connection


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

	<link rel="ICON" type="image/x-icon" href="Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home / Kapadyak</title>
</head>
<body>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include 'Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include 'Includes/Header.php'; ?>
		</div>

		<div class="index-content">
		<?php include 'feed.php'; ?>
		</div>
	</div>
</body>
</html>