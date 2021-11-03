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
    if(isset($_POST['submit'])){
        $text=$_POST['text'];
        $arr=tao_mang($text);
        $arr1=implode(",", $arr);
        $max=GTLN($arr);
        $min=TTNN($arr);
        $tong=tong_mang($arr);
    }
    function tao_mang($text){
        $arr=[];
        for ($i=0; $i < $text ; $i++) {
            $arr[$i]=rand(0,20);
        }
        return $arr;
    }
    function GTLN($arr){
        $max=$arr[0];
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]>$max){
                $max=$arr[$i];
            }
        }
        return $max;
    }
    function TTNN($arr){
        $min=$arr[0];
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]<$min){
                $min=$arr[$i];
            }
        }
        return $min;
    }
    function tong_mang($arr){
        $tong=0;
        foreach($arr as $value){
            $tong+=$value;
        }
        return $tong;
    }
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 3</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form action="" method="POST">
        <table align="center" bgcolor="#FFB6C1">
            <th colspan="3" style="text-transform: uppercase" bgcolor="#FF00FF">
            PHÁT SINH MẢNG VÀ TÍNH TOÁN
            </th>
            <tr>
                <td>Nhập số phần tử:</td>
                <td><input type="text" name="text" value="<?php if(isset($text)) echo $text; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Phát sinh và tính toán"></td>
                <td></td>
            </tr>
            <tr>
                <td>Mảng:</td>
                <td>
                    <input type="text" value="<?php if(isset($arr1)) echo $arr1;?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>GTLN (MAX) trong mảng:</td>
                <td>
                    <input type="text"  readonly value="<?php if(isset($max)) echo $max;?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>TTNN (MIN) trong mảng:</td>
                <td>
                    <input type="text" readonly value="<?php if(isset($min)) echo $min;?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Tổng mảng:</td>
                <td>
                    <input type="text" readonly value="<?php if(isset($tong)) echo $tong;?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center">
                    <b style="color: red">(Ghi chú</b> : Các phần tử trong mảng sẽ có giá trị từ 0 đến 20)<b></b>
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