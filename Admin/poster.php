    
    
     <?php
     require 'dbcon.php';
    
 
    ?>

<?php  date_default_timezone_set('Asia/Manila'); ?>
<!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../style.css">
  <script src="../Scripts/index.js"></script>
  <title>Create Post</title>
</head>
<body>
<div class="close-button" onclick="hideAddPost()"><button>&times;</button></div>
<div class="add-form-title">CREATE POST</div>
<form method="post" enctype="multipart/form-data">
  <div class="add-form-subtitles">Category:</div>
    <div> 
        <select name="topic" class="form-control">
          <option>FEED</option>
          <option>PRE LOVED</option>
          <option>RENTAL</option>
          <option>EVENTS</option>
        </select>
    </div>
    <div class="add-form-subtitles">Title: </div>
        <input type="text" name="post_title" class="form-control" required>
    <div class="add-form-subtitles">Description:</div>
        <textarea name="post_content" class="form-control" rows="12" required></textarea>

            <div class="image-upload" title="Upload FIle">
                <input type="file" id="image1" name="image" accept="image/*" onchange="showImage(event);">
                <label for="image1">Upload Image</label>
              <div class="image-preview">
                <img id="image1-preview">
              </div>
            </div>
      
    <div class="post-button">

    <button type="submit" name="post">Post</button>
    </div>
  </form>

    <?php
      if (isset($_POST['post'])){

        $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name = addslashes($_FILES['image']['name']);
        $image_size = getimagesize($_FILES['image']['tmp_name']);

        move_uploaded_file($_FILES["image"]["tmp_name"], "../post_images/" . $_FILES["image"]["name"]);
        $location = "../post_images/" . $_FILES["image"]["name"];

        $topic = $_POST['topic'];
        $post_title = $_POST['post_title'];
        $post_content = $_POST['post_content'];
        $date_posted = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
 
    
                              
        $conn->query("insert into post (member_id,date_posted,post_content,post_title,post_image,topic,access) values('$session_id','$date_posted','$post_content','$post_title','$location','$topic','Admin')");
        if($topic=="FEED")
        {

        ?>
        <script>
        window.location = 'home.php';
        </script>

        <?php
        }
        elseif($topic=="PRE LOVED")
        {
        ?>

        <script>
          window.location = 'feed_pre.php';
        </script>	
        <?php 
        }
        elseif($topic=="RENTAL")
        {
        ?>

        <script>
          window.location = 'feed_rental.php';
        </script>	
        <?php 
        }
        elseif($topic=="EVENTS")
        {
        ?>

        <script>
        window.location = 'feed_events.php';
        </script>	

        <?php  
        }

        } ?>
  </div>      


 
  </body>
</html>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
