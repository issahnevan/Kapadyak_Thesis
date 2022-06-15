<?php 
include ('../dbcon.php');
include('../session.php');

$get_id= $_GET['id'];
			$query = $conn->query("select * from members where member_id = '$get_id'");
		 
            
            	while($row = $query->fetch())
                                    {
		?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Update Account</title>
</head>
<body>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Includes/Header.php'; ?>
		</div>
		<center>
		<div class="index-content">
	 
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">

				<h4 class="modal-title" id="myModalLabel">Update Personal Info</h4>
			</div>
			<div class="modal-body">
				 <form role="form" action="personal_info_save.php" class="login_form" method="post">
				 		<div class="row">
							<div class="col-xs-4"><label>First Name</label></div>
							<div class="col-xs-4"><label>Middle Name</label></div>
							<div class="col-xs-4"><label>Last Name</label></div>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<input name="firstname" value="<?php echo $row['first_name']; ?>" type="text" class="form-control" >
							</div>
							<div class="col-xs-4">
								<input name="middlename" value="<?php echo $row['middle_name']; ?>" type="text" class="form-control" >
							</div>
							<div class="col-xs-4">
								<input name="lastname" value="<?php echo $row['last_name']; ?>" type="text" class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-xs-4"><label>Sex</label></div>
							<div class="col-xs-4"><label>Date of Birth</label></div>
							<div class="col-xs-4"><label>Contact No</label></div>
						</div>
						<div class="row">
							<div class="col-xs-4">
									<select name="sex" class="form-control">
										<option><?php echo $row['sex']; ?></option>
										<option>Male</option>
										<option>Female</option>
									</select>
							</div>
							<div class="col-xs-4">
							<input name="birth" value="<?php echo $row['dob']; ?>" type="text" class="form-control" />
							</div>
							<div class="col-xs-4">
								<input name="contact_no" value="<?php echo $row['contact_number']; ?>" type="text" class="form-control" />
							</div>
						</div>
						<div class="row">
						 
							
						<div class="row">
						 
							
						</div>
						<div class="row">
							<div class="col-xs-12"><label>Address</label></div>
						</div>
						<div class="row">
							<div class="col-xs-8">
								<input name="address" value="<?php echo $row['address']; ?>" type="text" class="form-control">
							</div>
						</div>
						
					<div class="row">
					<div class="col-xs-12">
					<br>
						<button type="submit"  class="btn btn-success"><i class="fa fa-save"></i> Update Info</button>
					</div>				 
					</div>				 
			</form>
            <?php } ?>
			</div>
			<div class="modal-footer">
				<a href="personal_info_panel.php"   class="btn btn-default"  ><i class="fa fa-times"></i> Cancel</a>
				
			</div>
			</div>
			
		</div>
	 
		</div>
	</div>	
</body>
</html>					