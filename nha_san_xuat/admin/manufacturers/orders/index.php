<?php
 require './admin/check_admin_login.php';
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
    <?php  require './connect.php';
    $sql = "select  orders.*,
    cutomers.name,
    cutomers.phone_number,
    cutomers.address,
    form orders
    join customers
    on customer_is = orders.customer_id"
    ?>
    <table border="1">
        <tr>
            <th>Ma</th>
            <th>thoi gian</th>
            <th>thong tin nguoi nhan</th>
            
            <th>thong tin nguoi dat</th>
            <th>trang thai</th>
            <th>tong tien</th>
            <th>Xem</th>
            <th>sua</th>
        </tr>
        <?php foreach ($result as $each ):?>
            <tr>
                <td> <?php echo $each['id']?></td>
                <td> <?php echo $each['crated_at']?></td>
                <td> 
                    <?php echo $each['name_receiver']?>
                    <?php echo $each['phone_receiver']?>
                    <?php echo $each['address_receiver']?>
                  </td>
                <td> 
                    <?php echo $each['name']?><br>
                    <?php echo $each['phone_number']?><br>
                    <?php echo $each['address']?><br>
                  </td>
                  <td>
                    <?php
                    switch ($each['status']) {
                        case '0':
                            echo "Moi dat";
                            break;
                        case '1':
                            echo "Da duyet ";
                            break;
                            case '3':
                                echo "Da huy ";
                                break;

                        
                        
                    }
                    ?>
                  </td>
                  <td> <?php echo $each['total_price']?></td>
                  <td>
                    <a href="detail.php?id=<?php echo $each['id']?>">
                        Xem
                    </a>
                  </td>
                  <td>
                    <a href="update.php?:<?php echo $each['id']?>">
                        duyet
                    </a>
                  </td>
                  <td>
                    <a href="update.php?:<?php echo $each['id']?>">
                        huy
                    </a>
                  </td>

            </tr>
            <?php endforeach?>
    </table>
</body>
</html>