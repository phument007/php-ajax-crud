<?php 
header('Content-Type:application/json');
include "../config.php";

$id = $_POST['id'];

//Apply sql for delete image from folder 
$sql = "SELECT * FROM `product` WHERE `product_id` = $id ";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$row =  mysqli_fetch_assoc($result);
if($num > 0){
    $check = "../images/".$row['image'];
    if(file_exists($check)){
        unlink($check);
    }
}

// Apply sql for delete record from database
$sql = "DELETE FROM `product` WHERE `product_id` = $id";
mysqli_query($conn,$sql);

echo json_encode([
    'status' => 200,
    'message' => 'Deteted Product Success.',
]);



?>