<?php
  require '../connect/connection.php';
  include('../session.php');
?>

<?php  date_default_timezone_set('Asia/Manila'); include('../dbcon.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<title>Home | Kapadyak</title>
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
			<center><a href="poster.php"><h1>HOMEPAGE<br>Add Post</h1></a>
			<?php include '../members/feed.php';?>	
		</div>

 
  <center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
	 
		<div class="row">
		 
			<div class="col-md-3">
            
            	<div class="alert alert-info">
             <form method="post" action="search_result.php">
                
                  <table><tr>
                  <td>
                  <input type="text" name="search" class="form-control" placeholder="Search . ." required> 
                  </td>
                  <td>&nbsp;</td>
                  <td>
                  <button type="submit" class="btn btn-info"><li class="fa fa-search"></li> Search</button>
                  </td>
                  </tr></table>
                  
                   </form>
                  <hr />
                  
               <div id="load_tweets2"> 
               
                 
                    

       </div>
       </div>
       </div>
			<div class="col-md-9">
					<div class="jumbotron alert-success">
										<ul class="nav nav-tabs">
										<li class="active"><a href="home.php"><img src="../images/windows.png" width="40" height="40" />NEWSFEED</a></li>
									 	<li ><a href="preloved.php"><img src="../images/mac.png" width="40" height="40" /> PRE LOVED</a></li>
                                        <li ><a href="rental.php"><img src="../images/linux.png" width="40" height="40" />RENTAL</a></li>
									 	<li ><a href="events.php"><img src="../images/android.png" width="40" height="40" /> EVENTS</a></li>
									  <!-- <li ><a href="program.php"><img src="../images/program.png" width="40" height="40" /> PROGRAMMING</a></li>
									 	<li ><a href="hardware.php"><img src="../images/hardware.png" width="40" height="40" /> HARDWARE</a></li> -->
                                    	</ul>
                                        	 
                                             
						<div id="load_tweets1"> 
							 <?php  include('feed.php');  ?>
                             </div>
                         
						</div>
                   
					
			</div>
            
            
	  <center>	<?php include('footer.php'); ?></center>
		</div>
        	
	</div>
     </td>
  </tr>
  </table>
  </center>
 
    </div>
</div>	
 </body>
 </html>