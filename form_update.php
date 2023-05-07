
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>abcd</title>
</head>
<body>
<?php
$ma = $_GET['ma'];
    require 'connect.php';
    $sql = "select * from tin_tuc 
    where ma = $ma";
    $ket_qua = mysqli_query($ket_noi,$sql);
    $tin_tuc = mysqli_fetch_array($ket_qua);
    ?>
  <form action="process_update.php" method="post">
    <input type="hiden" name="ma" value= "<?php echo $ma?>">
    tiêu đê
    <input type="text" name="tieu_de" value="<?php echo $tin_tuc['tieu_de']?>">
    <br>
    Noi dung
    <textarea name="noi_dung" id="" cols="30" rows="10">value="<?php echo $tin_tuc['tieu_de']?></textarea>
    <br>
    link anh
    <input type="text" name="anh"value="<?php echo $tin_tuc['anh']?>" >
    <br><button>
      sua
    </button>
  </form>
</body>
</html>