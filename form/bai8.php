<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
<?php
    include ('../includes/header_menu.php');
?>
<div class="container" style="margin-top:65px">
    <!--breadcrumb start-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="../Form.php">Bài tập Form</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài 8</li>
        </ol>
    </nav>
    <!--breadcrumb end-->
    <hr/>
    <div class="main-content">
        <div class="wrapper">
            <form action="config.php" method="POST" style="border: 1px solid #84817a; width: 70%;">
              <table style="width: 100%;">
                <th colspan="2">Enter your information</th>
                <tr>
                  <td>Full name: </td>
                  <td>
                    <input type="text" name="ten">
                  </td>
                </tr>
                <tr>
                  <td>Address: </td>
                  <td><input type="text" name="diachi"></td>
                </tr>
                <tr>
                  <td>Phone: </td>
                  <td>
                    <input type="text" name="dienthoai">
                  </td>
                </tr>
                <tr>
                  <td>Gender: </td>
                  <td>
                    <input type="radio" name="gioitinh" value="Nam" checked> Nam
                    <input type="radio" name="gioitinh" value="Nu"> Nữ
                  </td>
                </tr>
                <tr>
                  <td>Country: </td>
                  <td>
                    <select name="quocgia">
                      <option value="Việt Nam" selected>Việt Nam</option>
                      <option value="Mỹ">Mỹ</option>
                      <option value="Hàn Quốc">Hàn Quốc</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Study: </td>
                  <td>
                    <input type="checkbox" value="PHP & MySQL" name="hocvan" checked> PHP & MySQL
                    <input type="checkbox" value="ASP.NET" name="hocvan"> ASP.NET
                    <input type="checkbox" value="CCNA" name="hocvan"> CCNA
                    <input type="checkbox" value="Security+" name="hocvan"> Security+
                  </td>
                </tr>
                <tr>
                  <td>Note: </td>
                  <td>
                    <textarea name="note" rows="5"></textarea>
                  </td>
                </tr>
                <tr>
                  <td>     </td>
                  <td>
                    <input type="submit" name="submit" value="Gửi">     
                    <input type="reset" name="reset" value="Hủy">
                  </td>
                </tr>
              </table>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
</html>