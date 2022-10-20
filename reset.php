<?php   date_default_timezone_set('Asia/Manila');
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Password Recovery using PHP and MySQL</title>
    </head>
    <body>

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
                            $sel_query = "SELECT * FROM members WHERE email_address='$email '";
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
                            mysqli_query($connect, "INSERT INTO password_reset_temp (email_address, key1, expDate) VALUES ('" . $email . "', '" . $key . "', '" . $expDate . "');");


                            $output.='<p>Please click on the following link to reset your password.</p>';
                            //replace the site url
                            $output.='<p><a href="http://localhost/kapadyak_thesis/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset" target="_blank">http://localhost/kapadyak_thesis/reset-password.php?key=' . $key . '&email=' . $email . '&action=reset</a></p>';
                            $body = $output;
                            $subject = "Password Recovery";

                            $email_to = $email;


                            //autoload the PHPMailer
                            require "Mail/phpmailer/PHPMailerAutoload.php";
                            $mail = new PHPMailer();
                            $mail->IsSMTP();
                            $mail->Host = "smtp.gmail.com"; // Enter your host here
                            $mail->SMTPAuth = true;
                            $mail->Username = 'kapadyakofficial2022@gmail.com';
                            $mail->Password = 'rnmezyfbvgexpzht';
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
                                ?>
                                <script>
                                    alert("<?php echo "An email has sent been sent to reset your account."?>");
                                </script>
                                <?php
                            }
                        }
                    }
                    ?>

<div class="close-button" onclick="hideAddPost()"><button>&times;</button></div>
<div class="forgot-form-title">Forgot Password</div>
<form method="post" action="" name="reset">

<div class="forgot-form-subtitles">Enter your email address</div>
        <input type="email" id="Email" name="email" required>

    <div class="post-button forgot-button">
        <button type="submit" id="reset">Reset Password</button>
    </div>
  </form>


    </body>
</html>