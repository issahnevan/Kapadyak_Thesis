<?php
function getUsername($connect,$username){
    $query="SELECT * FROM useraccount email_address = '$email'";
    $run=mysqli_query($connect,$query);
    $data = mysqli_fetch_assoc($run);
    return $data;
}
?>