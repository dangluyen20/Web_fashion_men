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
    $text="";
    $arr=array();
    if (isset($_POST['submit'])){
    $text=$_POST['dayso'];
    $arr=explode(",",$text);
    $kq=1;
    foreach ($arr as $value) $kq=$kq*$value;
    if (isset($_POST['reset'])){
        print_r($arr);
        $text=$kq="";
    }
    }
    ?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 2</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="post" action="">
        <table align="center" bgcolor="#00BFFF">
            <tr>
                <td colspan="3" align="center" bgcolor="#1E90FF"><h1>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h1> </td>
            </tr>
            <tr>
                <td>Nhập dãy số: </td>
                <td><input type="text" name="dayso" size="30"
                    value="<?php echo  $text;?>"></td>
                <td style="color: #ff0a07">(*)</td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tính tích dãy số">
                    <input type="submit" name="reset" value="Reset">
                </td>
            </tr>
            <tr>
                <td>Tích dãy số</td>
                <td><input type="text" name="ketqua" value="<?php if(isset($kq)) echo $kq;?>" readonly></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" align="center"> (*) Các số được nhập cách nhau bằng dấu "," </td>
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