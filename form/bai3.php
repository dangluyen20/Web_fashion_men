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
    if(isset($_POST["submit"])){
        $csc=$_POST["csc"];
        $csm=$_POST["csm"];
        $dg=20000;
        $st=($csm-$csc)*$dg;
    }
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Form.php">Bài tập Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 3</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="POST">
        <table  bgcolor="#faebd7" align="center">
            <tr>
                <td colspan="2" bgcolor="orange" align="center">
                    <h2>THANH TOÁN TIỀN ĐIỆN</h2>
                </td>
            </tr>
            <tr>
                <td>Tên chủ hộ:</td>
                <td><input type="text" name="ch" value="<?php if (isset($_POST["ch"])) {
                    echo $_POST["ch"];
                }?>"></td>
            </tr>
            <tr>
                <td>Chỉ số cũ:</td>
                <td><input type="text" name="csc" value="<?php if (isset($_POST["csc"])) {
                    echo $_POST["csc"];
                }?>">(Kw)</td>
            </tr>
            <tr>
                <td>Chỉ số mới:</td>
                <td><input type="text" name="csm" value="<?php if (isset($_POST["csm"])) {
                    echo $_POST["csm"];
                }?>">(Kw)</td>
            </tr>
            <tr>
                <td>Đơn giá:</td>
                <td><input type="text" name="dg"  readonly value="<?php if (isset($dg)) {
                    echo $dg;
                }?>"
                >(VNĐ)</td>
            </tr>
            <tr>
                <td>Số tiền thanh toán:</td>
                <td><input type="text" name="st" readonly value="<?php if (isset($st)) {
                    echo $st;
                }?>">(VNĐ)</td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submit" value="Tính">
                </td>
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