<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta cha$ t="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
<?php
    include ('../includes/header_menu.php');
?>
<?php
$n1st=$n2nd="";
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Form.php">Bài tập Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 6</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="post" name="phep_toan" action="pheptoan.php">
        <table align="center">
        <tr>
            <td colspan="2">
                <h1 class="title">PHÉP TÍNH TRÊN HAI SỐ</h1>
            </td>
            <tr>
                <td class="second-left">Chọn phép tính: </td>
                <td class="second-right">
                    <input type="radio" name="phep_tinh"  value="Cong"> Cộng
                    <input type="radio" name="phep_tinh" value="Tru"
                        <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Tru')) {echo 'checked="checked"';}?>> Trừ
                    <input type="radio" name="phep_tinh" value="Nhan"
                        <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Nhan')) {echo 'checked="checked"';}?> checked> Nhân
                    <input type="radio" name="phep_tinh" value="Chia"
                            <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Chia')) {echo 'checked="checked"';}?>> Chia
                    <input type="radio" name="phep_tinh" value="Phan_Tram"
                        <?php if((isset($_POST['phep_tinh']))&&($_POST['phep_tinh']=='Phan_Tram')) {echo 'checked="checked"';}?>> Phần trăm
                </td>
            </tr>
            <tr>
                <td class="third-four-left">Số thứ nhất: </td>
                <td>
                    <input type="text" name="n1st" value="<?php if(isset($_POST["n1st"])) echo $n1st; else $n1st=""; ?>">
                </td>
            </tr>
            <tr>
                <td class="third-four-left">Số thứ hai: </td>
                <td>
                    <input type="text" name="n2nd" value="<?php if(isset($_POST["n2nd"])) echo $n2nd; else $n2nd=""; ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td> <input type="submit" name="submit" value="Tính"> </td>
            </tr>
        </tr>
        </table>
    </form>
</div>
<!-- <?php include ('../includes/footer.php')?> -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
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