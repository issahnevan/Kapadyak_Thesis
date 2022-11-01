<?php include ('../dbcon.php');
 include ('../session.php');
 ?>

<?php

    $repz_id=$_GET['repz_id'];
    $post_id=$_GET['post_id'];
    $post_query = $conn->query("select * from repz LEFT JOIN members on repz.member_id = members.member_id where reply_id='$repz_id'");
    while($post_row = $post_query->fetch())
    {

    
?>					   
								
<form target="_self" method="post" action="#">
<input name="del_id" type="hidden" value="<?php  echo $repz_id;  ?>" />
<input name="post_id" type="hidden" value="<?php  echo $post_id;  ?>" />

<div>CONFIRMATION</div>

<div>Are you sure you want to delete this Comment?</div>

<div><?php echo "Reply by: ".$post_row['first_name']." ".$post_row['middle_name']." ".$post_row['last_name'];?></div>
<div><?php echo  "Date reply: ".$post_row['date_replied'] ;?></div>
<div><?php echo   "Reply Content: ".$post_row['reply_content'] ;?></div>
<div><button class="btn btn-danger" name="delete" >Delete</button>
<a href="index.php" class="btn btn-default"  >Cancel</a></div>

</form>

<?php }

        if (isset($_POST['delete'])){

        $del_id = $_POST['del_id'];
        $post_id = $_POST['post_id'];

        $conn->query("delete from repz where reply_id = '$del_id'");


        $post_query = $conn->query("select * from post where post_id='$post_id'");
        while($post_row = $post_query->fetch())
        {
        $threads=$post_row['replies']-1;
        }
        $conn->query("update post set threads='$threads' where post_id='$post_id' ");
					
    ?>
        <script>
         window.location = 'comment.php<?php echo "?id=".$post_id; ?>';	
        </script>

<?php  } ?>