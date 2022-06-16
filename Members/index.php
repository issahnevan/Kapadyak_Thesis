
<?php 
session_start();

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
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Home | Kapadyak</title>
</head>
<body>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Includes/Header.php'; ?>
		</div>

		<div class="index-content">
		<center><a href="poster.php"><h1>HOMEPAGE<br>Add Post</h1></a>
		<?php include 'feed.php';?>	
		</div>
	</div>	
</body>
</html>