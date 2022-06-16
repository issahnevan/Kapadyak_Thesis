<?php 
include '../dbcon.php';
include '../session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Messages | Kapadyak</title>
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

   	<?php   
       
       $get_id=$_GET['id'];
       
       	$post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where post_id='$get_id'");
									while($post_row = $post_query->fetch())
                                    {
								 $topic = $post_row['topic'];
							 	$post_title = $post_row['post_title'];
								$post_content = $post_row['post_content'];
									}
       
       ?>
    
<center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
	 
		<div class="row">
		 
			<div class="col-md-9">
          
						<div class="jumbotron alert-info">
									 
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
				<div class="panel panel-success">
  <div class="panel-heading">

      <br />
		<h4 class="panel-title">EDIT TOPIC ( * is Required ) </h4>
 
    <br />
  </div>
  <div class="panel-body">
	<form method="post" enctype="multipart/form-data">
    <center>
    <table width="800">
    <input type="hidden" name="id" value="<?php echo $get_id; ?>" />
    <tr>
    <td>
    *Select Topic:<br /><br />
     <select name="topic" class="form-control">
     <option><?php echo $topic; ?></option>
    <option>FEED</option>
      <option>PRE LOVED</option>
        <option>RENTAL</option>
          <option>EVENTS</option>
    </select>
    <br />
    </td>
    <td width="600"> </td>
    </tr>
    <tr>
    
    <td colspan="2">
     *Topic Title:<br /><br />
    <textarea name="post_title" class="form-control" rows="2" placeholder="Title" required> <?php echo 	$post_title; ?></textarea>
                                <br />
                                *Topic Content:<br /><br />
								<textarea name="post_content" class="form-control" rows="12" placeholder="Contents" required><?php echo $post_content; ?></textarea>
                                <br />
                          
                                  
    </td>
    </tr>
    </table> 
    
                            	<div class="pull-right">
								<button type="submit" name="edit" class="btn btn-success"><i class="fa fa-save"></i> Update Topic</button>&nbsp;	<a href="home.php" class="btn btn-default">Cancel</a>
								</div>
						</form>
                        </center>
						<?php
							if (isset($_POST['edit'])){
							 
                                    
   $id = $_POST['id'];
                         $topic = $_POST['topic'];
							 	$post_title = $_POST['post_title'] ;
								$post_content = $_POST['post_content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                                
								$conn->query("update post set date_posted='$date_posted',post_content='$post_content',post_title='$post_title',topic='$topic' where post_id='$id'");
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
                        else
                        {
                          	?>
                            
							<script>
								window.location = 'evnts.php';
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

  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
