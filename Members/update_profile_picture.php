 <?php
 include '../dbcon.php';
 include('../session.php');
 
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name = addslashes($_FILES['image']['name']);
$image_size = getimagesize($_FILES['image']['tmp_name']);

move_uploaded_file($_FILES["image"]["tmp_name"], "../uploadss/" . $_FILES["image"]["name"]);
$location = "../uploadss/" . $_FILES["image"]["name"];
								
$conn->query("update  members set image = '$location' where member_id  = '$id2' ");
?>
 
<script>
window.location = "personal_info_panel.php";  
</script>

                     