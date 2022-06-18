<?php include('dbcon.php'); ?>
<?php include('session.php'); ?>

	<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
	
 
		<thead>
		<tr>
         
        	<th>User Name</th>
					<th>Fullname</th>
					<th>Gender</th>
			 
					<th>Address</th>
					<th>Email Address</th>
					<th>Contact Number</th>
					<th></th>
					<th class="empty">Action</th>
		</tr>
		</thead>
        	<?php
		$query = $conn->query("select * from members") or die(mysql_error());
		while ($row = $query->fetch()) {
		$id = $row['member_id'];
		?>
		<tbody>
	
		<tr>
         
        	<td><?php echo $row['username']; ?></td> 
		<td><?php echo $row['first_name']." ".$row['middle_name']." ".$row['last_name']; ?></td> 
		<td><?php echo $row['sex']; ?></td> 
	 
		<td><?php echo $row['address']; ?></td> 
		<td><?php echo $row['email_address']; ?></td> 
		<td><?php echo $row['contact_number']; ?></td> 
 
        	<td><?php 
            
            
            
             ?> </td> 
	 
		<td class="empty" width="280">
        <form method="POST">
       
        <input name="edit_id" type="hidden" value="<?php echo $id; ?>" />
	<?php if($row['email_status']=="1"){
	   ?>
       
         <input name="email_status" type="hidden" value="Unactive" />
		<h4><b>Verified Account</h4>
       
       <?php
       
	}  ?>
    	<?php if($row['email_status']=="0"){
	   ?>
        <input name="email_status" type="hidden" value="Activated" />
		<h4><b>Unverified Account</h4>
       <?php
       
	}  ?>
           
	 <a   title="Click to View all Details" id="view<?php echo $id; ?>" href="view_profile.php<?php echo '?id='.$id; ?>" class="btn btn-info"><i class="fa fa-list-alt"></i> View</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $id; ?>').tooltip('show');
				$('#view<?php echo $id; ?>').tooltip('hide');
			});
			</script>
            
             <a   title="Click to Remove Member" id="remove<?php echo $id; ?>" href="delete_member.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
              </form>
		</td>
		</tr>
 
	
		</tbody>
        	<?php }  ?>