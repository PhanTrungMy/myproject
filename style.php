<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>day la trang chu</h1>
    <?php
     include 'connect.php';
     $trang =1;
     if(isset($_GET['trang'])){
     $trang= $_GET['trang'];
     } 
     
     $sql_so_tin_tuc = "select count(*) from tin_tuc";
     $mang_so_tin_tuc = mysqli_query($ket_noi,$sql_so_tin_tuc);
     $ket_qua_so_tin_tuc = mysqli_fetch_array($mang_so_tin_tuc);
        $so_tin_tuc = $ket_qua_so_tin_tuc['count(*)'];

      $so_tin_tuc_tren_1_trang =2;
      $so_trang = ceil($so_tin_tuc / $so_tin_tuc_tren_1_trang);
      $bo_qua = $so_tin_tuc_tren_1_trang*($trang-1);


     $tim_kiem ='';

     if(isset($_GET['tim_kiem'])){
     $tim_kiem = $_GET['tim_kiem'];

    
     } 
     $sql = "select * from tin_tuc 
    where
    tieu_de like '%$tim_kiem%'

    limit $so_tin_tuc_tren_1_trang offset $bo_qua";
      
    $ket_qua = mysqli_query($ket_noi,$sql);
  
    ?>
    <a href = "index.php">
        them bai viet </a>
    <table  border ='1' width ="100%">
        <caption>
            <form >
                <input type="search" name="tim_kiem" 
                value="<?php echo $tim_kiem ?>">
            </form>
        </caption>
        <tr>
            <th>Ma</th>
            <th>Tieu De</th>

            <th>Noi dung</th>
            <th>Anh</th>
            <th>sua</th>
            <th>sua</th>
        </tr>
       <?php foreach ($ket_qua as $tung_bai_tin_tuc){ ?>
        <tr>
            <td>
                <?php echo $tung_bai_tin_tuc['ma'] ?>
        </td>
            <td>
                <a href ="show.php ?ma = <?php echo $tung_bai_tin_tuc['ma']?>">
                       <?php echo $tung_bai_tin_tuc['tieu_de'] ?>
                </a>
             
        </td>
            <td>
                <?php echo $tung_bai_tin_tuc['noi_dung'] ?>
        </td>
            <td>      

               <img src="<?php echo $tung_bai_tin_tuc['anh'] ?>" height='100'>
                
        </td>
        <td>
            <a href="form_update.php?ma = <?php echo $tung_bai_tin_tuc['ma']?>">
                sua

            </a>
        </td>
        <td>
            <a href="delete.php ?ma=<?php echo $tung_bai_tin_tuc['ma']?>">   xoá
        </a>
         
        </td>
        </tr>
        <?php } ?>
    </table>
         <?php for($i=1;$i<= $so_trang; $i++){ ?>
            <a href="?trang=<?php echo $i ?>">
                <?php echo $i ?>
            </a>
         <?php } ?>;
      <?php mysqli_close($ket_noi)?>;
</body>
</html>