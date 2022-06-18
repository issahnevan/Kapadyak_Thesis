<?php
 include('../session.php');
  include('../dbcon.php'); 

$query = $conn->query("select * from members where member_id = '$id2'");
			$row = $query->fetch();
		?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="../Scripts/index.js"></script>
	<title>Profile | Kapadyak</title> 
</head>
<body>
<div class="add-post" id="addPost">
		<div class="add-post-form">
		<div class="close-button" onclick="hideAddPost()"><button>&times;</button></div>
		<?php include 'change_profile_picture_modal.php';?>
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
    <div class="personal-container">
    <div class="personal-title">Personal Information</div>
    <div class="personal-form">
      <div class="personal-profile" onclick="showAddPost()">					 	
        <?php include('profile_picture.php'); ?>
      </div>
      <div class="personal-update-button">
            <a href="personal_info_modal.php?id=<?php echo $id2; ?>">
            <i class="bi bi-pencil"></i> Edit</a>
        </div>
      <div class="personal-details">
        <div class="personal-details-name"><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></div>
        <div>@<?php echo $row['username']; ?></div>
        <div>Date of Birth:<label> <?php echo $row['dob']; ?></label></div>
        <div>Contact No:<label> <?php echo $row['contact_number']; ?></label></div>
        <div>Address:<label> <?php echo $row['address']; ?></label></div>
        <div>Email Address:<label> <?php echo $row['email_address']; ?></label></div>
        <div>Sex:<label> <?php echo $row['sex']; ?></label></div>
      </div>
      <div class="profile-activities">
      <div class="profile-activities-title">Account Activities</div>
      <div class="profile-activities-act"><?php include 'account_info_panel.php';?></div>
      </div>
    </div>
    </div>
  
</div>
</body>
</html>