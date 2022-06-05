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
        <form action="Backend/Login.php" method="post">
                <div><label class="">LOG IN</label></div>
                <div><label class="">EMAIL</label></div>
                <div><input type="text" name="emailUser" class=""></div>
                <div><label class="">PASSWORD</label></div>
                <div><input type="password" name="Password_TB" class=""></div>
                <div><input type="submit" value="LOG IN" class="logBtnSubmit"></div>
        </form>
        <div><a href="user_register.php">Create an Account</a></div>
    </div>

    <div class="login-logo">
        <img src="Images/logo.png">
    </div>
            
    <div class="footer">
    <?php include_once('Includes/footer.php')?>
    </div>
</div>
</body>
</html>