<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search User</title>
    <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
    </head>

    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "material_qrcode_db";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn->connect_error){
        die("connection failed : ".$con->connect_error);
    }
    $conn->set_charset("utf8");
    ?>
    <h1>ค้นหาข้อมูล</h1>

    <form method="get" id="form" enctype="multipart/form-data" action="" >
        <strong>ค้นหาข้อมูล</strong>
        <input type="text" name="search" size="30" value="">
        <input type="submit" value="ค้นหา">
    </form>
    <br>
    <table border="1" >
    <tr>
        <td>รหัสกลุ่มผู้ใช้งาน</td>
        <td>ไอดีของผู้ใช้งาน</td>
        <td>รหัสผ่าน</td>
        <td>ชื่อผู้ใช้งาน</td>
        <td>นามสกุล</td>
        <td>เบอร์ติดต่อภายใน</td>
        <td>อีเมล์</td>
        <td>รหัสกลุ่มผู้ใช้งาน</td>
        <td>รหัสหน่วยงาน</td>
    <?php

    $search=isset($_GET['search']) ? $_GET['search']:'';

    $sql="SELECT * FROM mqrcode_user WHERE user_username LIKE'$search%'";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $row["user_id"];?></td>
                <td><?php echo $row["user_username"];?></td>
                <td><?php echo $row["user_password"];?></td>
                <td><?php echo $row["user_firstname"];?></td>
                <td><?php echo $row["user_lastname"];?></td>
                <td><?php echo $row["user_voip"];?></td>
                <td><?php echo $row["user_email"];?></td>
                <td><?php echo $row["group_id"];?></td>
                <td><?php echo $row["division_id"];?></td>
            </tr>
            <?php
        }
        }
        else{
        echo "0 row";
        }

    $conn->close();
   ?>
   </table>
    <a href="user_table.php">กลับหน้าหลัก</a><br>
</body>
</html>
