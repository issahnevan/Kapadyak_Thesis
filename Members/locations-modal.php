<?php
require("../connect/connection.php");

// Gets data from URL parameters.
if(isset($_GET['add_location'])) {
    add_location();
}


function add_location(){
    $con=mysqli_connect ("localhost", 'root', '','db_kapadyak');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $lat = $_GET['lat'];
    $lng = $_GET['lng'];
    // Inserts new row with place data.
    $query = sprintf("INSERT INTO post " .
        " (post_id , lat, lng) " .
        " VALUES (NULL, '%s', '%s');",
        mysqli_real_escape_string($con,$lat),
        mysqli_real_escape_string($con,$lng));

    $result = mysqli_query($con,$query);
    echo json_encode("Inserted Successfully");
    if (!$result) {
        die('Invalid query: ' . mysqli_error($con));
    }
}
function get_saved_locations(){
    $con=mysqli_connect ("localhost", 'root', '','db_kapadyak');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    // update location with location_status if admin location_status.
    $sqldata = mysqli_query($con,"select lng,lat from post ");

    $rows = array();
    while($r = mysqli_fetch_assoc($sqldata)) {
        $rows[] = $r;

    }
    $indexed = array_map('array_values', $rows);

    //  $array = array_filter($indexed);

    echo json_encode($indexed);
    if (!$rows) {
        return null;
    }
}

function get_saved_data(){
    $con=mysqli_connect ("localhost", 'root', '','db_kapadyak');
    if (!$con) {
        die('Not connected : ' . mysqli_connect_error());
    }
    $sqldata = mysqli_query($con, "SELECT lat,  lng  FROM post  ");

 $rows = array();
 while($r = mysqli_fetch_assoc($sqldata)) {
     $rows[] = $r;
     $lat[] = $r['lat'];
     $lang[] = ['lang'];

 }
 echo json_encode($rows);
  
  }

   
   

?>