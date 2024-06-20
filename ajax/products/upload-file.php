<?php 
  header('Content-Type:application/json');
  if($_FILES['image']['name'] != ""){
      $fileName = $_FILES['image']['name'];
      $fileTmpName = $_FILES['image']['tmp_name'];
      $uploadPath = "../temp/$fileName"; 
      move_uploaded_file($fileTmpName,$uploadPath);

      echo json_encode([
        'status' => 200,
        'image' => $fileName
      ]);
      
  }else{
      echo json_encode([
        'status' => 'not found.'
      ]);
  }
?>