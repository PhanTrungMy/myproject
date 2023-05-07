<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form >
        diem gif di
        <input type="text" name="ten" id="ten">
    </form>
    <div id="ket_qua"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $("#ten").keydown(function(event) {
        let ten = $(this).val();
        $("#ket_qua").text('ban da dien: ' + ten);
    });
});
</script>
</body>
</html>