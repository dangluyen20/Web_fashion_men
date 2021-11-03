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
$pheptinh=$so1=$so2=$ketqua="";
if(isset($_POST["submit"])&& isset($_POST["phep_tinh"]))
{
    $so1=$_POST["n1st"];
    $so2=$_POST["n2nd"];
    switch ($_POST["phep_tinh"]) {
        case "Cong": {$pheptinh="Cộng";$ketqua=$so1+$so2;break;}
        case "Tru": {$pheptinh="Trừ";$ketqua=$so1-$so2;break;}
        case "Nhan": {$pheptinh="Nhân";$ketqua=$so1*$so2;break;}
        case "Chia": {$pheptinh="Chia";$ketqua=$so1/$so2;break;}
        case "Phan_Tram": {
            $pheptinh="Phần trăm";
            if ($so2==0) $ketqua="Không chia được cho 0";
            else $ketqua=$so1%$so2;
            break;
        }
        default: echo "Sai phép toán, nhập lại!";
    };
}
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
    <table align="center">
        <tr>
            <td colspan="2">
                <h1 class="title">
                    Phép tính trên hai số
                </h1>
            </td>
        <tr>
            <td class="second-left">Phép tính đã chọn: </td>
            <td class="second-right">
                <input type="radio" name="PhepTinh" checked> <?php echo $pheptinh?>
            </td>
        </tr>
        <tr>
            <td class="third-four-left">Số 1: </td>
            <td>
                <input type="text" name="so1" value="<?php echo $so1 ?>">
            </td>
        </tr>
        <tr>
            <td class="third-four-left">Số 2: </td>
            <td>
                <input type="text" name="so2" value="<?php echo $so2 ?>">
            </td>
        </tr>
        <tr>
            <td class="third-four-left">Kết quả: </td>
            <td> <input type="text" name="ketqua" value="<?php echo $ketqua ?>"> </td>
        </tr>
        <tr>
            <td></td>
            <td><a href="javascript:window.history.back(-1);">Trở về trang trước</a></td>
        </tr>
    </table>
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