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
 
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">

</script>

 </div>
 
 
 
<body id="home">
<div class="index-container">
		<div class="index-sidenav">
			<?php include '../Includes/Sidebar.php'; ?>
		</div>

		<div class="index-header">
			<?php include '../Includes/Header.php'; ?>
		</div>

		<div class="index-content">
    <center>
        <table >
        <tr>
        <td>
 
            <div class="container-fluid">
	 
                <div class="row">
		 
        
                        <div class="col-md-9">
                            <div class="jumbotron alert-success">
  
 
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
                         <ul class="nav nav-tabs">
                
                        
                    	 
										  
									 
                                        </ul>
                            <div class="panel panel-info">
                            
                                <div class="panel-heading">
                            
                                <table border="0">
                                <tr>
                                <td><img src="<?php echo $pmimg;?>" width="40" height="40" alt="..." class="img-square" /></td>
                                <td>&nbsp;</td>
                                <td><strong><?php echo $pmname; ?></strong></td>
                                <td width="430">&nbsp;</td>
                                <td width="150"> <?php echo $post_row['date_posted'];?>  </td>
                                </tr>
                                </table>
                                
                                </div>
                                
                                <div class="panel-body">
                                <center>
                                <table>
                                <tr>
                                <td width="730">
                                
                                <div class="panel panel-success">
                                    <div class="panel-heading"> <textarea class="form-control" rows="2" readonly="true"> <?php echo $post_row['post_title']; ?></textarea></div>
                                        <div class="panel-body">
                                        
                                      
                                        <?php if($post_row['post_image']=="../post_images/"){  ?>
                                            <div class="col-md-12">
                                        <textarea class="form-control" rows="4" readonly="true"><?php  echo nl2br($post_row['post_content']); ?></textarea>  </div> 
                                        </div> <?php    }else{ ?>
                                          <div class="col-md-4">
                                        
                                        <img src="<?php echo $post_row['post_image']; ?>" width="200" height="200" alt="..." class="img-square thumbnail"/>
                                        
                                        </div>
                                       
                                        <div class="col-md-8">
                                 <textarea class="form-control" rows="9" readonly="true"><?php echo nl2br($post_row['post_content']); ?></textarea> 
                                        </div>
                                          <?php } ?>
                                            
                                        </div>
                                                 
                                </center>
                                </div>          </div>
                </div>
                <?php 
                } ?> 
                    </div>
                </div>
               
          
        </td>
        </tr>
        </table>
    </center>
              
</body>
	