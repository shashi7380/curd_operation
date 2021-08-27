<?php

include('DbConnection.php');
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data, true);

$id = $mydata['sid'];

//Retrieve Specific data according to id

if (!empty($id)) {
    $s = "select * from student where id= '$id'";
    $result = mysqli_query($conn, $s);
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
} else {

    echo "Something went wrong";
}
