<?php
$id =$_GET['id'];
require '../root/connect.php';
$sql = "delete from product where id= '$id";
mysqli_query($connect,$sql);
mysqli_close($connect);

 ?>