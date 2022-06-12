
<?php 
// require 'connect/connection.php';
// session_start();
// // Check whether user is logged on or not
// if (isset($_SESSION['user_id'])) {
//     header("location:index.php");
// }
// $temp = $_SESSION['user_id'];
// session_destroy();
// session_start();
// $_SESSION['user_id'] = $temp;
// ob_start(); 
// // Establish Database Connection

// ?>

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
	<link rel="stylesheet" type="text/css" href="resources/css/main.css">
	<title>Home / Kapadyak</title>
</head>
<body>
    <div class="container">
	<?php include 'Includes/Sidebar.php'; ?>

</body>
</html>