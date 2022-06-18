<?php 
require 'dbcon.php';
 session_start();
if (isset($_SESSION['user_id'])) {

 }
ob_start(); 
?>
<?php
      include('connection.php');
    date_default_timezone_set('Asia/Manila'); 
    if(isset($_POST["loginn"])){
        $user = $_POST['qwe'];
        $password =$_POST['password'];

        if(empty($user) && empty($password)){
            ?>
            <script>
                alert("Please enter valid username! ");
            </script>
            <?php
        
        } else {
			$sql =  mysqli_query($connect, "SELECT * FROM user where username = '$user'");
			$num_row = mysqli_num_rows($sql);

			if( $num_row > 0 ) { 
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
                $_SESSION["id"] = $fetch['user_id'] ;
                $userid = $fetch['user_id'] ;
                $_SESSION["SessionUsername"] = $fetch['username'] ;


				if($password == $hashpassword){
               
					$userSelect =  mysqli_query($connect, "SELECT * FROM user");
					$fetch2 = mysqli_fetch_assoc($userSelect);

					$_SESSION['Session_ID']=$fetch['user_id'];

                    mysqli_query($connect, "UPDATE user SET status = 'active' where user_id = '$userid'");
					// $conn->query("update user set status = 'active'  where user_id = '$user'");
					$date_log = date('m'.'/'.'d'.'/'.'Y')." | ".date("h:i:sa");
					// $conn->query("update user set last_logtime='$date_log' where user_id='$user'");	
					mysqli_query($connect, "UPDATE user SET last_logtime='$date_log' where user_id = '$userid'");

					?>
					<script>
							alert("<?php echo "Welcome to Kapadyak, " . $user . "!"?>");
							window.location.replace('admin_forum/home.php');
					</script>
		 
				<?php
				
                }else{
                    ?>
                    <script>
                      alert("You have entered wrong username or password.");
                    </script>
                    <?php
                }

 
            } else {
                ?>
                <script>
                      alert("Username not found, please try again.");
                    </script>
                    <?php    
			 
     }
      
    }
}
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="image/x-icon" href="../Images/logo.ico">
    <link rel="stylesheet" href="../Style.css" type="text/css">
    <script src="../Scripts/showpassword.js"> </script>
    <title>Admin - Log In or Sign up</title>
</head>
<body>
    
<div class="login-container">

    <div class="login-input">

         <form action="#" method="POST" name="loginn">
                <img src="../Images/logo.png" class="login-logo2">
                <div class="login-title">APADYAK<br><center>(Admin)</div>
                <div class="login-text">Ride with us, enthusiast.</div>
                <div><input class="login-textbox" type="text" name="qwe" placeholder="Admin Username"></div>
                <div><input class="login-textbox" id="showpass"  type="password" name="password" placeholder="Password"></div>
                <div><input class="login-checkbox" onclick="myFunction()" type="checkbox"> Show Password</div>
                <div><input class="login-button" type="submit" name ="loginn" value="Log In " class="logBtnSubmit"></div>
            
        </form>
  
    </div>
    <div class="login-logo">
        <img src="../Images/logo.png">
    </div>

    <div class="footer">
        <?php include_once('../Includes/Footer.php')?>
    </div>
</div>

</body>
</html>
    