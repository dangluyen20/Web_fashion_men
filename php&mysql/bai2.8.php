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
        table{
            width: 90%;
        }
        th{
            color: #FFA500;
            background-color: #FFC0CB;
            font-size: 25px;
            text-align: center;
        }
        b{
            font-style: italic;
        }
        .bb{
            color: red;
        }
        img{
            width: 70%;
            height: 70%;
        }
        font{
            color: red;
        }
        h3{
            color: #FF00FF;
            font-weight: bolder;
            text-align: center;
            font-size: 26px;
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
            <li class="breadcrumb-item active" aria-current="page">Bài 2.8</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <h3>THÔNG TIN CHI TIẾT CÁC LOẠI SỮA</h3>
    <?php
    //tien te
    if (!function_exists('currency_format')) {
        function currency_format($number, $suffix = 'VNĐ')
        {
            if (!empty($number)) {
                return number_format($number, 0, ',', '.') . "{$suffix}";
            }
        }
    }
    //phan trang
    $rowsPerPage = 2;
        if (!isset($_GET['page'])) {
            $_GET['page'] = 1;
        }
    $offset = ($_GET['page'] - 1) * $rowsPerPage;
    require('config.php');
    //$conn = mysqli_connect('localhost', 'root', '', 'quanly_ban_sua')
    $conn=new mysqli($hostname,$user,$password,$db);
    mysqli_set_charset($conn, 'utf8');
    $sql="SELECT * FROM sua LIMIT $offset, $rowsPerPage";
    $res=mysqli_query($conn, $sql);
    $count = mysqli_num_rows($res);
    $maxPage = ceil($count / $rowsPerPage);

    echo "<table align='center' border='1'>";
    while($row=mysqli_fetch_assoc($res)){
    $ten_sua=$row['Ten_sua'];
    $ma_hang_sua = $row['Ma_hang_sua'];
    $trong_luong = $row['Trong_luong'];
    $don_gia = $row['Don_gia'];
    $hinh = $row['Hinh'];
    $tp_dd=$row['TP_Dinh_Duong'];
    $loi_ich=$row['Loi_ich'];
    $sql2 = "SELECT Ten_hang_sua FROM hang_sua WHERE Ma_hang_sua='$ma_hang_sua' ";
    $res2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($res2);
    $ten_hang_sua = $row2['Ten_hang_sua'];
        echo "<tr>";
            echo "<th colspan='2'>".$ten_sua." - ".$ten_hang_sua."</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        ?>
        <img width="50%" src="Hinh_sua/<?php echo $hinh; ?>">
        <?php
        echo "</td>";
        echo "<td><b>Thành phần dinh dưỡng: </b><br>".$tp_dd;
        echo "<br><b>Lợi ích: </b><br>".$loi_ich;
        echo "<br><b>Trọng lượng: </b>"."<font>".$trong_luong."</font>"." gr - "."<b>Đơn giá: </b>"."<font>".currency_format($don_gia)."</font></td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <div style="text-align: center;">
    <?php
    $re = mysqli_query($conn, 'select * from sua');
    $numRows = mysqli_num_rows($re);
    $maxPage = floor($numRows/$rowsPerPage) + 1;
    if ($_GET['page'] > 1){
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".(1)."> << </a> ";
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."> < </a> "; //gắn thêm nút Back
    }
    for ($i=1 ; $i<=$maxPage ; $i++)
    {
        if ($i == $_GET['page'])
        {
            echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
        }
        else echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i."> ".$i."</a> ";
    }
    if ($_GET['page'] < $maxPage) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($_GET['page'] + 1) . "> > </a>";  //gắn thêm nút Next
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=".($maxPage) . "> >> </a>";
    }
    ?>
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