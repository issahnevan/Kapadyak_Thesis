<?php 
require 'connect/connection.php';
session_start();
if (isset($_SESSION['member_id'])) {

}

ob_start(); 
?>
<?php
    include('connect/connection.php');

    if(isset($_POST["loginn"])){
        $email = mysqli_real_escape_string($connect, trim($_POST['qwe']));
        $password = trim($_POST['password']);

        if(empty($email) && empty($password)){
            ?>
            <script>
                alert("Please enter email or password! ");
            </script>
            <?php
        } else {
        $sql = mysqli_query($connect, "SELECT * FROM members where email_address = '$email'");
        $count = mysqli_num_rows($sql);

            if($count > 0){
                $fetch = mysqli_fetch_assoc($sql);
                $hashpassword = $fetch["password"];
              
            $_SESSION["SessionEmail"] = $fetch['email_address'] ;
            $_SESSION["SessionUsername"] = $fetch['username'] ;
            $_SESSION["SessionFirstname"] = $fetch['first_name'] ;
            $_SESSION["SessionMiddlename"] = $fetch['middle_name'] ;
            $_SESSION["SessionLastname"] = $fetch['last_name'] ;
            // $_SESSION["AccountType"]= $fetch['AccountType'];
            // $_SESSION["AccountLevel"] = $fetch['AccountLevel'];
            // $_SESSION["TransactionsTableName"] = $fetch['TransactionsTableName'];
            // $_SESSION["InboxTableName"] = $fetch['InboxTableName'];
            // $_SESSION["MailingAddress"] = $fetch['FileMailingAddress'];
           
            
                 if($fetch["email_status"] == 0){
                    ?>
                    <script>
                        alert("Please verify your email first upon logging-in.");
                    </script>
                    <?php
                }else if(password_verify($password, $hashpassword)){
                    ?>
               
                   
                        <script>
                                    alert("<?php echo "Welcome to Kapadyak, " . $email . "!"?>");
                                    window.location.replace('index.php');
                                </script>
             
                    <?php
                }else{
                    ?>
                    <script>
                        alert("You have entered wrong email or password.");
                    </script>
                    <?php
                }
            } else {
                ?>
                <script>
                        alert("Email not found or not verified!");
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
    <link rel="ICON" type="image/x-icon" href="Images/logo.ico">
    <link rel="stylesheet" href="Style.css" type="text/css">
    <script src="Scripts/showpassword.js"> </script>
    <title>Kapadyak - Log In or Sign up</title>
</head>
<body>

<div class="login-container">
    <div class="login-input">

         <form action="#" method="POST" name="loginn">
                <img src="Images/logo.png" class="login-logo2">
                <div class="login-title">APADYAK</div>
                <div class="login-text">Ride with us, enthusiast.</div>
              

                <div><input class="login-textbox" type="text" name="qwe" placeholder="Email"></div>
                <div><input class="login-textbox" id="showpass"  type="password" name="password" placeholder="Password"></div>
                <div><input class="login-checkbox" onclick="myFunction()" type="checkbox"> Show Password</div>
                <div><input class="login-button" type="submit" name ="loginn" value="Log In" class="logBtnSubmit"></div>
            <div class="login-create">
            Don't have an account?
            <a href="user_register.php">Create an Account!</a>
        </div>
        </form>
    </div>
    <div class="login-logo">
        <img src="Images/logo.png">
    </div>

    <div class="footer">
        <?php include_once('Includes/Footer.php')?>
    </div>
</div>

</body>
</html>
    