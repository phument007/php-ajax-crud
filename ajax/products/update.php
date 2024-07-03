<?php 
  header('Content-Type:application/json');
  include "../config.php";
  $update_id = $_POST['product_id_update'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];
  $total = (float)$price * (int)$qty;
  if(!empty($name) && !empty($price) && !empty($qty)){
     if($_POST['response_id_img'] != "" ){

        $id = $_POST['response_id_img'];
        //Apply SQL for select image from temp table
        $SQL = "SELECT * FROM `temp` WHERE `temp_id` = $id";
        $result = mysqli_query($conn, $SQL);
        $num = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $image = $row['temp_name'];
        if($num > 0){
          $temp_folder = "../temp/$image";
          $product_folder = "../images/$image";
          if(file_exists($temp_folder)){
            copy($temp_folder,$product_folder);
            unlink($temp_folder);
          }

          //Apply Sql for delete image from temp table 
          $SQL = "DELETE FROM `temp` WHERE `temp_id` = $id";
          mysqli_query($conn,$SQL);

        }
     }else{
        $image = $_POST['old_image'];

     }



     $SQL = "UPDATE `product` SET `product_name`='$name',
     `price`='$price',`qty`='$qty',`total`='$total',`image`='$image' WHERE `product_id` = $update_id";

     mysqli_query($conn,$SQL);

     echo json_encode([ 
      'status' => 200,
      'message' => "Updated Product successfully.",
     ]);

  }else{
     echo json_encode([
      'status' => 500,
      'message' => "Please Input All feils",
     ]);
  }
  
?>