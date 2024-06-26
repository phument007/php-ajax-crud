<?php 
  header('Content-Type:application/json');
  include "../config.php";


  $id = $_POST['product_id_update'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $qty = $_POST['qty'];

  if(empty($name) && !empty($price) && !empty($qty)){
    
  }else{

  }
  

?>