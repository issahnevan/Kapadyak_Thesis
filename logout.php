<?php
include('connect/connection.php');
include('session.php');
$sql = mysqli_query($connect, "update members set online_status = 'inactive' where member_id = '$id2'");
session_start();
session_destroy();
header("location:login.php");
?>