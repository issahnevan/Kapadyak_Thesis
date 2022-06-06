<?php session_start(); ?>
<?php
    include('connect/connection.php');

    if(isset($_POST["register"])){
        $email = $_POST["qwe"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $first_name = $_POST["first_name"];
        $middle_name = $_POST["middle_name"];
        $last_name = $_POST["last_name"];
        $dob = $_POST["dob"];
        $sex = $_POST["sex"];
        $contact_number = $_POST["contact_number"];
        $address = $_POST["address"];

        $check_query = mysqli_query($connect, "SELECT * FROM useraccount where email_address ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
                <script>
                    alert("User with email already exist!");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($connect, "INSERT INTO useraccount (email_address, username, password, confirm_password, first_name, middle_name, last_name, dob, sex, contact_number, address, email_status) VALUES ('$email', '$username', '$password_hash', '$confirm_password', '$first_name', '$middle_name', '$last_name', '$dob', '$sex', '$contact_number', '$address', 0)");    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='shunsuki1216@gmail.com';
                    $mail->Password='Shunsuki_16';
    
                    $mail->setFrom('kapadyakofficial2022@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["qwe"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>;";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('email_verification.php');
                                </script>
                                <?php
                            }
                }
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
    <title>Sign Up for Kapadyak</title>
</head>
<body>
<!-- <div class="">
    <div id="">
        <div class="">Already have an account? <a href="login.php">Sign in</a></div>
        <div class="">Create your account. Personal Information. </div>
        <div class="">
            <form action="#" method="post" name="register">
                    <div class=""><input type="email" name="qwe" placeholder="Email" required></div>
                    <div class=""><input type="text"  name="username" placeholder="Username" required></div>
                    <div class=""><input type="password" name="password" placeholder="Password" required></div>
                    <div class=""><input type="password" name="confirm_password" placeholder="Confirm Password" required></div>
                    <div class=""><input type="text" name="first_name" id="" placeholder="First Name" required></div>
                    <div class=""><input type="text" name="middle_name" id="" placeholder="Middle Name"required></div>
                    <div class=""><input type="text" name="last_name" id="" placeholder="Last Name" required></div>
                    <div class=""><input type="date" name="dob" placeholder="Birthdate" title="Birthday"></div>
                    Gender: <input type="radio" name="sex" value="male">Male
                    <input type="radio" name="sex" value="female">Female
                    <div class=""><input type="text" name="contact_number" placeholder="Contact Number"></div>
                    <div class=""><input type="text" name="address" placeholder="Address"></div>
                    <div class=""><input type="submit" value="Continue" name="register">
            </form>          
        </div>
    </div>
</div> -->
<div class="register-container">
        <div class="register-header">
            <div class="register-HeaderTitle">Create Your Account</div>
        </div>

        <div class="register-content">
               

               <form action="#" method="post" enctype = "multipart/form-data">
            <div id="register-layer1">
               <div class="Layer-Already">Already have an account? <a href="login.php">Sign-in &#8594</a></div>
               <div class="Layer-Title">Step 1 of 3</div>
               <div class="Layer-div1">
                       <div class="div-input"><input type="email" id="Email" name="email_address" placeholder="Email" required></div>
                       <div class="div-input"><input type="text"  id="Username" name="username" placeholder="Username"required></div>
                       <div class="div-input"><input type="password" id="Password" name="password" placeholder="Password" required></div>
                       <div class="div-input"><input type="password" id="ConfirmPassword" name="confirm_password" placeholder="Confirm Password" required></div>
                </div>
   
               <div class="Layer-div2">
                   <div class="div-input2">
                       <input type="text" name="first_name" id="Fname" placeholder="First Name" required> 
                       <input type="text" name="middle_name" id="Mname" placeholder="Middle Name"required>
                       <input type="text" name="last_name" id="Lname" placeholder="Last Name" required></div> 
                    <div class="div-input2">
                       <input type="text" name="contact_number" placeholder="Contact Number">
                       <input type="text" name="address" placeholder="Address"></div> 
                    <div class="div-input2">
                       <input type="date" name="dob" placeholder="Birthday" title="Birthday">
                       <select name="sex">
                           <option value="" disabled selected hidden> GENDER </option> 
                           <option value="male"> Male </option>
                           <option value="female"> Female </option>
                       </select>
                    </div>                
               </div>
            </div>
            <div class="nextBtn"><button onclick="displayNext()" id="Next"> Continue &#8594 </button></div>
            <input type="checkbox" id="checkboxAccept" required>
            <label for="checkboxAccept">Accept Terms and Condition</label>
            <div class="Layer4Btn"><button type="submit" name="register">Sign Up</button></div>
        </div>
</div>

</body>
</html>