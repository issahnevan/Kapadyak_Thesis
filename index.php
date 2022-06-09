<?php 
require 'connect/connection.php';
session_start();
// Check whether user is logged on or not
if (isset($_SESSION['user_id'])) {
    header("location:index.php");
}
$temp = $_SESSION['user_id'];
session_destroy();
session_start();
$_SESSION['user_id'] = $temp;
ob_start(); 
// Establish Database Connection

?>

<?php
    include('connect/connection.php'); ?>

	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home / Kapadyak</title>
	<link rel="stylesheet" type="text/css" href="resources/css/main.css">
</head>
<body>
    <div class="container">
	<?php include 'navbar.php'; ?>
        <br>
        <div class="createpost">
            <form method="post" action="" onsubmit="return validatePost()" enctype="multipart/form-data">
                <h2>Make Post</h2>
                <hr>
                <span style="float:right; color:black">
                <input type="checkbox" id="public" name="public">
                <label for="public">Public</label>
                </span>
                Caption <span class="required" style="display:none;"> *You can't Leave the Caption Empty.</span><br>
                <textarea rows="6" name="caption"></textarea>
                <center><img src="" id="preview" style="max-width:580px; display:none;"></center>
                <div class="createpostbuttons">
                    <!--<form action="" method="post" enctype="multipart/form-data" id="imageform">-->
                    <label>
                        <img src="images/photo.png">
                        <input type="file" name="fileUpload" id="imagefile">
                        <!--<input type="submit" style="display:none;">-->
                    </label>
                    <input type="submit" value="Post" name="post">
                    <!--</form>-->
                </div>
            </form>
        </div>
        <h1>News Feed</h1>
		<?php 
        // Public Posts Union Friends' Private Posts
		
		$sql = "SELECT newsfeed.post_caption, newsfeed.post_time, newsfeed.post_public, useraccount.first_name,
		useraccount.last_name, useraccount.user_ID, useraccount.sex, newsfeed.post_id
FROM newsfeed
JOIN useraccount
ON newsfeed.post_by = useraccount.user_ID
WHERE newsfeed.post_public = 'Y' OR useraccount.user_ID = '{$_SESSION['user_id']}'

UNION
SELECT newsfeed.post_caption, newsfeed.post_time, newsfeed.post_public, useraccount.first_name,
useraccount.last_name, useraccount.user_ID, useraccount.sex, newsfeed.post_id
FROM newsfeed
JOIN useraccount
ON newsfeed.post_by = useraccount.user_ID
JOIN (
	SELECT friends.user_ID1 AS user_ID
	FROM friends
	WHERE friends.user_ID2 = '{$_SESSION['user_id']}' AND friends.friends_status = 1
	UNION
	SELECT friends.user_ID2 AS user_ID
	FROM friends
	WHERE friends.user_ID1 = '{$_SESSION['user_id']}' AND friends.friends_status = 1
) useraccountfriends
ON useraccountfriends.user_ID = newsfeed.post_by
WHERE newsfeed.post_public = 'N'
ORDER BY post_time DESC";

        $query = mysqli_query($connect, $sql );
        if(!$query){
            echo mysqli_error($connect);
        }
        if(mysqli_num_rows($query) == 0){
            echo '<div class="post">';
            echo 'There are no posts yet to show.';
            echo '</div>';
        }
        else{
            $width = '40px'; // Profile Image Dimensions
            $height = '40px';
            while($rowCount = mysqli_fetch_assoc($query)){
                include 'post.php';
                echo '<br>';
            }
			
        }
        ?>   <br><br><br>
		</div>
		<script src="resources/js/jquery.js"></script>
		<script>
			// Invoke preview when an image file is choosen.
			$(document).ready(function(){
				$('#imagefile').change(function(){
					preview(this);
				});
			});
			// Preview function
			function preview(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function (event){
						$('#preview').attr('src', event.target.result);
						$('#preview').css('display', 'initial');
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
			// Form Validation
			function validatePost(){
				var required = document.getElementsByClassName("required");
				var caption = document.getElementsByTagName("textarea")[0].value;
				required[0].style.display = "none";
				if(caption == ""){
					required[0].style.display = "initial";
					return false;
				}
				return true;
			}
		</script>
	</body>
	</html>
	
	<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST') { // Form is Posted
		// Assign Variables
		$caption = $_POST['caption'];
		if(isset($_POST['public'])) {
			$public = "Y";
		} else {
			$public = "N";
		}
		$poster = $_SESSION['user_id'];
		// Apply Insertion Query
		$sql = "INSERT INTO newsfeed (post_caption, post_public, post_time, post_by) 
		VALUES ('$caption', '$public', NOW(), '$poster')";
		$query = mysqli_query($connect, $sql);
		// Action on Successful Query
		if($query){
			// Upload Post Image If a file was choosen
			if (!empty($_FILES['fileUpload']['name'])) {
				echo 'FUUUQ';
				// Retrieve Post ID
				$last_id = mysqli_insert_id($connnect);
				include 'functions/upload.php';
			}
			header("location: home.php");
		}
	}
	?>
	
</body>
</html>