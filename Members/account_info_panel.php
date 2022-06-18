<?php
 date_default_timezone_set('Asia/Manila'); 
  include '../dbcon.php';
?>

<?php
			$query = $conn->query("select * from members where member_id = '$id2'");
			$row = $query->fetch();
		?>

  <div><i class="bi bi-clipboard"></i> Post: <?php echo $row['topic_ctr'] ; ?></div>  
  <div><i class="bi bi-chat"></i> Comments: <?php echo $row['threads_ctr'] ; ?></div> 
  <div> <i class="bi bi-reply"></i> Replies: <?php echo $row['replies_ctr'] ; ?></div>
  
     
