 
<?php
error_reporting(0);
include('../session.php');
include('../dbcon.php');
?>
 
<?php
$mctr=0;
$msg_query = $conn->query("Select * from message where member_id='$session_id' and status='Unread' order by message_id ASC");
while($msg_row = $msg_query->fetch())
$mctr=$mctr+1;
?>
