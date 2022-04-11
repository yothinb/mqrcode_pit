<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table Material</title>
    <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
    <meta name="viewport" content="width=device-width,initial-scale=1">  
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
    </head>

    <body>
    <?php
    $servername = "db";
    $username = "root";
    $password = "wordpass";
    $dbname = "material_qrcode_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);


    if ($conn->connect_error){
        die("connection failed : ".$con->connect_error);
    }
    $conn->set_charset("utf8");
    ?>
    
    <br>
    <div class="container">
        <h2>ตารางแสดงครุภัณฑ์</h2>
    </div>
    <br>

    <div class="container">
    <table class="table table-bordered" >
    <thead> 
    <tr>
        <th>รหัสครุภัณฑ์</th>
        <th>ชื่อครุภัณฑ์</th>
        <th>วันที่ได้มา</th>
        <th>รายละเอียด</th>
        <th>หมายเลขซีเรียล</th>
        <th>ราคา</th>
        <th>สถานที่ตั้ง</th>
        <th>ชื่อผู้ใช้งาน</th>
        <th>แก้ไขข้อมูล</th>
        <th>Generate QrCode</th>
    </tr>
    </thead>
    <?php

    $sql="SELECT * FROM mqrcode_material";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            <tbody>
            <tr>
                <td><?php echo $row["material_id"];?></td>
                <td><?php echo $row["material_name"];?></td>
                <td><?php echo $row["material_in"];?></td>
                <td><?php echo $row["material_details"];?></td>
                <td><?php echo $row["material_sn"];?></td>
                <td><?php echo $row["material_price"];?></td>
                <td><?php echo $row["material_location"];?></td>
                <td><?php echo $row["user_id"];?></td>
                <td><a href="edit_material.php?id=<?php echo $row["material_id"];?>">edit</a></td>
                <td><a href="qrcode.html">qrcode</a></td>
            </tr>
            </tbody>
            <?php
        }
        }
        else{
        echo "ไม่มีข้อมูล";
        }

    $conn->close();
   ?>
   </table>
   </div>
   <div class="container">
        <button type="button" class="btn-success" onclick="location.href = 'material_add.php';">เพิ่มข้อมูลครุภัณฑ์</button>
        <button type="button" class="btn-info" onclick="location.href = 'search_material.php';">ค้นหาครุภัณฑ์</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'homepage.php';">กลับหน้าหลัก</button> 
    </div>
    <script src="assets/js/jquery-2.1.4.min.js"></script>  
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>
