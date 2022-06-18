<?php
 include '../session.php';
 include '../dbcon.php';	 

?>
	<form method="post" action="update_profile_picture.php" enctype="multipart/form-data">
		
	<div class="image-upload" title="Upload FIle">
		<input type="file" id="image1" name="image" accept="image/*" onchange="showImage(event);" required>
		<label for="image1">Upload Image</label>
	<div class="image-preview">
		<img id="image1-preview">
	</div>
	</div>
	<div class="post-button">
		<button type="submit" name="post">Save</button>
	</div>
	</form>
			