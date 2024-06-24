<?php 
  header('Content-Type:application/json');
  include "../config.php";
  if($_FILES['image']['name'] != ""){
      $fileName = $_FILES['image']['name'];
      $fileTmpName = $_FILES['image']['tmp_name'];
      //img.jpg
      $arr = explode('.',$fileName);

      //['img','jpg']

      $newName = time() .'.'. end($arr);

      // 12134354.jpg

      $uploadPath = "../temp/$newName"; 
      move_uploaded_file($fileTmpName,$uploadPath);

      $sql = "INSERT INTO `temp`(`temp_name`) VALUE ('$newName')";
      $result = mysqli_query($conn,$sql);
     
      echo json_encode([
        'status' => 200,
        'image' => $newName
      ]);
      
  }else{
      echo json_encode([
        'status' => 'not found.'
      ]);
  }
?>