<!-- <?php
$session_Email = $_SESSION['SessionEmail'];
$session_Username = $_SESSION['SessionUsername'];
$session_Firstname = $_SESSION['SessionFirstname'];
$session_Lastname = $_SESSION['SessionLastname'];
$session_memberID =  $_SESSION['id'];
?> -->

<?php
 $image_query = $conn->query("select * from members where member_id='$session_memberID'");
 while($image_row = $image_query->fetch())
 {
 if($image_row['image'] == ""){
    $memberImage = "../Images/default-profile.png";
} else{
    $memberImage=$image_row['image'];
}
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../Scripts/index.js"> </script>
    <link rel="stylesheet" href="../style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
        rel="stylesheet"
    />
    <title>Home | Kapadyak</title>
</head>
<body>

    <header>
        <div class="header-logo" id="headerLogo">
            <a href="index.php"><img src="../Images/logo.png" >
                <span class="header-logo-text">APADYAK</span>
            </a>
        </div>
        <div class="header-search">
           
                <form action="search_result.php" method="post">
                <div class="search">
                <input type="text" name="search" class="searchTerm" placeholder="Search Kapadyak" oninput="searchSuggestionResults()" required>
                <button type="submit" class="searchButton">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
                </form>
             </div> 
        </div>


        <div class="header-links">
            <span class="profile-username" onclick="showMenu()">
              <img src=" <?php  echo $memberImage; ?>" class="img-square" >



                <span class="header-links-username"><?php echo "$session_Username";?></span>
            </span>
            <div class="profile-main" id="profile">
                <div class="profile-menu">
                    <ul>
                        <li><a href="../members/personal_info_panel.php"><?php echo "$session_Firstname ". "$session_Lastname";?></a></li>
                        <li><a href="../logout.php">Logout</a></li>
                    <ul>
                </div>
            </div>
        </div>
    </header>
</body>
</html>