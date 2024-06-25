<?php 
  header('Content-Type:application/json');
  include "../config.php";

  $name = $_POST['name'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $img_id = $_POST['response_id_img'];

  $total = (float)$price * (int)$qty;

  if(!empty($name) && !empty($price) && !empty($qty) && !empty($img_id) ){
     //Apply SQL statement for select data form temp table
     $sql = "SELECT * FROM `temp` where `temp_id` = $img_id";
     $result = mysqli_query($conn, $sql);
     $num = mysqli_num_rows($result);
     $row = mysqli_fetch_assoc($result);
     $img_name = $row['temp_name'];
     if($num > 0){
        $old_folder = "../temp/$img_name";
        $new_folder = "../images/$img_name";
        if(file_exists($old_folder)){
            copy($old_folder,$new_folder);
            unlink($old_folder);
        }
     }

     //Apply SQL Statement for insert product to product table in database 
     $sql = "INSERT INTO `product`(`product_name`, `price`, `qty`, `total`, `image`) VALUES 
     ('$name','$price','$qty','$total','$img_name')";
      mysqli_query($conn,$sql);

      //Apply SQL Statement for delete data from temp table
      $sql = "DELETE FROM `temp` WHERE `temp_id` = $img_id";
      mysqli_query($conn,$sql);


     echo json_encode([
        'status' => 200,
        'message' => 'Added Product Successfully.',
     ]);


  }else{
    echo json_encode([
        'status' => 500,
        'message' => 'please input all feils',
    ]);
  }

  


?>