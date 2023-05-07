<?php
 require './admin/check_admin_login.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $order_id = $_GET['id'];

     require './connect.php';

    $sql = "select *  orders_products
   join products on product.id =  order_product.product_id
    where order_id = '$order_id'";
    $result = mysqli_query($connect,$sql);

     $sum = 0;
    ?>
        <table>
     <tr>
        <th>Anh</th>
        <th>
            Ten san pham
        </th>
        <th>gia</th>
        <th>
            so luong
        </th>
        <th>tong tien</th>
        <th>xoa</th>
     </tr>
     <?php foreach ($result as $each):?>
      <
       <!-- tinh gia san pham -->
      <tr>
        <td> <img src="admin/photo" alt=""><?php echo $each ?></td>
        <td><?php echo $each['name']?></td>
        <td><?php echo $each['price']?></td>
        <td><?php echo $each['quantity']?></td>
        
         <td>
            <?php 
              $result = $each['price'] * $each['quantity'];
              echo $result;
              $sum += $result;
           ?>
         </td>
      
      <td>
        <a href="delete_form_cart.php?<php echo ['$id']?>">Xoa</a>
      </td>
    </tr>
      <?php endforeach ?>
    </table>
</body>
</html>