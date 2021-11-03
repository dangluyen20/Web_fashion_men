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
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../SQL.php">Bài tập PHP & MYSQL</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 2.3</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <h3 align="center" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">THÔNG TIN KHÁCH HÀNG</h3>
    <table align="center" border="1">
        <tr style="background-color: white">
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>
        <?php include('config.php'); ?>
        <?php
        $sql ="select * from khach_hang";
        $res = mysqli_query($conn, $sql);
        if($res == true)
        {
            $count = mysqli_num_rows($res);
            if($count >=1)
            {
                while($rows = mysqli_fetch_assoc($res))
                {
                    $nam="<img src='images/nam.jpg' with='50px' height='100px'>";
                    $nu="<img src='images/nu.jpg' with='50px' height='100px'>";
                    $gt=$nam;
                    if($rows['Phai'] == 1)
                    {
                        $gt=$nu;
                    }
                    echo "<tr>";
                    echo "<td>".$rows['Ma_khach_hang']."</td>";
                    echo "<td>".$rows['Ten_khach_hang']."</td>";
                    echo "<td style='text-align:center'>".$gt."</td>";
                    echo "<td>".$rows['Dia_chi']."</td>";
                    echo "<td>".$rows['Dien_thoai']."</td>";
                    echo "<td>".$rows['Email']."</td>";
                    echo "</tr>";
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