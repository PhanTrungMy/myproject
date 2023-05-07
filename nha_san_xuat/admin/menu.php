<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <a href="./nha san xuat/index.php">
                 Quản lý nhà sản xuất 
            </a>
        </li>
       <li>
        <a href="./product">
            Quản lý sản phẩm
        </a>
       </li>
    </ul>

    <?php
    if (isset($_GET['error'])){
        ?>
        <span style='color:red'>
        <?php echo $_GET['error'] ?>
    </span>
    <?php
        
    }
    ?>
        <?php
    if (isset($_GET['success'])){
        ?>
        <span style='color:green'>
        <?php echo $_GET['success'] ?>
    </span>
    <?php
        
    }
    ?>
</body>
</html>