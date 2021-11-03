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
    <style>
        img{
            width: 40%;
        }
        td{
            text-align: center;
            width: 150px;
            padding-top: 0;
            margin-top: 0;
        }
        img{
            width: 60px;
            height: 60px;
        }
        th{
            color: brown;
            background-color: #FFC0CB;
            font-size: 20px;
            text-align: center;
        }
        *{
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
<!--header -->
<?php
    include ('../includes/header_menu.php');
?>
<?php
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = 'VNĐ')
        {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../SQL.php">Bài tập PHP & MYSQL</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 2.7</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <table align="center" border="1">
        <tr>
            <th colspan="5">THÔNG TIN CÁC SẢN PHẨM</th>
        </tr>
        <?php
        //
        require('config.php');
        //$conn = mysqli_connect('localhost', 'root', '', 'quanly_ban_sua')
        $conn=new mysqli($hostname,$user,$password,$db);
        mysqli_set_charset($conn, 'utf8');
        $sql = "SELECT * FROM sua";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($res == true) {
            echo "<tr>";
            $dem=1;
            while ($row = mysqli_fetch_assoc($res)) {
                $dem++;
                $ma=$row['Ma_sua'];
                $ten_sua = $row['Ten_sua'];
                $ma_hang_sua = $row['Ma_hang_sua'];
                $ma_loai_sua = $row['Ma_loai_sua'];
                $trong_luong = $row['Trong_luong'];
                $don_gia = $row['Don_gia'];
                $hinh = $row['Hinh'];
                $sql2 = "SELECT Ten_hang_sua FROM hang_sua WHERE Ma_hang_sua='$ma_hang_sua' ";
                $res2 = mysqli_query($conn, $sql2);
                $row2 = mysqli_fetch_assoc($res2);
                $ten_hang_sua = $row2['Ten_hang_sua'];
                $sql3 = "SELECT Ten_loai FROM loai_sua WHERE Ma_loai_sua='$ma_loai_sua' ";
                $res3 = mysqli_query($conn, $sql3);
                $row3 = mysqli_fetch_assoc($res3);
                $ten_loai = $row3['Ten_loai'];
                //
                echo "<td><b>";
                ?>
                <a href='bai2.7_details.php?id=<?php echo $ma; ?>'><?php echo  $ten_sua; ?></a></b>
                <?php
                echo "<br>".$trong_luong." gr - ";
                echo " ".currency_format($don_gia)."<br>";
                ?>
                <img src="Hinh_sua/<?php echo $hinh; ?>">
                <?php 
                if($dem==6)
                {
                    echo "</tr>";
                    echo "<tr>";
                    $dem=1;
                }
            }
            }
        ?>
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