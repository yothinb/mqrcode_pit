<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table Group</title>
    <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
    <meta name="viewport" content="width=device-width,initial-scale=1">  
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" href="style.css">
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
        <h2>ตารางกลุ่มผู้ใช้งานระบบ</h2>
    </div>
    <br>
    
    <div class="container">
    <table class="table table-bordered" >
    <thead>
    <tr>
        <th>รหัสกลุ่มผู้ใช้งาน</th>
        <th>ชื่อกลุ่มผู้ใช้งาน</th>
    </tr>
    </thead>
    <?php

    $sql="SELECT * FROM mqrcode_group";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            <tbody>
            <tr>
                <td><?php echo $row["group_id"];?></td>
                <td><?php echo $row["group_name"];?></td>
            </tr>
            </tbody>
            <?php
        }
        }
        else{
        echo "0 row";
        }

    $conn->close();
   ?>
   </table>
   </div>
    <a href="division_add.php" >กลับหน้าเพิ่มข้อมูลหน่วยงาน</a><br><br>
    <a href="groub_table.php" >ตารางกลุ่มผู้ใช้งานระบบ - Groub</a><br>
    <a href="division_table.php" >ตารางข้อมูลหน่วยงาน - Division</a><br>
    <a href="user_table.php" >ตารางแสดงผู้ใช้งานระบบ - User</a><br>
    <a href="material_table.php" >ตารางข้อมูลครุภัณฑ์ - Matrerial</a><br>
</body>
</html>
