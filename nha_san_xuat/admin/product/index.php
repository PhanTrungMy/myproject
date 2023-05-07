<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    require '../root/connect.php';
    require '../menu.php';
    $sql = " select 
    product.*,
    manufacturers.name as manufacturer_name
    form product
    join manufacturers on product.manufacturer_id = manufacturers.id";
    $result = mysqli_query($connect,$sql);
    ?>
    <h1>Quản lý sản phẩm </h1>
    <table border="1" width='100%' >
          <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Ảnh</th>
            <th>Giá</th>
            <th>Sửa</th>
            <th>xoá</th>
          
          </tr>
          <?php foreach($result as $each): ?>
           <tr>
            <td><?php echo $each['id']?></td>
            <td><?php echo $each['name']?></td>
         
            <td>  
                 <img src="photos/<?php  echo $each['photo'] ?>" >
               </td>
            <td><?php echo $each['price']?></td>
            <td><?php echo $each['manufacturer_name']?></td>
            <td>
                <a href="form_update.php?id=<?php echo $each['id'] ?>">
                Sửa
            </a>
            </td>
            <td>
                <a href="delete.php?id=<?php echo $each['id'] ?>">
                Xoá
            </a>
            </td>

           </tr>
           <?php endforeach ?> 
    </table>
</body>
</html>