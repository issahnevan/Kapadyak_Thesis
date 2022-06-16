<?php
  require '../connect/connection.php';
  include('../session.php');
?>

<?php 
if (!isset($_SESSION['SessionEmail'])) {
 header("location:../login.php?=Error");
 }

?>
  <?php  date_default_timezone_set('Asia/Manila'); include('../dbcon.php') ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <title>Create Post</title>
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
	  <center>
      <table>
      <tr>
        <td>
        <div class="">
	      <div class="">
		    <div class="">
        <div class="">
     
                  <hr />
               <div id="load_tweets2"> 
  
       </div>
       </div>
       </div>
			<div class="col-md-9">
          
						<div class="jumbotron alert-info">
									 
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
				<div class="panel panel-success">
  <div class="panel-heading">

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

                                move_uploaded_file($_FILES["image"]["tmp_name"], "../post_images/" . $_FILES["image"]["name"]);
                                $location = "../post_images/" . $_FILES["image"]["name"];
						 
                                $topic = $_POST['topic'];
							 	$post_title = $_POST['post_title'];
								$post_content = $_POST['post_content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                               

                
          $query_topic_ctr = $conn->query("select * from members where member_id='$id2'") or die(mysql_error());
		while ($row_query_topic_ctr = $query_topic_ctr->fetch()) 
        {
            $ctr_topic=$row_query_topic_ctr['topic_ctr']+1;
            	$conn->query("update members set topic_ctr='$ctr_topic' where member_id='$id2'");
        }
                              
                                 
                                
								$connect->query("insert into post (member_id,date_posted,post_content,post_title,post_image,topic,access) values('$id2','$date_posted','$post_content','$post_title','$location','$topic','Member')");
						if($topic=="FEED")
                        {
						  
			 
                        	?>
                            
							<script>
								window.location = 'index.php';
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
            
			<div class="col-md-1"></div>
		</div>
	</div>
		</div>
	</div>

 
  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
