<?php 
   include "../config.php";
   $sql = "SELECT * FROM `product` ";
   $result = mysqli_query($conn, $sql);
//    include "./ajax/images/";
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <input type="hidden" value="<?php echo $row['product_id'] ?>" id="product_id">
            <th scope="row">
               <img img-name="<?php echo $row['image'] ?>" style="width:100px; height: 100px;" src="../ajax/images/<?php echo $row['image'] ?>" alt="">
            </th>
            <td><a href="#" class="text-primary fw-bold"><?php echo $row['product_name']  ?></a></td>
            <td>$<span><?php echo $row['price'] ?></span></td>
            <td class="fw-bold"><?php echo $row['qty'] ?></td>
            <td>$<?php echo $row['total'] ?></td>
            <td>
                <button data-bs-toggle="modal" data-bs-target="#ModalAdd" type="button" id="btn_edit" class=" btn btn-primary btn-sm">edit</button>
                <button type="button" class=" btn btn-danger btn-sm">remove</button>
            </td>
        </tr>
        <?php
    }
?>