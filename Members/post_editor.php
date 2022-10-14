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
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script src="../Scripts/index.js"></script>
</head>
<body>

<?php
		if(isset($_POST['edit-post'])){
			?>
			<script>
			  showEditPost();
			</script>
			<?php
		}
				
		$get_id = $_POST["getid"];
		$post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where post_id='$get_id'");
		while($post_row = $post_query->fetch())
		{
		$topic = $post_row['topic'];
		$post_title = $post_row['post_title'];
		$post_content = $post_row['post_content'];
		}
	
    ?>

	<div class="close-button" onclick="hideEditPost()"><button>&times;</button></div>
	<div class="add-form-title">EDIT POST</div>
		<form method="post" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $get_id; ?>" />
			<div class="add-form-subtitles">Category:</div>
				<select name="topic" class="form-control">
				<option><?php echo $topic; ?></option>
				<option>FEED</option>
				<option>PRE LOVED</option>
				<option>RENTAL</option>
				<option>EVENTS</option>
				</select>
			<div class="add-form-subtitles">Title: </div>
				<input type="text" name="post_title" class="form-control" value="<?php echo $post_title; ?>" required>
			<div class="add-form-subtitles">Description:</div>
				<textarea name="post_content" class="form-control" rows="12" required><?php echo $post_content; ?></textarea>
			
			<div class="post-button">
				<button type="submit" name="edit">Save</button>
			</div>
		</form>

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

  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
