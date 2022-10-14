<?php
	include('../dbcon.php');
	include ('../session.php');

	if(isset($_POST['delete-post'])){
		?>
		<script>
			showDeletePost();
		</script>
		<?php
	}
	$id = $_POST["getid"];
   	$post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where post_id='$id'");
	while($post_row = $post_query->fetch())
	{

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

<div class="close-button" onclick="hideDeletePost()"><button>&times;</button></div>
	<div class="add-form-title">CONFIRMATION</div>
		<form method="post" enctype="multipart/form-data">
			<div class="add-form-subtitles">Are you sure you want to delete this Post?</div>
			<input type="hidden" name="del_id" value="<?php echo $id; ?>" />
			<div class="add-form-subtitles">
				<?php echo "Posted by: ";?></div>
		
				<?php echo $post_row['first_name']." ".$post_row['middle_name']." ".$post_row['last_name'];?>
			<div class="add-form-subtitles">
				<?php echo  "Category: ";?></div>
				<?php echo $post_row['topic'];?>
			<div class="add-form-subtitles">
				<?php echo   "Topic Title:";?></div>
			 	<?php echo $post_row['post_title'];?>
			<div class="add-form-subtitles">
				<?php echo   "Date Posted:";?></div>
			 	<?php echo $post_row['date_posted'];?>
			<div>
				<textarea name="post_content" class="form-control" rows="10" required><?php echo $post_row['post_content']; ?></textarea>
			</div>
			<div class="post-button">
				<button type="submit" name="delete">Delete</button>
			</div>
		</form>




		<?php 	}
		if (isset($_POST['delete'])){
			$del_id = $_POST['del_id'];
			$conn->query("delete  from post where post_id = '$del_id'");
			};
		?>
			<script>
			window.location = 'index.php?id=<?php echo $del_id;?>';
			</script>
	
</body>
</html>
    