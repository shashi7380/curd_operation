<?php
  include("DbConnection.php");

  // retrieve data from student table

  $s="Select * from student";
  $result=mysqli_query($conn,$s);

  if(mysqli_num_rows($result)>0){
      $data=array();
      while($row = mysqli_fetch_assoc($result)){
        $data[]=$row;
      }
  }

  // convert data to JSON and return response to AJAX call

  echo json_encode($data);


?>