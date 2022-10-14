<?php
 include('../dbcon.php');
 include('../session.php');

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <script src="../Scripts/index.js">


  </script>
  <title>Document</title>
</head>
<body>
  
  <?php
  if(isset($_GET['id'])){
    ?><script> 
        showAddPost(); 
      </script> 
      <?php
  }


    $recep_id = $_GET['id'];


    $query = $conn->query("select * from members where member_id='$recep_id'") or die(mysql_error());
    while ($row = $query->fetch()) 
    {
      $to_id = $row['member_id'];
      $recep_name=$row['first_name']." ".$row['middle_name']." ".$row['last_name'];
    }
  ?>

		<!-- <div class="close-button" onclick="location.href='inbox.php'"><button>&times;</button></div> -->
	  <div class="close-button" onclick="hideAddPost()"><button>&times;</button></div>
    <div class="add-form-title">COMPOSE MESSAGE</div>
        <form role="form" class="login_form" method="post" action="send_msg.php?id=<?php echo $to_id; ?>" enctype="multipart/form-data">

        <div class="add-form-subtitles">Title: </div>
          <input name="recep_name" type="text" class="form-control" id="exampleInputEmail1"  value="<?php echo $recep_name; ?>" >
        
          <div class="add-form-subtitles">Subject:</div>
          <input name="subject" type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Subject"  required>

        <div class="add-form-subtitles">Message:</div>
        <textarea rows="10" name="msg" class="form-control" id="exampleInputPassword1" spellcheck="true" placeholder="Write your Message here!" required="true"></textarea>       
            
        <div class="image-upload" title="Upload FIle">
              <input type="file" id="image1" name="image" accept="image/*" onchange="showImage(event);">
              <label for="image1">Send Image</label>
            <div class="image-preview">
              <img id="image1-preview">
            </div>
        </div>
            
        <div class="post-button">
          <button type="submit" name="post">Send</button>
        </div>
      </form> 
</div>

</body>
</html>    