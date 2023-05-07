<?php 
session_start();
$id = $_GET['id'];
$type = $_GET['type'];
if($type === 'decre'){
    ///tang giam

    if ($_SESSION['cart']['$id']['quantity'] > 1)
    {
    
 $_SESSION['cart']['$id']['quantity']--;
}else{
   unset($_SESSION['cart']['$id'] );
}
}
else{
 $_SESSION['cart']['$id']['quantity']++;

}





header('location:view_cart.php');