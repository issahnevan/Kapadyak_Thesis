<?php   date_default_timezone_set('Asia/Manila');
?>
<html>
    <head>
        <title>Password Recovery using PHP and MySQL</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <h2>Forgot Password</h2>   

                    <?php
                    include('connect/connection.php');
                    if (isset($_POST["email"]) && (!empty($_POST["email"]))) {
                        $email = $_POST["email"];
                        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                        $error = "Invalid email address";

                        if (!$email) {
                            $error .="Invalid email address";
                        } else {
                            $sel_query = "SELECT * FROM `members` WHERE email_address='$email '";
                            $results = mysqli_query($connect, $sel_query);
                            $row = mysqli_num_rows($results);
                        }
                        if ($error == !$email) {
                            echo "user not found";
                        } else {

                            $output = '';

                            $expFormat = mktime(date("H"), date("i"), date("s"), date("m"), date("d") + 1, date("Y"));
                            $expDate = date("Y-m-d H:i:s", $expFormat);
                            $key = md5(time());
                            $addKey = substr(md5(uniqid(rand(), 1)), 3, 10);
                            $key = $key . $addKey;
                            // Insert Temp Table
                            mysqli_query($connect, "INSERT INTO `password_reset_temp` (`email_address`, `key`, `expDate`) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");


                            $output.='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output.='<p><a href="http://localhost/thesis/kapadyak_thesis/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/thesis/kapadyak_thesis/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
                            $body = $output;
                            $subject = "Password Recovery";

                            $email_to = $email;


                            //autoload the PHPMailer
                            require "Mail/phpmailer/PHPMailerAutoload.php";
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->Host = "smtp.gmail.com"; // Enter your host here
                            $mail->SMTPAuth = true;
                            $mail->Username = "aspirasneilanthonyc@gmail.com"; // Enter your email here
                            $mail->Password = "mfaejscvevhrobsa"; //Enter your passwrod here
                            $mail->Port = 587;
                            $mail->IsHTML(true);
                            $mail->From = "kapadyakofficial2022@gmail.com";
                            $mail->FromName = "kapadyakofficial2022";

                            $mail->Subject = $subject;
                            $mail->Body = $body;
                            $mail->AddAddress($email_to);
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo "An email has been sent";
                            }
                        }
                    }
                    ?>

<div class="login-form">
<form method="post" action="" name="reset">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" name="email" placeholder="Email" autocomplete="nope">
      </div>

      <div class="input-field">
        <input type="submit" id="reset" value="Reset Password"  class="btn btn-primary"/>
    </div>
  </form>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

                    <form method="post" action="" name="reset">
                        

                        <div class="form-group">
                           <label><strong>Enter Your Email Address:</strong></label>
                            <input type="email" name="email" placeholder="username@email.com" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" id="reset" value="Reset Password"  class="btn btn-primary"/>
                        </div>
                    </form>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>