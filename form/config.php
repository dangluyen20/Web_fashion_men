<?php
session_start();
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
</head>
<body>
<?php
    include ('../includes/header_menu.php');
?>
<?php
$ten = $_POST['ten'];
$diachi = $_POST['diachi'];
$dienthoai = $_POST['dienthoai'];
$gioitinh = $_POST['gioitinh'];
$quocgia = $_POST['quocgia'];
$hocvan = $_POST['hocvan'];
$note = $_POST['note'];
?>
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Form.php">Bài tập Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 8</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form action="bai8.php" method="POST" style="border: 1px solid grey; width: 60%; margin: 3%; padding:3%">
        <b style="font-weight: bolder;">Bạn đã nhập thành công, đây là thông tin của bạn:</b><br>
        <b>Họ tên:
        <?php if (isset($ten)) {
                echo $ten;
            } ?></b><br>
        <b>Địa chỉ:
            <?php if (isset($diachi)) {
                echo $diachi;
            } ?></b><br>
        <b>Điện thoại:
        <?php if (isset($dienthoai)) {
                echo $dienthoai;
            } ?></b><br>
        <b>Gender:
            <?php if (isset($gioitinh)) {
                echo $gioitinh;
            } ?></b><br>
        <b>Country:
        <?php if (isset($quocgia)) {
                echo $quocgia;
            } ?></b><br>
        <b>Note:
        <?php if (isset($note)) {
                echo $note;
            } ?></b><br>
        <button class="back" href="javascript:window.history.back(-1);">Quay lại</button>
    </form>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
</html>