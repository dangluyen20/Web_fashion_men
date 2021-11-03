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
    if(isset($_POST["submit"])){
        $cd=$_POST["cd"];
        $cr=$_POST["cr"];
        if ($cd<$cr || $cd<=0 || $cr<=0) {
            $dt="Nhap lai chieu dai, chieu rong";
        }
        else $dt=$cd*$cr;
    }
    ?>
<!--header ends -->
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Form.php">Bài tập Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 1</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <form method="POST">
        <table  bgcolor="#faebd7" align="center">
            <tr>
                <td colspan="2" bgcolor="orange" align="center">
                    <h2>DIỆN TÍCH HÌNH CHỮ NHẬT</h2>
                </td>
            </tr>
            <tr>
                <td>Chiều dài:</td>
                <td><input type="text" name="cd" value="<?php if (isset($_POST["cd"])) {
                    echo $_POST["cd"];
                }?>"></td>
            </tr>
            <tr>
                <td>Chiều rộng:</td>
                <td><input type="text" name="cr" value="<?php if (isset($_POST["cr"])) {
                    echo $_POST["cr"];
                }?>"></td>
            </tr>
            <tr>
                <td>Diện tích:</td>
                <td><input type="text" name="dt"  readonly value="<?php if (isset($dt)) {
                    echo $dt;
                }?>"
                >
            </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" name="submit" value="Tính">
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