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
    <style type="text/css">
        .header{
            align-content: center;
            text-align: center;
            text-transform: uppercase;
            width: 600px;
        }
        .f-grid {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            flex-flow: row wrap;
        }

        .f-grid-col {
            flex: 8%;
            text-align: left;
        }
        .f-grid-col1 {
            flex:92%;
        }
    </style>
</head>
<body>
<!--header -->
<?php
    include ('../includes/header_menu.php');
?>
<?php
if (isset($_POST['submit'])){
    $soN=$_POST['soN'];
    if (is_numeric($soN)&& is_int(0+$soN)&& $soN>0){
        $arr=array();
        for($i=0;$i<$soN;$i++)
        {
            $x=rand(-100,200);
            $arr[$i]=$x;
        }
        $ketqua="Mảng được tạo là:\n" .implode(" ",$arr)."\n";
        $count=0;
        foreach ($arr as $i){
            if($i%2==0) $count++;
        }
        if ($count==2) $ketqua.="Co $count so chan trong mang \n";

        $count=0;
        foreach ($arr as $i){
            if($i<100) $count++;
        }
        $ketqua.="Co $count phần tử trong mảng có giá trị là số nhỏ hơn 100 \n";
        $sum=0;
        foreach ($arr as $i){
            if($i<0) $sum=$sum+$i;
        }
        $ketqua.="Tổng của các phần tử trong mảng có giá trị là số âm la: $sum \n";
        $index=0;
        foreach ($arr as $key=>$value){
            if ($value==0) $index=$key;
        }
        if ($index!=0) $ketqua.="vị trí của các phần tử trong mảng có giá trị bằng 0 la: $index \n";
        else $ketqua.="Khong co phan tu co gia tri bang 0 \n";
        asort($arr);
//        print_r($arr);
        $ketqua.="Mang sap xep la: \n" .implode(" ",$arr)."\n";


    } else $ketqua="$soN khong phai la so nguyen duong";
};
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 1</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form action="" method="POST">
        <div class="f-grid">
            <div class="f-grid-col">
                Nhập vào số n: <br>
                Kết quả: <br>
            </div>
            <div class="f-grid-col1">
                <input type="text" name="soN" value="<?php if(isset($_POST['soN'])) echo $soN; ?>"> <br>
                <textarea cols="50" rows="10" name="ketqua"><?php if (isset($_POST['ketqua'])) echo $ketqua?></textarea> <br>
                <input type="submit" value="Thực hiện" name="submit">
            </div>
        </div>
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