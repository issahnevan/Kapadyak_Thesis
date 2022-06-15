<?php  
 date_default_timezone_set('Asia/Manila'); 
 include '../session.php';
 include '../dbcon.php';	 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../style.css">
  <title>Messages | Kapadyak</title>
</head>
<body>
<div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			
			<?php include '../Includes/Header.php'; ?>
		</div>

		<div class="index-content">
		<Center><h1>Messages</h1>
			<?php include 'inbox_function.php'; ?>
		<center><table width="1200" border="0"><tr><td><br><br>
		<center><table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" id="example" >
	
 
		<thead>
		<tr>
         
            	<th>Sender</th>
            	<th>Date</th>
                <th>Message</th>
            	<th>Status</th>
		 	 <th>Actions</th>
		</tr>
		</thead>
		<tbody>
		<?php
		$senderquery = $conn->query("select distinct message_id,sender_id from message where member_id='$id2'") or die(mysql_error());
	$num_row = $senderquery->rowcount();
    	if( $num_row <= 0 ) 
        {      
       ?>
    
       <div class="alert alert-danger"> You have no message at this moment.</div>
       <?php
		}
 		
    	while ($senderrow = $senderquery->fetch()) 
        {
		  $sender=$senderrow['sender_id'];
          $id_msg=$senderrow['message_id'];
          
         	
		  
	 	$msgquery = $conn->query("select * from message where sender_id='$sender' and message_id='$id_msg'") or die(mysql_error());
		while ($msgrow = $msgquery->fetch()) { 
		  $msg_id=$msgrow['message_id'];
		  $sssss=$msgrow['sender_id'];
	       $subject=$msgrow['subject'];
            $access=$msgrow['access'];
    
    
    if($access=="Admin")
    {
     $sndrquery = $conn->query("select * from user where user_id='$sssss'") or die(mysql_error());
		while ($sndrrow = $sndrquery->fetch())
         { 
            $ppiicc="../images/logo_forum.png";
		  $sendby=$sndrrow['fname']." ".$sndrrow['mname']." ".$sndrrow['lname']." ( Admin )";
   
		}
	      
    }
    else
    {
         $sndrquery = $conn->query("select * from members where member_id='$sssss'") or die(mysql_error());
		while ($sndrrow = $sndrquery->fetch())
         { 
            $ppiicc=$sndrrow['image'];
		  $sendby=$sndrrow['first_name']." ".$sndrrow['middle_name']." ".$sndrrow['last_name']." ( ".$sndrrow['access']." )";
   
		}
	  
    }
		?>
		<tr>
         
            	<td >
                <table>
                
                <tr>
                <td>
                  <img src="<?php echo $ppiicc; ?>" width="35" height="35" alt="..." class="img-square"/>
                </td>
                <td>
                &nbsp;
                </td>
                <td>
                  <?php echo $sendby; ?><br />
                    Subject: <?php echo $subject; ?>
                </td>
                </tr>
                </table>
             
                 
                 
                 </td> 
         
            	<td width="10"><?php echo $msgrow['date_messaged']; ?></td> 
                
                <td> <input class="form-control" id="exampleInputEmail1" value="<?php echo $msgrow['message_content']; ?>" readonly="true" /></td>
                
	 <td> <?php echo   $msgrow['status'];  ?>  </td> 
         <?php if($msgrow['status']=="Unread"){ ?>
            
            	<td class="empty" width="100">
        	<a data-placement="top" title="Click to read & reply meassage" id="view<?php echo $msg_id; ?>" href="read_msg.php<?php echo '?id='.$msg_id; ?>" class="btn btn-info"><i class="fa fa-list-alt"></i> Read</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $msg_id; ?>').tooltip('show');
				$('#view<?php echo $msg_id; ?>').tooltip('hide');
			});
			</script>
  
	
		</td>
            
            
        <?php }else{  ?>
	 	<td class="empty" width="185">
        	<a data-placement="top" title="Click to read & reply meassage" id="view<?php echo $msg_id; ?>" href="read_msg.php<?php echo '?id='.$msg_id; ?>" class="btn btn-info"><i class="fa fa-list-alt"></i> Read</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#view<?php echo $msg_id; ?>').tooltip('show');
				$('#view<?php echo $msg_id; ?>').tooltip('hide');
			});
			</script>
  
		<a data-placement="top" title="Click to delete meassage" id="delete<?php echo $msg_id; ?>" href="delete_msg.php<?php echo '?id='.$msg_id; ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
			<script type="text/javascript">
			$(document).ready(function(){
				$('#delete<?php echo $msg_id; ?>').tooltip('show');
				$('#delete<?php echo $msg_id; ?>').tooltip('hide');
			});
			</script>
            
		</td>
        <?php }  ?>
		</tr>
	<?php } } ?>    
	
		</tbody>
	</table>
		</div>
</div>
</body>
</html>