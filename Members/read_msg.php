<?php
$msg_id=$_GET['id'];
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
		<center><h1>MESSAGES</h1>
<body id="home">
<center>
<table><tr><td>
<div class="alert alert-info">


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
$query = $conn->query("select * from user where user_id='$message_fromx'") or die(mysql_error());
while ($row = $query->fetch()) 
{
$name= $row['fname']." ".$row['mname']." ".$row['lname']." - Admin";
}  
}
else
{
$query = $conn->query("select * from members where member_id='$message_fromx'") or die(mysql_error());
while ($row = $query->fetch()) 
{
$name= $row['first_name']." ".$row['middle_name']." ".$row['last_name'];
}  
}
?>
     
<center>
<table border="0" width="530">
<tr>
<td >
              	    
					<div class="form-group">
						<label for="exampleInputEmail1">From: <?php echo $name; ?></label>
					</div>
                       </td> 
                        
                      </tr> 
                    
                      <tr>
                
                      <td >
					<div class="form-group">
						<label for="exampleInputPassword1">Subject: <?php echo $message_subject ?></label>
					</div>
                   </td>  
                    
                      </tr> 
                     </table>
                     
                     
                     
                      <table border="0">
                       <tr>
                       <td width="530"> 
				 <div class="panel panel-success">
                                 <div class="panel-heading">
                             Message
                                 </div>
                                 
                                 	<div class="panel-body">
                                    <center>
                                    <table> 
                                 <?php if($message_image=="../msg_images/"){}else{ ?> 
                                 <tr>  
                                <td>
                                
                              
                                            <img src="<?php echo $message_image; ?>" width="500" height="250" alt="..." class="img-square thumbnail">
                                                 
                                             
                              
                                </td>
                                </tr>
                                <?php } ?>
                                 <tr>
                                <td width="700">
                                  <textarea rows="5" readonly="true" class="form-control"> 	<?php  echo nl2br($message_content); ?></textarea>
                                  
                                       
                      </td> 
                      </tr></table>
           </div>
       </div>

 </td></tr></table> 
 <hr />              
              <?php    
		}
        
  ?> 
 </center>
  
		  <form role="form" class="login_form" method="post" action="send_reply.php?id=<?php echo  $message_from; ?>" enctype="multipart/form-data">
                 
  	<input name="msg_id" type="hidden"   value="<?php echo $msg_id; ?>"/>
    	<input name="subject" type="hidden"  value="<?php echo $message_subject; ?>"/>
                     
                 <table border="0" width="530"><tr>
                      <table border="0">
                       <tr>
                       <td width="530"> 
					<div class="form-group">
						<label for="exampleInputPassword1">Quick Reply</label>
						 <textarea rows="10" name="msg" class="form-control" id="exampleInputPassword1" spellcheck="true" placeholder="Write your Message here!" required="true"></textarea>
					</div>
                      </td>
                       
                      </tr>
                      <tr>
                      <td>
                       <input type="file" name="image" title="click to add image to your post" /> <br />
                  
                   
				 <button  class="btn btn-info"  ><i class="fa fa-check-square-o"></i> Send Reply</button>&nbsp; <a href="inbox.php" class="btn btn-default"  >Cancel</a>
                      </td>
                      </tr>
                      
                      </table>
                      
			</form>
       </div>
     
       </td>
       </tr>
       </table>
       
            </body>