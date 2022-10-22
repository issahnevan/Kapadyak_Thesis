<?php  
error_reporting(0);

$conn = new PDO('mysql:host=localhost;dbname=db_kapadyak', 'root', '');
include('../session.php');

?>


<div class="feed-cards">

<?php  
    $post_query = $conn->query("select * from post LEFT JOIN members on post.member_id = members.member_id where topic='FEED' order by post_id DESC");
    while($post_row = $post_query->fetch()){

    $ppppp=$post_row['post_id'];

    $access_query = $conn->query("select * from post where post_id='$ppppp'");
    while($access_row = $access_query->fetch())
    {
    $access=$access_row['access'];
    $user_idx=$access_row['member_id'];
    }
?>
  <div class="feed-card">
    
    <div class="feed-card-heading">
      <table border="0">
      <tr>
        <th rowspan="2"> 
          <img src="
            <?php if($access=="Admin"){echo  "../images/logo_forum.png";}else{
            $getImage = $post_row['image'];
            if($getImage == ""){
              echo "../Images/default-profile.png";
            } else{
              echo $post_row['image'];
            }
          }
            ?>
          " class="img-square"> </th>
        
        <td class="card-heading-name">
          <?php 

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


          ?>
        </td>
        <?php if($post_row['member_id']==$id2){ ?>
        <td class="card-heading-buttons">
        <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="getid" value="<?php echo $ppppp; ?>">
        <button type="submit" name="edit-post" class="edit-delete-button">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg>
        Edit</button>
        </form> 
        
   
        </td>
        <?php } ?>  

      </tr>  
      <tr>
        <td class="card-heading-datetime"> <?php echo $post_row['date_posted'];?>  </td>
        <?php if($post_row['member_id']==$id2){ ?>
          <td class="card-heading-buttons">
          <form method="post" enctype="multipart/form-data">
          <input type="hidden" name="getid" value="<?php echo $ppppp; ?>">
          <button type="submit" name="delete-post" class="edit-delete-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
              <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
            </svg>
            Delete</button>
            </form> 
          </td>
        <?php  } ?>  
      </tr>
     
      </table>
    </div>
   
    <div class="feed-card-body">
   
              <div class="card-body-header"> 
                <ul> 
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-left-text-fill" viewBox="0 0 16 16">
                      <g class="fa-group">
                        <path
                            fill="currentColor"
                            d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"
                            class="fa-tertiary"
                        ></path>
                        <path
                        ></path>
                      </g>
                    </svg>
                    <span>
                      (<font color="red"><?php  echo $post_row['threads']; ?></font>)
                    </span>
                  </li>
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                      <g class="fa-group">
                        <path
                            fill="currentColor"
                            d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"
                            class="fa-tertiary"
                        ></path>
                        <path
                            fill="currentColor"
                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"
                            class="fa-tertiary"
                        ></path>
                      </g>
                    </svg>
                  <span>
                    (<font color="orange"><?php  echo $post_row['views']; ?></font>)
                  </span>
                  </li>
                  
                  <li>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                      <g class="fa-group">
                        <path
                            fill="currentColor"
                            d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"
                            class="fa-tertiary"
                        ></path>
                      </g>
                    </svg>
                  <span>(<font color="blue"><?php echo $post_row['replies']; ?></font>)</span>
                  </li>

                </ul>
              </div>

              <div class="card-body-title">  
               <?php 
              $i="";
              $iquery=mysqli_query($connect,"select post_image from post where post_id = '$ppppp'");
              $data=mysqli_fetch_array($iquery);
              $res=$data['post_image'];
              $res=explode(" ",$res);
              $count=count($res)-1;     

              if($post_row['post_image'] != "" && $count > 1){ 
                 
                for($i=0;$i<$count;$i++)
                {
                    $tmp = explode('.', $res[$i]);
                    $file_ext = end($tmp);
                    $mediaType = "";

                    switch ($file_ext) {
                        case "mp4":
                        case "mkv":
                        case "mov":
                        case "ogg":
                        case "webm":
                            $mediaType = "video";
                            break;
                        case "jpg":
                        case "jpeg":
                        case "gif":
                        case "png":

                        default:
                            $mediaType = "image";
                            break;
                    }

                    if($mediaType == "video"){
                        ?>
                        <video src="../post_videos/<?= $res[$i]?>" width="200px" class="card-picture"></video>
                        <?php
                    } else if($mediaType == "image"){
                        ?>
                        <img src="../post_images/<?= $res[$i]?>" height="100px" width="100px" class="card-picture"/>
                        <?php
                    }
              } ?>

               <div class="card-title-float">
                  <?php echo $post_row['post_title']; ?>
                </div><?php 

              } else if($post_row['post_image'] != "" && $count == 1){ ?>
                <img src="../post_images/<?= $post_row['post_image']?>" height="100px" width="100px" class="card-picture"/>
                <div class="card-title-float">
                  <?php echo $post_row['post_title']; ?>
                </div><?php 
              }
              else{
                echo $post_row['post_title']; 
              }
              ?>
              
              </div>
              <div class="card-popup">
              <a href="add_views.php?id=<?php echo $ppppp ?>">View Post</a>
              </div>
              
    </div>
              
  </div>
  
<?php } ?> 


</div>

