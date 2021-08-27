<?php

include('DbConnection.php');

$data = stripslashes(file_get_contents("php://input"));


$mydata = json_decode($data, true);

$id = $mydata['sid'];

//Deleteing Data

if (!empty($id)) {
    $s = "delete from student where id= '$id'";
    if (mysqli_query($conn, $s)) {
        echo "Student deleted successfully";
    } else {
        echo "Unable to delete student";
    }
} else {

    echo "Something went wrong";
}
