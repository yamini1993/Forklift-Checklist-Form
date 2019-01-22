<?php
include "config.php";

$fid = $_POST['fid'];   // department id

$sql = "SELECT u_id,name FROM users WHERE f_id='".$fid."'";

$result = mysqli_query($conn,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['u_id'];
    $name = $row['name'];

    $users_arr[] = array("id" => $userid, "name" => $name);
}

// encoding array to json format
echo json_encode($users_arr);
?>