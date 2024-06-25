<?php 
   include "../config.php";
   $sql = "SELECT * FROM `product` ";
   $result = mysqli_query($conn, $sql);
//    include "./ajax/images/";
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <th scope="row"><a href="#"><img style="width:100px; height: 100px;"
                        src="../ajax/images/<?php echo $row['image'] ?>" alt=""></a></th>
            <td><a href="#" class="text-primary fw-bold"><?php echo $row['product_name']  ?></a></td>
            <td>$<?php echo $row['price'] ?></td>
            <td class="fw-bold"><?php echo $row['qty'] ?></td>
            <td>$<?php echo $row['total'] ?></td>
        </tr>
        <?php
    }
?>