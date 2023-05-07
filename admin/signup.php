<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
  <?php
  if(isset($_GET['error'])){
    echo $_GET['error'];
  }
  ?>

    <form action="post" method="process_signup.php">
        <h1>form dang ki</h1>
        Ten
        <input type="text " name="name">
        <br>
        Email
        <input type="email" name="email">
        <br>
        Mat khau
         <input type="password" name="password">
         <br>
         SDT
        <input type="text" name="phone_number">
        <br>
         dia chi
        <input type="text" name="address">
        <br>
      
       
         <br>
         <button>Dang ky</button>
    </form>
</body>
</html>