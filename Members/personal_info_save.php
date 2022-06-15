<?php
include('../dbcon.php');
include('../session.php');

$birth = $_POST['birth'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$contact_no = $_POST['contact_no'];

$conn->query("update members set first_name = '$firstname', last_name = '$lastname' , middle_name = '$middlename' , sex = '$sex', dob='$birth', address = '$address' , contact_number = '$contact_no' where member_id = '$id2'");
?>

<script>
 alert('You have successfully updated your account.');
window.location = 'personal_info_panel.php';
</script>