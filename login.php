<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" type="image/x-icon" href="Images/logo.ico">
    <link rel="stylesheet" href="Style.css" type="text/css">
    <title>Kapadyak - Log In/Sign up</title>
</head>
<body>
<div class="login-container">
    <div class="login-input">

        <form action="index.php" method="post">
                <img src="Images/logo.png" class="login-logo2">
                <div class="login-title">APADYAK</div>
                <div class="login-text">Join us today!</div>

                <div><input class="login-textbox" type="text" name="email" placeholder="Email"></div>
                <div><input class="login-textbox" type="password" name="password" placeholder="Password"></div>
                <div><input class="login-checkbox" type="checkbox"> Show Password</div>
                <div><input class="login-button" type="submit" value="Sign in" class="logBtnSubmit"></div>
            <div class="login-create">
            Don't have an account?
            <a href="user_register.php">Create an Account</a>
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