<?php  
$name =$_POST['name'];
$photo_new =$_FILES['photo_new'];
if ($photo_new['size'] >0 ){
    $folder = 'photo/';

// luu anh trong folder

$file_extension = explode('.',$photo['name'])[1];
$file_name = time(). '.' .$file_extension;
$path_file = $path. time(). '.' .$file_extension;
move_uploaded_file($photo["tmp_name"], $path_file);
}
else {
    $file_name = $_POST['photo_old'];
}
$photo_old =$_FILES['photo_old'];
$price =$_POST['price'];
$description =$_POST['description'];
$manufacturer_id =$_POST['manufacturer_id'];






require '../root/connect.php';
$sql = "update product 
set
name = '$name',
photo = '$photo',
price = '$price',
description ='$description',
manufacturer_id = '$manufacturer_id'

where
id = '$id'
";

$sql = "insert into products (name,photo,price,description,manufacturer_id)
values  ('$name','$photo','$price'',$description','$manufacturer_id')";
mysqli_query($connect,$sql);
mysqli_close($connect);
?>