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
	<title>Profile | Kapadyak</title> 
</head>
<body id="home">

<div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
    <?php include '../Includes/Header.php'; ?>
		</div>

		<div class="index-content">

<center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
	 
		<div class="row">
		 
			<div class="col-md-3">
        
										<ul class="nav nav-tabs">
									<center><h1>Personal Information</h1>
									 	
										</ul>
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
                                             
               

<div class="panel panel-success">
  <div class="panel-heading">

    <div class="pull-right">
	</div>
    <br />
  </div>
  <div class="panel-body">
	
  		<div class="row">
        <div class="col-md-5">
			 
                   <?php include('profile_picture.php'); ?>
		 
			</div>
     
			<div class="col-md-5">
            <table>
            <tr><td>
            	<label class="block">Name: <?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></label>
            </td></tr>
            <tr>
            <td>
            &nbsp;
            </td>
            </tr>
             <tr><td>
            	<label class="block">Date of Birth: <?php echo $row['dob']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
            
             <tr><td>
            	<label class="block">Contact No: <?php echo $row['contact_number']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
              
            
             <tr><td>
              	<label class="block">Address: <?php echo $row['address']; ?></label>
            </td></tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
            <tr>
           <td>
           	<label class="block">Email Address: <?php echo $row['email_address']; ?></label>
           </td> 
            </tr>
              <tr>
            <td>
            &nbsp;
            </td>
            </tr>
               <tr>
           <td>
           	<label class="block">Gender: <?php echo $row['sex']; ?></label>
           </td> 
            </tr>
            </table>
            <center><h1 class="panel-title"><a href="personal_info_modal.php?id=<?php echo $id2; ?>"   ><i class="fa fa-pencil"></i> Update</a></h1></center>

  <br><h3>Account Activities</h3
<?php
  include 'account_info_panel.php';
  ?>

			
			</div>
		 
		</div>
	
  </div>
    
     
</div>