
  <?php  
  include('dbcon.php'); 
  include ('session.php');
   ?>
 <?php $get_id=$_GET['id']; ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="../../Scripts/index.js"></script>
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Home | Admin</title>
</head>
<body>
    <div class="add-post" id="addPost">
		<div class="add-post-form">
		<?php include 'poster.php';?>
		</div>
	</div>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include 'Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include 'Header.php'; ?>
		</div>

		<div class="index-content">
		

<center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
	 
		<div class="row">
		 
                
       </div>
       </div>
       </div>
       
			<div class="col-md-9">
      
                        <?php
			$query = $conn->query("select * from members where member_id = '$get_id'");
			$row = $query->fetch();
		?>
						<div class="jumbotron alert-info">
										<ul class="nav nav-tabs">
							<a href="#"><?php echo $row['first_name']."'s"; ?> Personal Information</a></li>
									  
										</ul>
                                        
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
					 
<div class="panel panel-success">
  <div class="panel-heading">

       
   
              
      <div class="pull-right">
  <font size="4">  <i class="fa fa-clipboard"></i> Topic: <?php echo $row['topic_ctr'] ; ?> &nbsp;  | &nbsp;
          
			 <i class="fa fa-chain"></i> Threads: <?php echo $row['threads_ctr'] ; ?>  &nbsp; | &nbsp;
            
              <i class="fa fa-reply"></i> Reply: <?php echo $row['replies_ctr'] ; ?></font></div>
  </div>
  <div class="panel-body">
		
  		<div class="row">
        <div class="col-md-5">
			 
                  
	<center><a href="#change_profile_picture_modal" data-toggle="modal"> <img src="<?php echo  $row['image']; ?>" width="280" height="240" alt="..." class="img-square thumbnail"/></a></center>
  
			
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
			

			
			</div>
		 
		</div>
	
  </div>
   
     
</div>
						</div>
                        
			</div>
			<div class="col-md-1"></div>
		</div>
</div><br>
<a href ="data.php">Back to Members</a> 
  </body>
</html>