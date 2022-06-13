<!-- <?php
$session_Email = $_SESSION['SessionEmail'];
$session_Username = $_SESSION['SessionUsername'];
$session_Firstname = $_SESSION['SessionFirstname'];
$session_Lastname = $_SESSION['SessionLastname'];
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home / Kapadyak</title>
</head>
<body>
    <header>
    <div class="header-logo">
        <a href="#"><img src="Images/logo.png"></a>
        <span class="header-logo-text">APADYAK</span>
    </div>
        <div class="header-search">
            <input type="text" id="" placeholder="Search Kapadyak" oninput="searchSuggestionResults()">
            <input type="button" id="" onclick="showSearchBar()">
        </div>
        <div class="header-links">
            <li><a href="#"><?php echo "$session_Firstname ". "$session_Lastname";?></a></li>
            <li><?php echo "$session_Username";?></li>
            <li><a href="logout.php">Logout</a></li>
        </div>
    </header>
</body>
</html>