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
include 'includes/header_menu.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Bài tập Form</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <a href="form/bai1.php" class="dropdown-item">Bài 1</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
            <a href="form/bai2.php" class="dropdown-item">Bài 2</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <a href="form/bai3.php" class="dropdown-item">Bài 3</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <a href="form/bai4.php" class="dropdown-item">Bài 4</a>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-3 col-6 py-3" >
            <div class="card">
                <a href="form/bai5.php" class="dropdown-item">Bài 5</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-3">
            <div class="card">
                <a href="form/bai6.php" class="dropdown-item">Bài 6 + 7</a>
            </div>
        </div>
        <div class="col-md-3 col-6 py-3">
            <div class="card">
                <a href="form/bai8.php" class="dropdown-item">Bài 8</a>
            </div>
        </div>
    </div>
       
</div>
<!--menu list ends-->
<!-- footer-->
<?php include 'includes/footer.php'?>
<!--footer ends-->
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