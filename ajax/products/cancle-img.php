<?php 
  header('Content-Type:application/json');
  include "../config.php";

  $id = $_POST['ID'];

  //Apply SQL for remove image from folder 
  $sql = "SELECT * FROM `temp` WHERE `temp_id` =$id";
  $result = mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);
  $row = mysqli_fetch_assoc($result);
  if($num > 0){
     $check_folder = "../temp/".$row['temp_name'];
     if(file_exists($check_folder)){
        unlink($check_folder);
     }
  }

  //Apply SQL for delete image from table in database
  $sql = "DELETE FROM `temp` WHERE `temp_id` = $id ";
  $result = mysqli_query($conn,$sql);
  
  if($result){
     echo json_encode([
        'status' => 200,
        'message' => 'deleted image success',
     ]);
  }


?>