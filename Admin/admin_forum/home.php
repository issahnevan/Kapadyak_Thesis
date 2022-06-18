<?php 
include '../dbcon.php';
include '../session.php';

if(!isset($_SESSION['SessionUsername'])){
 header('location:../login_form.php?=ErrorAdmin');
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<title>Home | Admin</title>
</head>
<body>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include '../Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../header.php'; ?>
		</div>

          <div> 
               <?php include('feed.php');  ?>
          </div>
     </div>
</body>
</html>