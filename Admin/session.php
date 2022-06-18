<?php
//Start session
session_start();
if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')) {
header('location:../login_form.php?=ErrorAdmin');
}

$id = $_SESSION['id'];
$session_id=$_SESSION['Session_ID'];
$user_query = $conn->query("select * from user where user_id = '$session_id'");
$user_row = $user_query->fetch();
$name = $user_row['fname'];
$id2 = $user_row['user_id'];
$access = "Admin";
 ?>
 