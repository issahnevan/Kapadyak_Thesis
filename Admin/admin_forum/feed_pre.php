<?php  

include '../dbcon.php';
include('../session.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../../style.css">
	<title>Pre-loved | Kapadyak</title>
</head>
<body>
    <div class="index-container">
		<div class="index-sidenav">
			<?php include '../Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Header.php'; ?>
		</div>

		<div class="index-content">
		<center><a href="poster.php"><h1>PRE-LOVED<br>Add Post</h1></a>
   <table border="0" width="845"><tr><td></td></tr></table>
     


	<div class="jumbotron  alert-info">
		 
<?php  
 
									$post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where topic='PRE LOVED' order by post_id DESC");
									while($post_row = $post_query->fetch()){
							 
                                    $ppppp=$post_row['post_id'];
                                    
                                    $access_query = $conn->query("select * from post where post_id='$ppppp'");
									while($access_row = $access_query->fetch())
                                    {
									   $access=$access_row['access'];
                                        $user_idx=$access_row['member_id'];
									}
								?>
 
									<div class="panel panel-success">
                                 <div class="panel-heading">
                               
                                 <table border="0">
                                 <tr>
                             
                                 <td> 
                                  <img src=" 
                                <?php 
                                 if($access=="Admin")
                                 {
                                    echo  "../../images/logo_forum.png";
                                 }
                                 else
                                 {echo  "../". $post_row['image'];}?>" width="40" height="40" alt="..." class="img-square">
                                 </td>
                                 <td>
                                 &nbsp; 
                                </td>
                                 <td width="545">
                                <strong><?php 
                                
                                  if($access=="Admin")
                                 { 
                                  	$name_query = $conn->query("select * from user where user_id='$user_idx'");
									while($name_row = $name_query->fetch())
                                    {
									  echo $name_row['lname']." ".$name_row['fname']." ".$name_row['mname']." - Admin";
									}
                                   
                                    }
                                 else
                                 {  
                                    echo $post_row['first_name']." ".$post_row['middle_name']." ".$post_row['last_name'];
                                     }
                                     
                                     
                              ?></strong></td>
                                  <td >
                                 &nbsp; 
                                </td>
                                 <td width="200"> <?php echo $post_row['date_posted'];?>  </td>
                                 
                             
                                    
                                
                                 <td> <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
          <ul class="dropdown-menu alert alert-danger">
           <li> <a href="post_editor.php<?php echo '?id='.$ppppp; ?>"><i class="fa fa-pencil"></i> Edit</a> </li>
            <li> <a href="delete_post.php<?php echo '?id='.$ppppp; ?>"><i class="fa fa-trash-o"></i> Delete</a> </li>
       
          </ul>
        </li>
      </ul></td>
  
      
      
                                 </tr></table>
  </div>
								<div class="panel-body">
                                <center>
                                <table><tr><td width="800">
                               
                                 <div class="panel-heading">
                                 <table border="0" width="800">
                                 
                                  <tr><td width="500">  
                                   <a href="add_views.php?id=<?php echo $ppppp ?>"><b>View Topic</b></a> | <b>Threads</b> ( <font color="red" size="4"><?php echo $post_row['threads'] ;?></font> ) | <b>Views</b> ( <font color="orange" size="4"><?php  echo $post_row['views']; ?></font> ) | <b>Replies</b> ( <font color="blue" size="4"><?php echo $post_row['replies']; ?></font> )</td>
                                  </tr>
                                  
                                   <tr>
                                   <td width="500">  
                                   &nbsp;
                                   </td>
                                  </tr>
                                  
                                 <tr><td width="500">  <textarea class="form-control" rows="2" readonly="true" disabled=""> <?php echo $post_row['post_title']; ?></textarea> </tr></table>
                            
                                 </div>
                                 
                           
                                
                                 </td></tr></table>
                                 </center>
                                <center>
					 
								</div>
                                
                         
                        
								</div>

								<?php } ?> 
               
 
