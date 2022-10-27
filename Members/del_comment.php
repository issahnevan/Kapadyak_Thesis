 <?php include ('../dbcon.php');
 include ('../session.php');
 ?>

<?php

    $comment_id=$_GET['comment_id'];
    $post_id=$_GET['post_id'];
   	$post_query = $conn->query("select * from comment LEFT JOIN members on comment.member_id = members.member_id where comment_id='$comment_id'");
    while($post_row = $post_query->fetch())
    {

?>
    <form target="_self" method="post" action="#">
    <input name="del_id" type="hidden" value="<?php  echo $comment_id;  ?>" />
    <input name="post_id" type="hidden" value="<?php  echo $post_id;  ?>" />
    <div>CONFIRMATION</div>

    <div>Are you sure you want to delete this Comment?</div>

    <div><?php echo "Comment by: ".$post_row['first_name']." ".$post_row['middle_name']." ".$post_row['last_name'];?></div>
    <div><?php echo  "Date Comment: ".$post_row['date_commented'] ;?></div>
    <div><?php echo   "Comment Content: ".$post_row['comment_content'] ;?></div>
    <div><button class="btn btn-danger" name="delete" >Delete</button>
    <a href="index.php" class="btn btn-default"  >Cancel</a></div>
    </form>

	<?php }

    if (isset($_POST['delete'])){

    $del_id = $_POST['del_id'];
    $post_id = $_POST['post_id'];

    $conn->query("delete from comment where comment_id = '$del_id'");


    $post_query = $conn->query("select * from post where post_id='$post_id'");
    while($post_row = $post_query->fetch())
    {
    $threads=$post_row['threads']-1;
    }
    $conn->query("update post set threads='$threads' where post_id='$post_id' ");

    ?>
    <script>
         window.location = 'comment.php<?php echo "?id=".$post_id; ?>';	
    </script>
                     <?php   }		?>