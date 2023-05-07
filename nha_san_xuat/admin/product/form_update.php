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

$id = $_GET['id'];
    require '../root/connect.php';
    require '../menu.php';
    $sql = "select *from product where id = '$id'";
    $result = mysqli_query($connect,$sql);
     $each = mysqli_fetch_array($result);
     $sql = 'select *from manufacturer';
     $result = mysqli_query($connect,$sql);
    ?>
    <form action="process_update.php" method="post">
        Tên
         <!-- ham value tu dong dien -->
        <input type="text" name="name" valus="<?php echo $each['name']?>">
        <br>
         Đổi Ảnh mới
        <input type="file" name="photo" valus="<?php echo $each['photo']?>">
        <br>
        <input type="hidden" name="photo_old" value=" <?php echo $eacho['photo'] ?>">
        Hoặc giữ ảnh cũ 
        <img src="photo/<?php echo $eacho['photo'] ?>" alt="">
        <br>

        Giá
        <input type="number" name="price" valus="<?php echo $each['price']?>">
        <br>
        Mô tả
        <textarea name="description"  valus="<?php echo $each['description']?>"></textarea>
        <br>
        Nhà sản xuẩt
        <select  name="manufacturer_id">'
          <?php  foreach ($manufacturer as $manufacturer): ?>
            <option value="<?php echo $manufacturer['id'] ?>">
            <?php if($each['manufacturer_id'] == $manufacturer_id['id']){?>
                selected
                <?php }?>
                >
            <?php echo $manufacturer ['name']?>

        </option>

        <?php endforeach ?>
        </select>
        
        <br>
        <button>Sua</button>
    </form>

</body>
</html>