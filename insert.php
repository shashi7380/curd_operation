<?php
 include('DbConnection.php');

// get input data from request 
$data=stripslashes(file_get_contents("php://input"));

// conver input data in php object,true means as an associative array
$mydata=json_decode($data,true);

 $name= $mydata['name'];
 $email=$mydata['email'];
 $pass=$mydata['password'];
 $id=$mydata['id'];

 //Insert data
/*
 if(!empty($name) && !empty($email) && !empty($pass)){

    $s="insert into student(name,email,password) values('$name','$email','$pass')";
    if(mysqli_query($conn,$s)){
        echo "Student Data saved successfully";
    }else{
        echo "Unable to save data";
    }

 }else{
     echo "All fields are required";
 }
*/
 //Insert and Update data

 if(!empty($name) && !empty($email) && !empty($pass)){

    $s="insert into student(id,name,email,password) values
    ('$id','$name','$email','$pass') on duplicate key
     update name='$name',email='$email',password='$pass'";
    if(mysqli_query($conn,$s)){
        echo "Student Data saved successfully";
    }else{
        echo "Unable to save data";
    }

 }else{
     echo "All fields are required";
 }
 
 


?>