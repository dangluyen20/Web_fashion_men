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
        $original=explode(",",$text);
        function doiCho(&$a,&$b){
            $temp=$a;
            $a=$b;
            $b=$temp;
        }
        function sxGiam ($arr)
        {
            for($i=0;$i<count($arr)-1;$i++)
                for($j=$i+1;$j<count($arr);$j++)
                {
                    if($arr[$i] < $arr[$j])
                    {
                        doiCho($arr[$i],$arr[$j]);
                    }
                }
            return $arr;
        }
        $result_decre = implode(",",sxGiam($original));
        function sxTang ($arr)
        {
            for($i=0;$i<count($arr)-1;$i++)
                for($j=$i+1;$j<count($arr);$j++)
                {
                    if($arr[$i] > $arr[$j])
                    {
                        doiCho($arr[$i],$arr[$j]);
                    }
                }
            return $arr;
        }
        $result_incre = implode(",",sxTang($original));
    }
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 6</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form action="" method="POST">
        <table align="center" bgcolor="#a9a9a9">
            <tr>
                <td colspan="3" align="center" bgcolor="aqua"><h3>SẮP XẾP MẢNG</h1> </td>
            </tr>
            <tr>
                <td>Nhập mảng:</td>
                <td><input type="text" name="text" value="<?php if(isset($text)) echo $text; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Sắp xếp tăng hoặc giảm"></td>
                <td></td>
            </tr>
            <tr>
                <td style="color: red"><b>Sau khi sắp xếp</b></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Tăng dần</td>
                <td>
                    <input type="text" value="<?php if(isset($result_incre)) echo $result_incre;?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Giảm dần</td>
                <td>
                    <input type="text" value="<?php if(isset($result_decre)) echo $result_decre;?>">
                </td>
                <td></td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: center">
                    <b style="color: red">(*)</b> các số cách nhau bằng dấu "<b>,</b>"
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