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
    $sql = 'select *from product';
    $result = mysqli_query($connect,$sql);
    ?>
    <form action="process_insert.php" method="post">
        <input type="hidden" name="id" value= "<?php echo $each ['id']?>">
        Tên
        <input type="text" name="name">
        <br>
        Ảnh
        <input type="file" name="photo">
        <br>
        Giá
        <input type="number" name="price">
        <br>
        Mô tả
        <textarea name="description" ></textarea>
        <br>
        Nhà sản xuẩt
        <select  name="manufacturer_id">'
          <?php  foreach ($result as $each): ?>
            <option value="<?php echo $each['id'] ?>">
            <?php echo $each ['name']?>
        </option>

        <?php endforeach ?>
        </select>
        
        <br>
        <button>Thêm</button>
    </form>

</body>
</html>