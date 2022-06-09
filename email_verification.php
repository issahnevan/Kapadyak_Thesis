<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>
<body>
<form action="#" method="POST">
    <label for="email_address">Enter the OTP Code.<br>Kindly check your email to redeem your code. The code is 6 numbers long.</label><br>
        <input type="text" id="otp" class="form-control" name="otp_code" required autofocus>
            <div>
                <input type="submit" value="Verify" name="verify">
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
            alert("<?php echo "You may now login."?>");
            window.location.replace('login.php');
        </script>
        <?php
        }
    }

?>