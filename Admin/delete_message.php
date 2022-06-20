<?php
include 'dbcon.php';
include 'session.php';

$del_msg=$_GET['id'];

	$conn->query("delete from message where message_id = '$del_msg'");
					
                    ?>
			 <script>
	window.location = 'inbox.php';
</script>
                  