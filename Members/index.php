
<?php
  require '../connect/connection.php';
  include('../session.php');
?>
<?php 

if (!isset($_SESSION['SessionEmail'])) {
 header("location:../login.php?=Error");
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<script src="../Script/index.js"></script>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Home | Kapadyak</title>
</head>
<body>
	<!-- floating add post  -->
	<div class="add-post" id="addPost">
		<div class="add-post-form">
		<?php include 'poster.php';?>
		</div>
	</div>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Includes/Header.php'; ?>
		</div>

		<div class="index-content">
			<?php include 'feed.php';?>	

			<button onclick="showAddPost()">
				<div class="add-post-button"></div>
			</button>
		</div>
	</div>	
</body>
</html>