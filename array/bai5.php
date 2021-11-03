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
function thaythe($mangso,$canthaythe,$thaythe)
{
    foreach ($mangso as $key => &$value) {
        if($canthaythe==$value) {
            $value=$thaythe;
            #var_dump($value);
            #var_dump($thaythe);
        }
    }
    #var_dump($mangso);
    return $mangso;
}
if(isset($_POST['submit']))
{
    $dayso=$_POST['dayso'];
    $mangso=explode(",",$dayso);
    $canthaythe=$_POST['canthaythe'];
    $thaythe=$_POST['thaythe'];
    $mangmoi=thaythe($mangso,$canthaythe,$thaythe);
}
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 5</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="post" action="" name="formthaythe">
        <table bgcolor="" align="center" style="width: 40%;">
            <tr bgcolor="#c44569">
                <th colspan="2">THAY THẾ</th>
            </tr>
            <tr style="background-color:#f8a5c2">
                <td>Nhập các phần tử</td>
                <td>
                    <input type="text" name="dayso" value="<?php if (isset($dayso)) { echo $dayso; } ?>">
                </td>
            </tr>
            <tr style="background-color:#f8a5c2">
                <td>Giá trị cần thay thế</td>
                <td>
                    <input type="text" name="canthaythe" value="<?php if (isset($canthaythe)) { echo $canthaythe;} ?>">
                </td>
            </tr>
            <tr style="background-color:#f8a5c2">
                <td>Giá trị thay thế</td>
                <td>
                    <input type="text" name="thaythe" value="<?php if (isset($thaythe)) { echo $thaythe; } ?>">
                </td>
            </tr>
            <tr style="background-color:#f8a5c2">
                <td> </td>
                <td>
                    <input type="submit" name="submit" style="background-color: #c44569;" value="Thay thế">
                </td>
            </tr>
            <tr style="background-color:#f8a5c2">
                <td>Mảng cũ</td>
                <td>
                    <input type="text" readonly style="background-color:#ea8685; color:white" value="<?php if(isset($mangso)) print implode('  ',$mangso); ?>">
                </td>
            </tr>
            <tr style="background-color:#f8a5c2">
                <td>Mảng sau khi thay thế</td>
                <td>
                    <input type="text" readonly style="background-color:#ea8685; color:white" value="<?php if(isset($_POST['submit'])) print implode('  ',$mangmoi); ?>">
                </td>
            </trstyle=>
            <tr style="background-color:#FFB6C1">
                <td colspan="2">(<strong style="color: red;">Ghi chú:</strong> Các phần tử trong mảng sẽ cách nhau bằng dấu ",")</td>
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