<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    </head>
    <body>
    <div class="reset-container">
    <a href="login.php" title="Go back to login"><div class="reset-logotitle"><img src="Images/logo.png" class="login-logo2">APADYAK</div></a>
            <div class="reset-input">
                    <?php
                    include('connect/connection.php');
                    if (isset($_GET["key"]) && isset($_GET["email"]) && isset($_GET["action"]) && ($_GET["action"] == "reset") && !isset($_POST["action"])) {
                        $key = $_GET["key"];
                        $email = $_GET["email"];
                        $curDate = date("Y-m-d H:i:s");
                        $error = "";

                        $query = mysqli_query($connect, "SELECT * FROM `password_reset_temp` WHERE `key1`='$key' and `email_address`='$email'");
                        $row = mysqli_num_rows($query);
                        if ($row == "") {
                            $error .= '<h2>Invalid Link</h2>';
                        } else {
                            $row = mysqli_fetch_assoc($query);
                            $expDate = $row['expDate'];
                            if ($expDate >= $curDate) {
                                ?> 
                                
                               
                                <form method="post" action="#" name="update">
                                <div class="reset-title">Reset Password</div>   
                                    <input type="hidden" name="action" value="update" class="form-control"/>

                                    <div class="reset-subtitle"> Enter New Password:</div>
                                    <div class="reset-input"><input type="password" id="password" name="pass1" onfocus="showChecklist();" required/></div>                                   
                                    <div class="reset-subtitle">Re-Enter New Password:</div>
                                    <div class="reset-input"><input type="password" id="confirmPassword" name="pass2" onblur="checkPassword();" required/></div> 
                                    <div><input class="login-checkbox" onclick="showBothPassword()" type="checkbox"> Show Password</div>
                                    <script src="Scripts/layerDisplay.js"> </script>
                                    <div class="div-progress-requirements" id="progress-req">
                                    <div class="progress">
                                            <div id="password-strength" 
                                                class="progress-bar"
                                                style="width:0%">
                                            </div>
                                    </div>
                                    <div class="div-pass-checklist">
                                        <ul class="list-unstyled">
                                            <li class="">
                                                <span class="low-upper-case">
                                                    <i class="fas fa-circle"></i>
                                                    &nbsp;Lowercase &amp; Uppercase
                                                </span>
                                            </li>
                                            <li class="">
                                                <span class="one-number">
                                                    <i class="fas fa-circle" aria-hidden="true"></i>
                                                    &nbsp;Number (0-9)
                                                </span> 
                                            </li>
                                            <li class="">
                                                <span class="one-special-char">
                                                    <i class="fas fa-circle" aria-hidden="true"></i>
                                                    &nbsp;Special Character (!@#$%^&*)
                                                </span>
                                            </li>
                                            <li class="">
                                                <span class="eight-character">
                                                    <i class="fas fa-circle" aria-hidden="true"></i>
                                                    &nbsp;Atleast 8 Character
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <script src="Scripts/passStrength.js"> </script>
                                    <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                                    <div class="reset-button">
                                        <button type="submit" id="reset">Reset Password</button>
                                    </div>

                                </form>
                                <?php
                            } else {
                                $error .= "<h2>Link Expired</h2>>";
                            }
                        }
                        if ($error != "") {
                            echo "<div class='error'>" . $error . "</div><br />";
                        }
                    }


                    if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
                        $error = "";
                        $pass1 = mysqli_real_escape_string($connect, $_POST["pass1"]);
                        $pass2 = mysqli_real_escape_string($connect, $_POST["pass2"]);
                        $email = $_POST["email"];
                        $curDate = date("Y-m-d H:i:s");
                              $pass1 = password_hash($pass1, PASSWORD_BCRYPT);
                            mysqli_query($connect, "UPDATE members SET password = '".$pass1."', confirm_password = '".$pass1."' WHERE email_address = '" .$email."'");
                            // UPDATE members SET email_status = 1 WHERE email_address = '$email'

                            mysqli_query($connect, "DELETE FROM `password_reset_temp` WHERE `email_address` = '$email'");

                            echo '<div class="error"><h2>Congratulations! Your password has been updated successfully.</h2></div>';
                        }
                    
                    ?>
                </div>
                <div class="footer">
                    <?php include_once('Includes/Footer.php')?>
                </div>
        </div>
    </body>
</html>