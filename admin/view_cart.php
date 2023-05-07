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
    session_start();
    $cart = $_SESSION['cart'];
    $total = 0;

    ?>

    <table>
     <tr>
        <th>Anh</th>
        <th>
            Ten san pham
        </th>
        <th>gia</th>
        <th>
            so luong
        </th>
        <th>tong tien</th>
        <th>xoa</th>
     </tr>
     <?php foreach ($cart as $id => $each):?>
      <?php
      $sql =" select * from product
      where id = $id";
      $result = mysqli_query($connect, $sql);
      $each = mysqli_fetch_array($result);

        ?>
       <!-- tinh gia san pham -->
      <tr>
        <td> <img src="admin/photo" alt=""><?php echo $each ?></td>
        <td><?php echo $each['name']?></td>
        <td>
          <span class="span-price"><?php echo $each['price']?></span>
          
        </td>
        <td>
        <button class="btn_quantity_in_cart.php" data-id="<?php echo $i?> " data-type="0"
         >+
         </button>
            <span class="span-quantity">
            <?php echo $quantity?>
                </span>
           <button class="btn_quantity_in_cart.php" data-id="<?php echo $i?> " data-type="1"
         >+
         </button>
        </td>
        <td>
          <span class="span-sum">
            <?php
          $sum = $each['price'] * $each ['quantity'];
         $total += $sum;
         echo $sum;
          ?>
          </span>
        </td>
      
    
      </tr>
      <td>
        <button class="btn-delete" data-id="<?php echo ['$id']?>">
         Xoa
        </button>
       
      </td>
      <?php endforeach ?>
    </table>
    <h1>
        tong tien hoa don:
        <span id="span-total">
            $<?php echo $total?>
        </span>
      
    </h1>
    <?php 
    $id = $_SESSION['id'];
    require './admin/connect.php';
    $sql = " select * from customer where id =' $id '";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <form action="process_checkout.php" method="post">
        ten nguoi nhan
        <input type="text" name="name_receiver" value="<?php echo $each ['name']?>">
        <br>
        SDT nguoi nhan
        <input type="text" name="phone_receiver" value="<?php echo $each ['phone_number']?>">
        <br>

       dia chi nguoi nhan
       <input type="text" name="address_receiver" value="<?php echo $each ['address']?>">
    <br>
    <button>Dat Hang</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".btn-update-quantity").click(function(){
      let id = $(this).data('id');
      let type = $(this).data('type');
      $.ajax({
        type: "GET",
        url: "update-quantity_in_cart.php",
        data: {id,type},
        // dataType: "dataTpye",
      
      });
      //tang so luong mua khong load laij trang
        .done(function(){
          let parent_tr = btn.parent_tr('tr');
          let price = parent_tr.find('.span-price').text();
          let quantity = parent_tr.find('.span-quantity').text();
          if(type == 1){
                quantity++;
          }else{
            quantity--;

            
          }
          if(quantity == 0){
               parent_tr.remove();
          }
          else{
              parent_tr.find('.span-quantity').text(quantity);
          let sum = price * quantity;
          parent_tr.find('.span-sum').text(sum);
          }
      
          //tinh tong
          //  let total = 0;
          // $(".span-sum").each(function(){
          //  total += parseFloat(this).text();

          // });
          // $("#span-total").text(total);
          getTotal();
        });
    });
      
        
       })
       $(".btn-delete").click(function(){
        let id = $(this).data('id');
     
      $.ajax({
        type: "GET",
        url: "update-quantity_in_cart.php",
        data: {id},
        // dataType: "dataTpye",
      
      });
      //tang so luong mua khong load laij trang
        .done(function(){
         btn.parent_tr('tr').remove();
         getTotal();
          
       })
  });
  function getTotal(){
    let total = 0;
          $(".span-sum").each(function(){
           total += parseFloat(this).text();

          });
          $("#span-total").text(total);
  }
</script>

</body>
</html>