<?php
 date_default_timezone_set('Asia/Manila'); 
  include '../dbcon.php';
?>

<?php
			$query = $conn->query("select * from members where member_id = '$id2'");
			$row = $query->fetch();
		?>
<div class="panel panel-success">
  <div class="panel-heading">
     
    <br />
  </div>
  <div class="panel-body">
	
  		<div class="row">
		 
	 <div class="col-md-6">
    <font size="4">  <i class="fa fa-clipboard"></i> Topic: <?php echo $row['topic_ctr'] ; ?>   <br />
             <br />
			 <i class="fa fa-chain"></i> Threads: <?php echo $row['threads_ctr'] ; ?>   <br />
             <br />
              <i class="fa fa-reply"></i> Reply: <?php echo $row['replies_ctr'] ; ?></font>
                 
		</div>
		</div>
	
  </div>

     
</div>