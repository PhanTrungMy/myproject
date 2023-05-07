<?php
if(empty($_POST['name'])||empty($_POST['address'])||empty($_POST['phone'])||empty($_POST['photo'])){
    header('location:from_insert.php?loi= phai dien day du thong tin');
}
// tao lai file khi kh tim thay dia chi
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$photo = $_POST['photo'];
require '../root/connect.php';
$sql = "insert into manufacturers( name, address, phone, photo)
values( $name, $address, $phone, $photo) ";
 mysqli_query($connect,$sql);
 mysqli_close($connect);
?>