<?php
require "includes/common.php";
session_start();

$user_id = $_SESSION['user_id'];
$query = "UPDATE users_products SET status='Đã xác nhận' WHERE user_id='$user_id' AND status='Đã thêm vào giỏ hàng'";
mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="4;url=index.php" />
</head>
<body>
    <?php
include 'includes/header_menu.php';
?>
    <div class="container-fluid mt-5 pt-5" id="content" style="margin-bottom:200px">
            <div class="col-md-8 mx-auto">
                <div class="jumbotron text-center">
                      <h3>Đơn đặt hàng của bạn đã được xác nhận. Cảm ơn đã đi mua sắm với chúng tôi.</h3><hr>
                    <p>Click <a href="products.php">here</a> để mua bất kỳ mặt hàng nào khác.</p>
                </div>
            </div>
        </div>
         <!-- footer-->
         <?php include 'includes/footer.php'?>
        <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>