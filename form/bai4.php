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
        $toan=$_POST["toan"];
        $ly=$_POST["ly"];
        $hoa=$_POST["hoa"];
        $dc=20;
        $td=$toan+$ly+$hoa;
        if($toan!=0 && $ly!=0 && $hoa!=0 && $td>=$dc){
            $kq="Đậu";
        } else $kq="Rớt";
    }
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Form.php">Bài tập Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 4</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="POST">
        <table  bgcolor="#faebd7" align="center">
            <tr>
                <td colspan="2" bgcolor="pink" align="center">
                    <h2>KẾT QUẢ THI ĐẠI HỌC</h2>
                </td>
            </tr>
            <tr>
                <td>Toán:</td>
                <td><input type="text" name="toan" value="<?php if (isset($_POST["toan"])) {
                    echo $_POST["toan"];
                }?>"></td>
            </tr>
            <tr>
                <td>Lý:</td>
                <td><input type="text" name="ly" value="<?php if (isset($_POST["ly"])) {
                    echo $_POST["ly"];
                }?>"></td>
            </tr>
            <tr>
                <td>Hóa:</td>
                <td><input type="text" name="hoa" value="<?php if (isset($_POST["hoa"])) {
                    echo $_POST["hoa"];
                }?>"></td>
            </tr>
            <tr>
                <td>Điểm chuẩn:</td>
                <td><input type="text" name="dc"  readonly value="<?php if (isset($dc)) {
                    echo $dc;
                }?>"
                ></td>
            </tr>
            <tr>
                <td>Tổng điểm:</td>
                <td><input type="text" name="td" readonly value="<?php if (isset($td)) {
                    echo $td;
                }?>"></td>
            </tr>
            <tr>
                <td>Kết quả thi:</td>
                <td><input type="text" name="kq" readonly value="<?php if (isset($kq)) {
                    echo $kq;
                }?>"></td>
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