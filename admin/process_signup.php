<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];


require './connect.php';
$sql = " select count(*) from customers
where email = '$email' ";
die($sql);
// trung email
$result =mysqli_query($connect, $sql);
$number_rows = mysqli_fetch_array($result)['count(*)'];
  if ($number_rows ==1 ){
    header('location:siginup.php?error= trung email roi .
     ban chac chu');
     exit;
  }

  $sql = "insert into customers(name,email,password,phone_number,address)
  value('$name','$email','$password','$phone_number','$address') ";


  $sql = " select id from customers
where email = '$email' ";
$id = mysqli_fetch_array($result)['id'];
  mysqli_query($connect,$sql);
   mysqli_close($connect);
  session_start();
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
    mysqli_close($connect);