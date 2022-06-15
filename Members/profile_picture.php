 
    <?php
 
	$query = $conn->query("select * from members where member_id  = '$id2'");
	$row = $query->fetch();
	?>
	<center><a href="change_profile_picture_modal.php?id=<?php echo $id2 ?>" > <img src="<?php echo $row['image']; ?>" width="280" height="240" alt="..." class="img-square thumbnail"/></a></center>
  
      