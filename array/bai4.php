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
function timkiem($mangso,$so)
{
    $ketqua="Không tìm thấy ".$so;
    foreach ($mangso as $key => $value) {
        if($so==$value) {
            $ketqua="Tìm thấy ".$so." tại vị trí thứ ".++$key." của mảng";
        }
    }
    return $ketqua;
}

function xuatmang($mang)
{
    if(isset($mang)) {print implode(", ", $mang);}
}

if(isset($_POST["submit"]))
{
    $dayso = $_POST["dayso"];
    $so = $_POST["so"];
    $mangso = explode(",", $dayso);
    $ketqua = timkiem($mangso,$so);
}

?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Array.php">Bài tập Mảng, chuỗi & hàm</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 4</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="POST" action="" name="formtimkiem">
        <table bgcolor="#A9A9A9" align="center" style="width: 60%;">
            <tr bgcolor="#6495ED" align="center">
                <th colspan="2">TÌM KIẾM</th>
            </tr>
            <tr>
                <td>Nhập mảng</td>
                <td><input type="text" name="dayso" value="<?php if (isset($_POST["dayso"])) {
                                                                echo $_POST["dayso"];} ?> " >
                </td>
            </tr>
            <tr>
                <td>Nhập số cần tìm</td>
                <td>
                    <input type="text" width="30px" name="so" value="<?php if (isset($_POST["so"])) echo $_POST["so"]?>">
                </td>
            </tr>
            <tr>
                <td>  </td>
                <td>
                    <input type="submit" style="background-color: #6495ED;" name="submit" value="Tìm kiếm">
                </td>
            </tr>
            <tr>
                <td>Mảng</td>
                <td>
                    <input type=text readonly value="<?php if(isset($mangso)) xuatmang($mangso); ?>">
                </td>
            </tr>
            <tr>
                <td>Kết quả tìm kiếm</td>
                <td>
                    <input type=text style="background-color: bisque; color: red" value="<?php if(isset($so) && isset($mangso)) echo timkiem($mangso,$so); ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2" readonly bgcolor="#1E90FF">(Các phần tử trong mảng sẽ cách nhau dấu ",")</td>
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