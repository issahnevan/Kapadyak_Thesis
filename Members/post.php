<?php
	include('dbcon.php');
	
?>
							<?php
							if (isset($_POST['post'])){
								$post_content = $_POST['content'];
								$date_posted = date('m'.'/'.'d'.'/'.'Y');
								$conn->query("insert into post (member_id,date_posted,post_content) values('$id','$date_posted','$post_content')");
							?>
							<script>

							</script>	
							<?php } ?>

