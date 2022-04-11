<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table User</title>
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
        <h2>ตารางแสดงผู้ใช้งานระบบ</h2>
    </div>
    <br>

    <div class="container">
    <table class="table table-bordered">
    <thead>
    <tr>
        <th>รหัสกลุ่มผู้ใช้งาน</th>
        <th>ไอดีของผู้ใช้งาน</th>
        <th>รหัสผ่าน</th>
        <th>ชื่อผู้ใช้งาน</th>
        <th>นามสกุล</th>
        <th>เบอร์ติดต่อภายใน</th>
        <th>อีเมล์</th>
        <th>รหัสกลุ่มผู้ใช้งาน</th>
        <th>รหัสหน่วยงาน</th>
    </tr>
    </thead>
    <?php

    $sql="SELECT * FROM mqrcode_user";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            <tbody>
            <tr>
                <td><?php echo $row["user_id"];?></td>
                <td><?php echo $row["user_username"];?></td>
                <td><?php echo $row["user_password"];?></td>
                <td><?php echo $row["user_firstname"];?></td>
                <td><?php echo $row["user_lastname"];?></td>
                <td><?php echo $row["user_voip"];?></td>
                <td><?php echo $row["user_email"];?></td>
                <td><?php echo $row["group_id"];?></td>
                <td><?php echo $row["user_voip"];?></td>
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

   <div class="container">
        <button type="button" class="btn-success" onclick="location.href = 'user_add.php';">เพิ่มข้อมูลผู้ใช้งาน</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'homepage.php';">กลับหน้าหลัก</button>
    </div>

    <script src="assets/js/jquery-2.1.4.min.js"></script>  
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>
