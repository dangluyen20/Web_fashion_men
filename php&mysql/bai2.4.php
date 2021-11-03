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
    <?php
    require('config.php');
    //$conn = mysqli_connect('localhost', 'root', '', 'quanly_ban_sua')
    $conn=new mysqli($hostname,$user,$password,$db);
    mysqli_set_charset($conn, 'utf8');
    //phan trang
    $rowsPerPage=5;
    if ( ! isset($_GET['page']))
    {
    $_GET['page'] = 1;
    }
    $offset =($_GET['page']-1)*$rowsPerPage;

    $query="Select * from sua LIMIT $offset, $rowsPerPage";
    $result = mysqli_query($conn,$query);
    $numRows= mysqli_num_rows($result);
    $maxPage = ceil($numRows / $rowsPerPage);

    //print_r(mysqli_fetch_array($result));
    if($numRows<>0)
    {
    echo "<p align='center'><font size='10' color='#D2691E'> THÔNG TIN SỮA</font></p>";
    echo "<table align='center' width='100%' border='1' cellpadding='2' cellspacing='2' style='border-collapse:collapse'>";
    echo "<tr>
            <th>Số TT</th>
            <th>Tên sữa</th>
            <th>Hãng sữa</th>
            <th>Loại sửa</th>
            <th>Trọng lượng</th>
            <th>Đơn giá</th>
        </tr>";
    $bg='#eeeeee';
    $bg2='pink';
    $sel=0;

    while($rows=mysqli_fetch_array($result))
    {
        $sel++;
        if ($sel%2==0){
            echo "<tr bgcolor='".$bg."'>";
            echo "<td>{$rows['Ma_sua']}</td>";
            echo "<td>{$rows['Ten_sua']}</td>";
            echo "<td>{$rows['Ma_hang_sua']}</td>";
            echo "<td>{$rows['Ma_loai_sua']}</td>";
            echo "<td>{$rows['Trong_luong']}</td>";
            echo "<td>{$rows['Don_gia']}</td>";
            echo "</tr>";}
        else {
            echo "<tr bgcolor='".$bg2."'>";
            echo "<td>{$rows['Ma_sua']}</td>";
            echo "<td>{$rows['Ten_sua']}</td>";
            echo "<td>{$rows['Ma_hang_sua']}</td>";
            echo "<td>{$rows['Ma_loai_sua']}</td>";
            echo "<td>{$rows['Trong_luong']}</td>";
            echo "<td>{$rows['Don_gia']}</td>";
            echo "</tr>";
        }
    }
    echo"</table>";
    $re = mysqli_query($conn, 'select * from sua');
    $numRows = mysqli_num_rows($re);
    $maxPage = floor($numRows/$rowsPerPage) + 1;
    if ($_GET['page'] > 1){
        echo "<a href=" .$_SERVER['PHP_SELF']."?page=".($_GET['page']-1)."><<</a> "; //gắn thêm nút Back
    }
    for ($i=1 ; $i<=$maxPage ; $i++)
    {
        if ($i == $_GET['page'])
        {
            echo '<b>'.$i.'</b> '; //trang hiện tại sẽ được bôi đậm
        }
        else echo "<a href=" .$_SERVER['PHP_SELF']. "?page=".$i.">".$i."</a> ";
    }
    if ($_GET['page'] < $maxPage) {
        echo "<a href=" . $_SERVER['PHP_SELF'] . "?page=" . ($_GET['page'] + 1) . ">>></a>";  //gắn thêm nút Next
    }

    //    echo 'Tong so trang la: '.$maxPage;

    }
    mysqli_close($conn);
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