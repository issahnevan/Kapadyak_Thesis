<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up for Kapadyak</title>
</head>
<body>
<div class="">
    <div id="">
        <div class="">Already have an account? <a href="login.php">Sign in</a></div>
        <div class="">Create your account. Personal Information. </div>
        <div class="">
            <form action="email_verification.php" method="post">
                    <div class=""><input type="email" name="email_address" placeholder="Email" required></div>
                    <div class=""><input type="text"  name="username" placeholder="Username" required></div>
                    <div class=""><input type="password" name="password" placeholder="Password" required></div>
                    <div class=""><input type="password" name="confirm_password" placeholder="Confirm Password" required></div>
                    <div class=""><input type="text" name="FirstName" id="Fname" placeholder="First Name" required></div>
                    <div class=""><input type="text" name="MiddleInitial" id="Mname" placeholder="Middle Name"required></div>
                    <div class=""><input type="text" name="LastName" id="Lname" placeholder="Last Name" required></div>
                    <div class=""><input type="date" name="Birthdate" placeholder="Birthday" title="Birthday"></div>
                    <select name="Gender">
                        <option value="" disabled selected hidden> SEX </option> 
                        <option value="male"> Male </option>
                        <option value="female"> Female </option>
                    </select>
                    <div class=""><input type="text" name="Contact" placeholder="Contact Number"></div>
                    <div class=""><input type="submit" value="Continue" name="resigter">
            </form>          
        </div>
    </div>
</div>
</body>
</html>