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
            <li class="breadcrumb-item active" aria-current="page">Bài 2.1</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <h3 style="text-transform: uppercase" align="center">THÔNG TIN HÃNG SỮA</h3>
    <table border="2" align="center">
        <tr>
            <th>Mã HS</th>
            <th>Tên hãng sữa</th>
            <th>Địa chỉ</th>
            <th>Điện thoại</th>
            <th>Email</th>
        </tr>
        <?php
        require ("config.php");
        // include ("config.php");
        $conn=new mysqli($hostname,$user,$password,$db);
        // mysqli_set_charset($conn, ’UTF8’);
        if($conn->connect_error){
            echo "Loi ket noi db".$conn->connect_error;
        }
        $query="select * from hang_sua";
        $result=$conn->query($query);
        if(!$result) echo "Cau truy van bi sai";
        while($row=$result->fetch_array()){
            echo "<tr>";
                echo "<td>".$row['Ma_hang_sua']."</td>";
                echo "<td>".$row['Ten_hang_sua']."</td>";
                echo "<td>".$row['Dia_chi']."</td>";
                echo "<td>".$row['Dien_thoai']."</td>";
                echo "<td>".$row['Email']."</td>";
                // for($i=0,$i<$result->field_count; $i++){
                //     echo "<td>.$row[$i].</td>";
                // }
            echo "</tr>";
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