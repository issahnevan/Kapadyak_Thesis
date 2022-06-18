 
    <?php
 
	$query = $conn->query("select * from members where member_id  = '$id2'");
	$row = $query->fetch();
	?>

	<?php if($row['image'] == ""){?>
			<img src="../Images/default-profile.png"></a>
	<?php } else { ?>
	<img src="<?php echo $row['image']; ?>"></a>
	<?php }?>
  
      