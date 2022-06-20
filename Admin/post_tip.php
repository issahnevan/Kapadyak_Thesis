    
    
     <?php
     require 'dbcon.php';
     require 'session.php';
    ?>

<?php  date_default_timezone_set('Asia/Manila'); ?>
 

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
			<?php include 'Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include 'header.php'; ?>
		</div>

		<div class="index-content">
	

<center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
	 
		<div class="row">
		 
			<div class="col-md-3">
            	<div class="alert alert-info">
          
                  <hr />
  
									 
     

      <br />
		
    <br />
  </div>
  <div class="panel-body">
	<form method="post" enctype="multipart/form-data">
    <center>
    
                 
                        
                        
                       
                     
                         
    <table width="800">
    <td>
     Tips and Tricks :<br /><br />
     
    <br />   <tr>
 
    </td>
    <td width="600"> </td>
    </tr>
    <tr>
    
    <td colspan="2">
     *Topic Title:<br /><br />
    <textarea name="post_title" class="form-control" rows="2" placeholder="Title" required></textarea>
                                <br />
                                *Topic Content:<br /><br />
								<textarea name="post_content" class="form-control" rows="12" placeholder="Contents" required></textarea>
                                <br />
                                  <!-- <input type="url" name="link" class="form-control" placeholder="Enter URL" >
                                  <br /> -->

                               
							
    </td>
    </tr>
    </table>
   
    
                            	<div class="pull-right">
								<button type="submit" name="post" class="btn btn-info"><i class="fa fa-share"></i> Post Topic</button>
								</div>
						</form>
                        </center>
						<?php
							if (isset($_POST['post'])){
							 
                                    

                              
						 
                              
							 	$post_title = $_POST['post_title'];
								$post_content = $_POST['post_content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                               
      
								$conn->query("insert into post (member_id,date_posted,post_content,post_title,topic,access) values('$session_id','$date_posted','$post_content','$post_title','TIPS','Admin')");
				
			 
                        	?>         
							<script>
								 window.location = 'feed_tip.php';
							</script>	
					
                            
							
                            
							
							<?php  
                        }
                            
                              ?>
	
 
	</div>
 
  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
