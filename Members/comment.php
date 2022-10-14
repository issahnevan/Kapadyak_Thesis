<?php 
include('../dbcon.php');
include '../session.php';
date_default_timezone_set('Asia/Manila'); 

?>


<?php $get_id=$_GET['id']; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Manage Post</title> 
</head>
 
 
<body id="home">
<div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Includes/Header.php'; ?>
		</div>

		<div class="index-content">
        <div class="comment-content">
            <?php
            $post_query = $conn->query("select * from post where post_id='$get_id'");
            while($post_row = $post_query->fetch())
            {  
                
            $ppppp=$post_row['post_id'];
            $mmmmm=$post_row['member_id'];
            $ttttt=$post_row['topic'];
            $views=$post_row['views']+1;
            $access=$post_row['access'];
            $replies=$post_row['replies'];
            $threads=$post_row['threads'];
                    
                
            if($access=="Admin")
            {   
            $pmem_query = $conn->query("select * from user where user_id='$mmmmm'");
            while($pmem_row = $pmem_query->fetch())
            {
            $pmimg="../images/logo_forum.png";
            $pmname=$pmem_row['fname']." ".$pmem_row['mname']." ".$pmem_row['lname']." - Admin";
            } 
                    
            }
            else
            {   
            $pmem_query = $conn->query("select * from members where member_id='$mmmmm'");
                    
            while($pmem_row = $pmem_query->fetch())
            {
            $pmimg=$pmem_row['image'];
            $pmname=$pmem_row['first_name']." ".$pmem_row['middle_name']." ".$pmem_row['last_name'];
            } 
            }
            ?>

            <h1>View Post</h1>
            <div class="comment-container">
                <div class="comment-header">
                     <div class="comment-header-content">
                    <div class="comment-header-img"><img src="<?php echo $pmimg;?>" alt="..."/></div>       
                        <div class="comment-header-text">
                            <div class="comment-header-name"><?php echo $pmname; ?></div>
                            <div class="comment-header-date"><?php echo $post_row['date_posted'];?></div>
                        </div>
                        <div class="comment-header-title"> 
                            <h1><?php echo $post_row['post_title']; ?></h1>
                        </div>
                    </div>
                </div>
               <div class="comment-body">
                    <?php if($post_row['post_image']=="../post_images/"){  ?>
                        <div class="comment-body-text">
                            <?php echo nl2br($post_row['post_content']); ?>
                        </div>
                    <?php }else{ ?>
                       
                        <div class="comment-body-img">
                            <img src="<?php echo $post_row['post_image']; ?>" alt="..."/>
                        </div>
                        <div class="comment-body-text">
                            <?php echo nl2br($post_row['post_content']); ?>
                        </div>
                    <?php } ?>
               </div>
            </div>
                  
               <h2>COMMENT</h2>    
                
                <?php	
                $ccomment_query = $conn->query("select * from comment where post_id='$ppppp' order by comment_id ASC");
                while($ccomment_row = $ccomment_query->fetch())
                {
                $cm_id= $ccomment_row['member_id'];
                $cimg =$ccomment_row['comment_image'];
                $access =$ccomment_row['access'];
                $ccccc=$ccomment_row['comment_id'];
                            
                if($access=="Admin")
                {	
                    $cmem_query = $conn->query("select * from user where user_id='$cm_id'");
                    while($cmem_row = $cmem_query->fetch())
                    {
                    $cpics ="../Images/logo_forum.png";
                    $cmname =$cmem_row['fname']." ".$cmem_row['mname']." ".$cmem_row['lname']." - Admin";
                    }
                }
                else
                {	
                    $cmem_query = $conn->query("select * from members where member_id='$cm_id'");
                    while($cmem_row = $cmem_query->fetch())
                    {
                    $cpics =$cmem_row['image'];
                    $cmname =$cmem_row['first_name']." ".$cmem_row['middle_name']." ".$cmem_row['last_name'];
                    }
                }
          
                ?>

            <div class="comment-container">
                <div class="comment-header">
                        <div class="comment-header-content">
                        <div class="comment-header-img"><img src="<?php echo $cpics; ?>" alt="..."/></div>       
                            <div class="comment-header-text">
                                <div class="comment-header-name"><?php echo $cmname;?></div>
                                <div class="comment-header-date"><?php echo $ccomment_row['date_commented'];?></div>
                            </div>
                            <div class="comment-header-title"> 
                                <h1><?php echo $post_row['post_title']; ?></h1>
                            </div>
                        </div>
                </div>      
               <div class="comment-body">
                    <?php 
                    if($cm_id==$id2 and $access=="Member")
                    { 
                    ?>
                    <td >&nbsp;</td>
                    <td width="5"><a href="del_comment.php?comment_id=<?php echo $ccccc;?>&post_id=<?php echo $get_id; ?>"><i class="fa fa-trash-o">Delete</i></a></td>
                    <?php 
                    } 
                    else   
                    {} 
                    ?>
                    <?php if($cimg=="../comment_images/"){  ?>
                        <div class="comment-body-text">
                            <?php  echo nl2br($ccomment_row['comment_content']); ?> 
                        </div>
                    <?php }else{ ?>          
                        <div class="comment-body-img">
                            <img src="<?php echo $cimg ?>" alt="..."/>
                        </div>
                        <div class="comment-body-text">
                            <?php  echo nl2br($ccomment_row['comment_content']); ?>
                        </div>
                    <?php } ?>
               </div>
            </div>
                 
        <h2>REPLY</h2>
        <hr />

        <?php	$repz_query = $conn->query("select * from repz where comment_id='$ccccc' order by reply_id ASC");
        while($repz_row = $repz_query->fetch())
        {
        $repz_id= $repz_row['reply_id'];
        $rm_id= $repz_row['member_id'];
        $rimg =$repz_row['reply_image'];
        $r_access =$repz_row['access'];
                
        if($r_access=="Admin")
        {	
        $rmem_query = $conn->query("select * from user where user_id='$rm_id'");
        while($rmem_row = $rmem_query->fetch())
        {
        $rpics ="../images/logo_forum.png";
        $rmname =$rmem_row['fname']." ".$rmem_row['mname']." ".$rmem_row['lname']." - Admin";
        }
        }
        else
        {	
        $rmem_query = $conn->query("select * from members where member_id='$rm_id'");
        while($rmem_row = $rmem_query->fetch())
        {
        $rpics =$rmem_row['image'];
        $rmname =$rmem_row['first_name']." ".$rmem_row['middle_name']." ".$rmem_row['last_name'];
        }
        }
        ?>
                
                
            <div class="comment-container comment-container-reply">
                <div class="comment-header">
                    <div class="comment-header-content">
                        <div class="comment-header-img"><img src="<?php echo $rpics; ?>" alt="..."/></div>       
                            <div class="comment-header-text">
                                <div class="comment-header-name"><?php  echo $rmname;  ?></div>
                                <div class="comment-header-date"><?php echo $repz_row['date_replied'];?></div>
                            </div>
                        <div class="comment-header-title"> 
                            <h1><?php echo $post_row['post_title']; ?></h1>
                        </div>
                    </div>
                </div>
               <div class="comment-body">
                    <?php 
                    if($rm_id==$id2 and $r_access=="Member")
                    { 
                    ?>
                        <td width="5">&nbsp;</td>
                    <td width="5"><a href="delete_reply.php?repz_id=<?php echo $repz_id;?>&post_id=<?php echo $get_id; ?>"><i class="fa fa-trash-o"></i></a></td>
                    <?php  
                    }
                    else   
                    {} 
                    ?>
                   <?php if($rimg=="../repz_images/"){ ?> 
                        <div class="comment-body-text">
                            <?php  echo nl2br($repz_row['reply_content']); ?>
                        </div>
                    <?php }else{ ?>          
                        <div class="comment-body-img">
                            <img src="<?php echo $rimg ?>" alt="..."/>
                        </div>
                        <div class="comment-body-text">
                            <?php  echo nl2br($repz_row['reply_content']); ?>
                        </div>
                    <?php } ?>
               </div>
            </div>

                        <?php 
                        } ?>  
                        <form method="post" enctype="multipart/form-data" class="comment-form-reply">
                     
                        <input type="hidden" name="post_id" value="<?php echo $get_id; ?>" />
                        <input type="hidden" name="comment_id" value="<?php echo $ccomment_row['comment_id'];; ?>" />
                            <div class="comment-body-inputs">
                                <textarea name="comment_content" class="form-control" rows="2" placeholder="Reply here..." required autofocus></textarea>
                            </div>
                            <div class="comment-body-buttons">
                                <input type="file" name="repz_image" class="comment-body-button-file" title="click to add image to your comment"/>
                            </div>
                                <button type="submit" name="reply" class="comment-body-button-button">Reply</button>
                        </form>  

                      
                        <?php } ?>
               
	
                
                
                
                 <!-- check -->
          
                <form method="post" enctype="multipart/form-data" class="comment-form-comment">
               
                <input type="hidden" name="topic" value="<?php echo $ttttt; ?>" />
                <input type="hidden" name="post_id" value="<?php echo $get_id; ?>" />
				<div class="comment-body-inputs">
                    <textarea name="comment_content" class="form-control" rows="2" placeholder="Comment here..." required autofocus></textarea>
                </div>
                <div class="comment-body-buttons">
                    
                    <input type="file" name="image" class="comment-body-button-file" title="click to add image to your comment"/>
                </div>
                <button type="submit" name="comment" class="comment-body-button-button">Comment</button>


                 <!-- check -->
                 

				<?php 
                } ?> 
	 
            	<?php
				if (isset($_POST['reply']))
                {
				$repz_image = addslashes(file_get_contents($_FILES['repz_image']['tmp_name']));
                $repz_image_name = addslashes($_FILES['repz_image']['name']);
                $repz_image_size = getimagesize($_FILES['repz_image']['tmp_name']);

                move_uploaded_file($_FILES["repz_image"]["tmp_name"], "../repz_images/" . $_FILES["repz_image"]["name"]);
                $repz_location = "../repz_images/" . $_FILES["repz_image"]["name"];
						 
				$topic_id = $_POST['post_id'];
				$comment_id = $_POST['comment_id'];
				$reply_content = $_POST['reply_content'];
				$date_replied = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
                
                
			 $query_replies_ctr = $conn->query("select * from members where member_id='$id2'") or die(mysql_error());
		while ($row_query_replies_ctr = $query_replies_ctr->fetch()) 
        {
            $ctr_replies=$row_query_replies_ctr['replies_ctr']+1;
            	$conn->query("update members set replies_ctr='$ctr_replies' where member_id='$id2'");
        }
              
              
                            
                $conn->query("insert into repz (member_id,date_replied,reply_content,comment_id,reply_image,access) values ('$id2','$date_replied','$reply_content','$comment_id','$repz_location','Member')");
					 	
                $post_query = $conn->query("select * from post where post_id='$topic_id'");
				while($post_row = $post_query->fetch())
                {
                $replies=$post_row['replies']+1;
                }
                $conn->query("update post set replies='$replies' where post_id='$topic_id' ");
                ?>
                <script>window.location = 'comment.php<?php echo "?id=".$topic_id; ?>';</script>	
				<?php 
                } ?>
                <?php
							
                            
                
                
                if (isset($_POST['comment']))
                {
                    
				$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name = addslashes($_FILES['image']['name']);
                $image_size = getimagesize($_FILES['image']['tmp_name']);

                move_uploaded_file($_FILES["image"]["tmp_name"], "../comment_images/" . $_FILES["image"]["name"]);
                $location = "../comment_images/" . $_FILES["image"]["name"];
						 
				$topic = $_POST['topic'];
				$post_idx = $_POST['post_id'];
				$comment_content = $_POST['comment_content'];
				$date_comment = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
						
                        
                         $query_threads_ctr = $conn->query("select * from members where member_id='$id2'") or die(mysql_error());
		while ($row_query_threads_ctr = $query_threads_ctr->fetch()) 
        {
            $ctr_threads=$row_query_threads_ctr['threads_ctr']+1;
            	$conn->query("update members set threads_ctr='$ctr_threads' where member_id='$id2'");
        }
        	
                $conn->query("insert into comment (member_id,date_commented,comment_content,post_id,comment_image,access) values ('$id2','$date_comment','$comment_content','$post_idx','$location','Member')");
				$post_query = $conn->query("select * from post where post_id='$post_idx'");
				while($post_row = $post_query->fetch())
                {
                $threads=$post_row['threads']+1;
                }
                $conn->query("update post set threads='$threads' where post_id='$post_idx' ");
                ?>
                <script>window.location = 'comment.php<?php echo "?id=".$post_idx; ?>';</script>	
				<?php
                } ?>
            </div>
            </div>
</body>