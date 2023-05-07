<?php
 require './admin/connect.php';
 $sql = "select * from product";
 $result = mysqli_query($connect, $sql);



?>
<div class="giua">
    <?php 
    foreach ($result as $each ):?> 
        
    <div class="tung_san_pham">
        <h1>
            <?php echo $each['name'] ?>


        </h1>
        <img src="admin/product <?php echo $each ['photo'] ?> " height="100">
        <p><?php echo $each['price']?>$</p>
        <a href="product.php?id=<?php echo $each ['id']?>">
       xem chi tiet>>>
    </a>
    <?php if (!empty($_SESSION['id'])){ ?>
        <a href="add_to_cart.php?id=<?php echo $each ['id']?>">
        <br>
       them vao gio hang
    </a>
    <?php } ?>

    
    </div>
    <?php endforeach ?>
</div>