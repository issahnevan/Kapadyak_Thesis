    
    
     <?php
     require '../dbcon.php';
     require '../session.php';
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
			<?php include '../Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../header.php'; ?>
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
		<h4 class="panel-title">COMPOSE TOPIC ( * is Required ) </h4>
 
    <br />
  </div>
  <div class="panel-body">
	<form method="post" enctype="multipart/form-data">
    <center>
    
                 
                        
                        
                       
                     
                         
    <table width="800">
    <td>
    *Select Topic:<br /><br />
     <select name="topic" class="form-control">
    <option>FEED</option>
      <option>PRE LOVED</option>
        <option>RENTAL</option>
          <option>EVENTS</option>
          <!-- <option>PROGRAMMING</option>
          <option>HARDWARE</option> -->
    </select>
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
                                   Topic Image:<br /><br />
                                 <input type="file" name="image" title="click to add image to your post" /> 
							
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
							 
                                    

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../../post_images/" . $_FILES["image"]["name"]);
                                $location = "../../post_images/" . $_FILES["image"]["name"];
						 
                                $topic = $_POST['topic'];
							 	$post_title = $_POST['post_title'];
								$post_content = $_POST['post_content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                               
      
								$conn->query("insert into post (member_id,date_posted,post_content,post_title,post_image,topic,access) values('$session_id','$date_posted','$post_content','$post_title','$location','$topic','Admin')");
						if($topic=="FEED")
                        {
						  
			 
                        	?>
                            
							<script>
								window.location = 'home.php';
							</script>	
							<?php
                            	}
                        elseif($topic=="PRE LOVED")
                        {
                           	?>
                            
							<script>
								window.location = 'feed_pre.php';
							</script>	
							<?php 
                        }
                        elseif($topic=="RENTAL")
                        {
                           	?>
                            
							<script>
								window.location = 'feed_rental.php';
							</script>	
							<?php 
                        }
                       elseif($topic=="EVENTS")
                        {
                          	?>
                            
							<script>
								window.location = 'feed_events.php';
							</script>	
							
							<?php  
                        }
                            
                             } ?>
	
  </div>
  
     
</div>
 
 
		</div>
	</div>
 
  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
