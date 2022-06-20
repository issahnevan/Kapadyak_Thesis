<?php 
    include('connect/connection.php');
    if(isset($_POST["verify"])){
        $otp = $_SESSION['otp'];
        $email = $_SESSION['mail'];
        $otp_code = $_POST['otp_code'];
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $confirm_password = $_SESSION['confirm_password'];
        $first_name = $_SESSION['first_name'];
        $middle_name = $_SESSION['middle_name'];
        $last_name = $_SESSION['last_name'];
        $dob = $_SESSION['dob'];
        $sex = $_SESSION['sex'];
        $contact_number = $_SESSION['contact_number'];
        $address = $_SESSION['address'];


        if($otp != $otp_code){
        ?>
        <script>
            alert("Invalid OTP code!");
            window.onload = function() {
                displaySecond();
            }

        </script>
        <?php
        } else{
                            $password_hash = password_hash($password, PASSWORD_BCRYPT);
                            $password_hash = password_hash($confirm_password, PASSWORD_BCRYPT);

                $result = mysqli_query($connect, "INSERT INTO members (email_address, username, password, confirm_password, first_name, middle_name, last_name, dob, sex, contact_number, address, email_status) VALUES ('$email', '$username', '$password_hash', '$confirm_password', '$first_name', '$middle_name', '$last_name', '$dob', '$sex', '$contact_number', '$address', 0)");    
                if($result)
        mysqli_query($connect, "UPDATE members SET email_status = 1 WHERE email_address = '$email'");
        ?>
        <script>
            alert("<?php echo "You have successfully verified your account."?>");
            window.onload = function() {
                displayThird();
            }
        </script>
        <?php
        }
    }

?>