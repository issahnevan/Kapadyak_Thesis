<?php
$session_Email = $_SESSION['SessionEmail'];
$session_Username = $_SESSION['SessionUsername'];
$session_Firstname = $_SESSION['SessionFirstname'];
$session_Lastname = $_SESSION['SessionLastname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home / Kapadyak</title>
</head>
<body>

<nav>
    <ul id=""><a href="index.php"><img id="" src="Images/Logo.png"></a>
        <li class="" id="" > <input type="text" id="" placeholder="Search Kapadyak" oninput="searchSuggestionResults()">
        <div id=""></div>
        </li>
        <li class= "" ><input type="button" id="" onclick="showSearchBar()" ></li>
        <li class="" id=""><a href="#"><?php echo "<h2>$session_Firstname ". "$session_Lastname</h2>";?></a></li>
        <li class="" id=""><?php echo "<h2>$session_Username</h2>";?></p></li>
        <li class="" id=""><a href="logout.php">Logout</a></li>
    </ul>
</nav>
</body>
</html>