<?php
include('../dbcon.php');
include('../session.php');

$birth = $_POST['birth'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$username = $_POST['username'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];

$conn->query("update members set first_name = '$firstname', last_name = '$lastname' , middle_name = '$middlename' , username = '$username', sex = '$sex', dob='$birth', address = '$address' , contact_number = '$contact_no' where member_id = '$id2'");

$_SESSION['SessionUsername'] = $username;
$_SESSION['SessionFirstname'] = $firstname;
$_SESSION['SessionLastname'] = $lastname;
?>

<script>
 alert('You have successfully updated your account.');
window.location = 'personal_info_panel.php';
</script>