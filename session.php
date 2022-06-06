<?php
session_start();
include('connect/connection.php');
if (!isset($_SESSION['id'])){

}
$session_id = $_SESSION['id'];
$query=mysqli_query($connect, "SELECT * FROM useraccount where user_ID ='$session_id'");
$rowCount = mysqli_fetch_array($query);
$cover_picture=$rowCount['cover_picture'];
$profile_picture=$rowCount['profile_picture'];
$firstname=$rowCount['first_name'];
$lastname=$rowCount['last_name'];
$username=$rowCount['user_name'];

?>