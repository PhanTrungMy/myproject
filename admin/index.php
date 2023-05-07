<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_login.php" method="post">
       <h1>
        dang nhap
    </h1>  
    Email
    <input type="email" name="email">
    <br>
    Mat khau
    <input type="password" name="password">
    <br>
    <button>Dang nhap</button>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $(".btn-add-to-cart").click(function(event){

   let id = $(this).data('id');

   $.ajax({
    type: 'GET',
    url: "add_to_cart.php",
    data: "id",
    dataType: "dataTpye",
    success: function (response, textStatus, jqXHR) {
        
    },
    error: function (jqXHR, textStatus, errorThrown) {
        console.table(jqXHR)
    }
   });
    });
 });
</script>

</body>
</html>