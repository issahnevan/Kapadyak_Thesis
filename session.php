<?php
include("connect/connection.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:login.php');
}

$id = $_SESSION['id'];

$query=mysqli_query ($connect,"SELECT * FROM useraccount WHERE user_ID ='$id'");
$rowCount=mysqli_fetch_array($query);
$cover_picture=$rowCount['cover_picture'];
$profile_picture=$rowCount['profile_picture'];
$firstname=$rowCount['firstname'];
$lastname=$rowCount['lastname'];
$username=$rowCount['user_name'];
?>