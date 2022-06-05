<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify your Account</title>
</head>
<body>
<div class="">Enter the OTP Code</div>
    <div class="">
        <form action="#" method="POST" name="verify">
        <div class=""><label for="email_address" class="">Kindly check your email to redeem your code. The code is 6 numbers long.</label></div>  
        <div class=""><input type="text" id="" class="" name="otp_code" required autofocus></div>
        <div class=""><input type="submit" value="Verify" name="verify"></div>
        </form>
    </div>    
</div>
</body>
</html>
<?php 
    include('connect/connection.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
        ?>
        <script>
            alert("Invalid OTP code!");
        </script>
        <?php
        } else{
        mysqli_query($connect, "UPDATE useraccount SET email_status = 1 WHERE email_address = '$email'");
        ?>
        <script>
            alert("<?php echo "You have successfully verified your account."?>");
            window.location.replace('login.php');
        </script>
        <?php
        }

    }

?>