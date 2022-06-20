<?php
include '../dbcon.php';	 
include '../session.php';

$msg_id=$_GET['id'];
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
		<center><h1>MESSAGES</h1>
    
    <?php
      $conn->query("update message set status='Read' where message_id='$msg_id'");
      $query = $conn->query("select * from message where message_id='$msg_id'") or die(mysql_error());
        while ($row = $query->fetch()) 
        {
          $message_to=$row['member_id'];
          $message_from=$row['sender_id'];
          $message_subject=$row['subject'];
          $recep_access=$row['access'];
        }
            
        $msg_query = $conn->query("select * from message where member_id='$message_to' and sender_id='$message_from' and subject='$message_subject' or member_id='$message_from' and sender_id='$message_to' and subject='$message_subject' order by message_id ASC") or die(mysql_error());
        while ($msg_row = $msg_query->fetch()) 
        {
          $message_content=$msg_row['message_content'];
          $message_image=$msg_row['message_image'];
          $message_tox=$msg_row['member_id'];
          $message_fromx=$msg_row['sender_id'];
          $message_subjectx=$msg_row['subject'];
          $message_date=$msg_row['date_messaged'];
          $accessx=$msg_row['access'];
  
      if($accessx=="Admin")
      {
        $pics = "../images/logo_forum.png";
        $query = $conn->query("select * from user where user_id='$message_fromx'") or die(mysql_error());
        while ($row = $query->fetch()) 
        {
          
          $name= $row['fname']." ".$row['mname']." ".$row['lname']." ( ADMIN )";
        }  
      }
        else
      {
        $query = $conn->query("select * from members where member_id='$message_fromx'") or die(mysql_error());
        while ($row = $query->fetch()) 
        {
          "../".$pics=$row['image'];
          $name= $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
      }  
    }
    ?>

    <div class="">
    
      <img src="<?php  echo $pics; ?>" width="35" height="35" alt="..." class="img-square"/>
			<label for="exampleInputEmail1">From: <?php echo $name; ?></label>
		</div>
              
		<div class="">
			<label for="exampleInputPassword1">Subject: <?php echo $message_subject ?></label>
		</div>
   
    <div class="">
      Message
    </div>                       
    <div class="panel-body">
      <?php if($message_image=="../msg_images/"){}else{ ?> 
        <img src="<?php echo $message_image; ?>" width="500" height="250" alt="..." class="img-square thumbnail">
      <?php } ?>
        <textarea rows="5" readonly="true" class="form-control"> 	<?php  echo nl2br($message_content); ?></textarea>
    </div>

    <?php    
		}
    ?> 

    <div class="">

		  <form role="form" class="login_form" method="post" action="send_reply.php?id=<?php echo  $message_from; ?>" enctype="multipart/form-data">
        <input name="msg_id" type="hidden"   value="<?php echo $msg_id; ?>"/>
        <input name="subject" type="hidden"  value="<?php echo $message_subject; ?>"/>
                     
        <div class="">
	      	<br><label for="exampleInputPassword1">Quick Reply</label><br>
		      <textarea rows="10" name="msg" class="form-control" id="exampleInputPassword1" spellcheck="true" placeholder="Write your Message here!" required="true"></textarea>
		    </div>
    
        <div class=""> 
          
          <input type="file" name="image" title="click to add image to your post" /> <br />
        </div>             
    
        <div class="">
		      <button  class="btn btn-info"  ><i class="fa fa-check-square-o"></i> Send Reply</button>&nbsp;<br> 
          <a href="inbox.php" class="btn btn-default"  >Cancel</a>
        </div>
      </form>
    </div>
</body>
</html>