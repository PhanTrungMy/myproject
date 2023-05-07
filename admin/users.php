<?php session_start();
if (empty($_SESSION['id'])) {
    header('location:signin.php?error = dang nhap laij');
    # code...
}
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
    Day la trang nguoi dung
    <?php 
    echo $_SESSION['name']    ?>
    <a href="signout.php">
        da dang xuar
    </a>
</body>
</html>