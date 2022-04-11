<?php
    include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Material</title>
        <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">  
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
    </head>

    <body>
    <?php
    $servername = "db";
    $username = "root";
    $password = "wordpass";
    $dbname = "material_qrcode_db";

    $conndb = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conndb, "set character set utf8");

    $ed=isset($_GET['ed']) ? $_GET['ed']:'';

    if($ed!=''){
        $sql="SELECT * FROM mqrcode_material where material_id='".$ed."'";
        $result =$conndb->query($sql);
        $row=$result->fetch_assoc();
    }
    ?>

    <div class="header">
    <h1>เพิ่มข้อมูลครุภัณฑ์</h1>
    </div>
    <form action="material_process.php" method="post" ed="form">

        <div class="input-group">
        <label>หมายเลขครุภัณฑ์</label>
        <input type="text" name="material_id">
        </div>


        <div class="input-group">
        <label>ชื่อครุภัณฑ์</label>
        <input type="text" name="material_name">
        </div>

        <div class="input-group">
        <label>วันที่ได้มา</label>
        <input type="text" name="material_in">
        </div>

        <div class="input-group">
        <label>รายละเอียด</label>
        <input type="text" name="material_details">
        </div>

        <div class="input-group">
        <label>หมายเลขซีเรียล</label>
        <input type="text" name="material_sn">
        </div>

        <div class="input-group">
        <label>ราคาครุภัณฑ์</label>
        <input type="text" name="material_price">
        </div>

        <div class="input-group">
        <label>สถานที่ตั้ง</label>
        <input type="text" name="material_location">
        </div>

        <div class="input-group">
        <button type="submit" class="btn-success" name="Submit">เพิ่มข้อมูล</button>
        </div>
        <a href="homepage.php" >กลับหน้าหลัก</a><br>
    </form>
    <script src="assets/js/jquery-2.1.4.min.js"></script>  
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
