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
if (isset($_POST['submit'])) {
    $duonglich = $_POST['duonglich'];
    $mangcan = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
    $mangchi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
    $manghinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.jpg", "ran.jpg", "ngo.jpg", "mui.jpg", "than.jpg", "dau.jpg", "tuat.jpg");
    $namtinh=$duonglich-3;
    $can = $namtinh%10;
    $chi = $namtinh%12;
    $namal = $mangcan[$can];
    $namal = $namal." ".$mangchi[$chi];
    $hinh = $manghinh[$chi];
    $hinhanh = "<img src='images/$hinh'>";
}
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 7</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="post" action="" name="formtinhnamamlich">
        <table align="center" style="background-color: #74b9ff;width: 40%;">
            <tr style="background-color: #0984e3; color: white">
                <td colspan="3" align="center">TÍNH NĂM ÂM LỊCH</td>
            </tr>
            <tr>
                <td>Năm dương lịch</td>
                <td> </td>
                <td>Năm âm lịch</td>
            </tr>
            <tr>
                <td>
                    <input type="text" style="width: 80%;" name="duonglich" value="<?php if(isset($duonglich)) echo $duonglich; ?>">
                </td>
                <td>
                    <input type="submit" style="background-color: #fab1a0; color: red;" name="submit" value="=>">
                </td>
                <td>
                    <input type="text" style="background-color: #fab1a0; color: red;" name="amlich" readonly
                    value="<?php if(isset($namal)) echo $namal;  ?>">
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center"><?php if(isset($hinhanh)) echo $hinhanh; ?></td>
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