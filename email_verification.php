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
        <form action="#" method="POST">
        <div class="">
        <label for="email_address" class="">Kindly check your email to redeem your code. The code is 6 numbers long.</label>
        <div class="">
            <input type="text" id="" class="" name="otp_code" required autofocus>
        </div>
        </div>
        </form>
        <div class="">
            <input type="submit" value="Verify" name="verify">
        </div>
    </div>    
</div>
</body>
</html>
<?php 
    include('connection/connection.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email_address = $_SESSION['email_address'];
        $otp_code = $_POST['otp_code'];

        if($otp != $otp_code){
        ?>
        <script>
            alert("Invalid OTP code");
        </script>
        <?php
        } else{
        mysqli_query($connect, "UPDATE login SET status = 1 WHERE email_address = '$email_address'");
        ?>
        <script>
            alert("<?php echo "You have successfully verified your account."?>");
        </script>
        <?php
        }

    }

?>