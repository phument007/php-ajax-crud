<?php 
   include "../config.php";
   if(isset($_GET['search']) != ""){
      $search = $_GET['search'];
   }


   echo $page = $_GET['paginate'];

   $offset = ((int)$page - 1) * 3;

  
//    if(isset($_GET['paginate']) !== ""){
//       $page = $_GET['paginate'];

      
//       echo "<h1>$page</h1>";
//       $offset = ((int)$page - 1) * 3;

     
//    }else{
//       $offset = 0;
//    }
   $sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$search%' LIMIT 3 OFFSET $offset ";
   $result = mysqli_query($conn, $sql);
?>
<table class="table table-borderless">
    <thead>
        <tr>
            <th scope="col">Preview</th>
            <th scope="col">Product</th>
            <th scope="col">Price</th>
            <th scope="col">Sold</th>
            <th scope="col">Revenue</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr class="tr_data">
            <input type="hidden" value="<?php echo $row['product_id'] ?>" id="product_id">
            <th scope="row">
                <img img-name="<?php echo $row['image'] ?>" style="width:150px; height: 100px;"
                    src="../ajax/images/<?php echo $row['image'] ?>" alt="">
            </th>
            <td><a href="#" class="text-primary fw-bold product_name"><?php echo $row['product_name']  ?></a></td>
            <td>$<span><?php echo $row['price'] ?></span></td>
            <td class="fw-bold"><?php echo $row['qty'] ?></td>
            <td>$<?php echo $row['total'] ?></td>
            <td>
                <button data-bs-toggle="modal" data-bs-target="#ModalAdd" type="button" id="btn_edit"
                    class=" btn btn-primary btn-sm"><i class="bi bi-pen-fill"></i></button>
                <button data-id="<?php echo $row['product_id'] ?>" data-bs-toggle="modal" data-bs-target="#ModalDeleted"
                    type="button" class=" btn btn-danger btn-sm btn_show_modal_remove"><i
                        class="bi bi-trash3"></i></button>
            </td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
<?php 
  $sql = "SELECT * FROM `product` ";
  $result = mysqli_query($conn,$sql);
  $numPage = mysqli_num_rows($result);

  

  $page = ceil($numPage / 3);

  echo "<h1>$page</h1>";
?>
<div class="paginate mt-4">
 <nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
        </a>
        </li>
        <?php 
          for($i=1;$i<=$page;$i++){
            ?><li onclick="Pagination(<?php echo $i ?>)" class="page-item"><a class="page-link page_num"><?php echo $i ?></a></li><?php
          }
        ?>
        <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
        </a>
        </li>
    </ul>
 </nav>
</div>