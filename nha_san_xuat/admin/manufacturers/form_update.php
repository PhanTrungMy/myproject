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

       if (empty($_GET['id'])){
        header('location:index.php?error=phai truyen ma de sua ');
       }
        include './nha_san_xuat/admin/menu.php';
        require './connect.php';
  
    ?>
    <form action="process_insert.php" method="post">
        Tên
        <input type="text" name="name">
        <br>
         Địa chỉ 
         <textarea name="address" ></textarea>
         <br>
         Điện Thoại 
         <input type="text" name="phone">
         <br>
         Ảnh
         <input type="text" name="photo"> 
         <br>
         <button>Thêm</button>
    </form>
</body>
</html>