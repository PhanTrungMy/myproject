<?php
session_start();
if(isset($_COOKIE['remember'])){
    $token = $_COOKIE['remember'];
    require './admin/connect.php';
    $sql = "select * from customer 
    where token = '$token'
    limit 1";
    
    // lua dang nhap dua vao trang chu signin// bao matj trang web

    $result = mysqli_query($connect,$sql);
    $number_rows = mysqli_num_rows($result);
    if($number_rows == 1 ){
        $each = mysqli_fetch_array($result);
    $_SESSION['id'] = $each['id'];
    $_SESSION['name'] = $each['name'];
    }
    
}
if(isset($_SESSION['id'])){
    header('location:user.php');
    exit;
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
    <form action="process_signin.php" method="post" >
        email
        <input type="email" name="email">
        <br>
        mat khau
        <input type="password" name="password" autocomplete="false">
        <br>
        ghi nhớ đăng nhập
        <input type="checkbox" name="remember">
        <br>
        <button>dang nhap</button>
        <a href="forgot_password.php">
            Quen mat khau
        </a>
    </form>
</body>
</html>