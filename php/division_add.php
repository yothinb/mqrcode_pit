<?php
    include('dbconnect.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add Division</title>
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
        $sql="SELECT * FROM mqrcode_division where division_id='".$ed."'";
        $result =$conndb->query($sql);
        $row=$result->fetch_assoc();
    }
    ?>
    
    <div class="header">
        <h2>Add Division</h2>
    </div>
 
    <form action="division_process.php" method="post" ed="form" >
        <div class="input-group">
        <label>รหัสหน่วยงาน</label>
        <input type="text" name="division_id" >
        </div>

        <div class="input-group">
        <label>ชื่อหน่วยงาน</label>
        <input type="text" name="division_name">
        </div>

        <div class="input-group">
        <input type="submit" class="btn-success" name="Submit" value="เพิ่มข้อมูล">
        </div>
        <a href="homepage.php" >กลับหน้าหลัก</a><br>
    </form>

    <script src="assets/js/jquery-2.1.4.min.js"></script>  
    <script src="assets/js/bootstrap.min.js"></script> 

</body>
</html>
