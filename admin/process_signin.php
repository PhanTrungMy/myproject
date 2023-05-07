<?php
$email = $_POST['email'];
$password =$_POST['password'];
if(isset($_POST['remember'])){
    $remember = true;

}else{
    $remember = false;
}



require './connect.php';
$sql = " select count(*) from customers
where email = '$email'  and  password = '$password ";
die($sql);
// trung email
$result =mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);
if($number_rows == 1){
    echo "dang nhap thanh cong";
    session_start();
    $each = mysqli_fetch_array($result);
    $id= $each['id'];
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $each['name'];
    // header('location:user.php');
    // exit;
     
    if($remember){
        $token = uniqid('user_',true);
        $sql = "update customers
        set
        token = '$token'
        where
        id = '$id'";
        setcookie('remember',$token, time() + 60*60*24*30);
        mysqli_query($connect, $sql);
    }else{
        echo "dang nhap sai ";
    }
}