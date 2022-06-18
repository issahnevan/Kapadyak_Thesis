<?php
 error_reporting(0);
 include '../dbcon.php';
 include '../session.php';
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="ICON" type="image/x-icon" href="../../Images/logo.ico">
  <link rel="stylesheet" type="text/css" href="../../style.css">
  <title>Manage Administrator</title>
</head>
<body>
<div class="index-container">
		<div class="index-sidenav">
			<?php include '../Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Header.php'; ?>
		</div>

		<div class="index-content">
		<center><h1>MANAGE ADMINS</h1>
	<hr/>
	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
	
	

	<h1><a href="modal_add_user.php">Add Admin</a></h1>
  
 
		<thead>
		<tr>
					<th>Name</th>
					<th>Username</th>
					<th>Last Log</th>
				 
					<th class="empty"></th>
		</tr>
		</thead>
		<tbody>
		<?php $query = $conn->query("select * from user") or die(mysql_error());
		$row = $query->fetch();
?>
			<tr>
				<td><?php echo $row['fname']." ".$row['mname']." ".$row['lname']; ?></td> 
				<td><?php echo $row['username']; ?></td> 
				<td><?php echo $row['last_logtime']; ?></td> 
				<td><a href="modal_edit_user.php">Edit</a></td>
				<td class="empty" width="170"><a href="delete_user.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a> </td>
			</tr>
		
	
		</tbody>
	</table>
	

  </div>
</div>
</div>
</td></tr></table>
  </center>

  </div>
</div>
  </body>
</html>