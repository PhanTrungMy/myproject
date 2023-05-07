<div class="tong">
    <ol>
        <li>
            <a href="index.php">Trang chu</a>
        </li>
        <?php
        if(empty($_SESSION['id'])){  ?>
<li>
            <a href="signin.php">Dang nhap</a>
        </li>
        <li>
          <a href="signup.php">

          dang ki
          </a>

        </li>
        <?php } else {?>
        
            <li>
                chao <?php echo $_SESSION['name']?>,
          <a href="signout.php">

          dang xuat
          </a>

        </li>
        <?php  } ?>
      
        
    </ol>
</div>