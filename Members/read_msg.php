<?php
 date_default_timezone_set('Asia/Manila'); 
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
  <script src="../Script/index.js"></script>
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
		<div class="message-container">
    <h1>MESSAGE</h1>
			<div class="chatbox">
				<div class="col-1">

    
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
            
        $msg_query = $conn->query("select * from message where member_id='$message_to' and sender_id='$message_from' and subject='$message_subject' order by message_id ASC") or die(mysql_error());
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
          if($row['image'] == ""){
            $pics = "../Images/default-profile.png";
          } else{
            $pics = $row['image'];
          }
          $name= $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
      }  
    }
    ?>

<div class="msg-row">
					<img src="<?php echo $pics; ?>" alt="" class="msg-img">
						<div class="msg-text">
							<h2><?php echo $name; ?></h2>
							<div><?php echo $message_subject; ?></div>
							<div><?php echo $message_date; ?></div> 	
              <p><?php echo $message_content;  ?></p>
              <div class="msg-text-image">
                <?php if($message_image=="../msg_images/"){}else{ ?> 
                  <img src="<?php echo $message_image; ?>"alt="...">
                <?php } ?>
              </div>
            </div>
					</div>

    <?php    
		}
    ?> 

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
            
        $msg_query = $conn->query("select * from message where member_id='$message_from' and sender_id='$message_to' and subject='$message_subject' order by message_id ASC") or die(mysql_error());
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

        $query = $conn->query("select * from user where user_id='$message_fromx'") or die(mysql_error());
        while ($row = $query->fetch()) 
        {
          "../images/logo_forum.png";
          $name= $row['fname']." ".$row['mname']." ".$row['lname']." - Admin";
        }  
      }
        else
      {
        $query = $conn->query("select * from members where member_id='$message_fromx'") or die(mysql_error());
        while ($row = $query->fetch()) 
        {
          if($row['image'] == ""){
            $pics = "../Images/default-profile.png";
          } else{
            $pics = $row['image'];
          }
          $name= $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
      }  
    }
    ?>

	<div class="msg-row msg-row2">
  <div class="msg-text">
							<h2><?php echo $name; ?></h2>
							<div><?php echo $message_subject; ?></div>
							<div><?php echo $message_date; ?></div> 	
              <p><?php echo $message_content;  ?></p>
              <div class="msg-text-image">
                <?php if($message_image=="../msg_images/"){}else{ ?> 
                  <img src="<?php echo $message_image; ?>">
                <?php } ?>
              </div>
            </div>
            <img src="<?php echo $pics; ?>" alt="" class="msg-img">
					</div>
    <?php    
		}
    ?> 

 <form role="form" class="login_form" method="post" action="send_reply.php?id=<?php echo  $message_from; ?>" enctype="multipart/form-data">
        <input name="msg_id" type="hidden"   value="<?php echo $msg_id; ?>"/>
        <input name="subject" type="hidden"  value="<?php echo $message_subject; ?>"/>
                     
        <div class="col-1-inputs">
		    <input type="text"name="msg" id="col-1-inputs1" placeholder="Write your Message here!" required>
        <input type="file" name="image" id="col-1-inputs2" title="click to add image to your post" />       
        </div>

        <div class="col-1-buttons">
          <input type="submit" value="Send Reply">
          <input type="button" value="Cancel" onclick="javascript:location.href='inbox.php'">
        </div>
      </form>
      <div class="col-2">	
					<?php include('member_online.php')?>
				</div>
      </div>
		</div>  
    </div>
</div>
</div>

</body>
</html>