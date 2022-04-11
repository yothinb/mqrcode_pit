<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search</title>
    <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
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
    <h1>ค้นหาข้อมูล</h1>

    <form method="get" id="form" enctype="multipart/form-data" action="" >
        <strong>ค้นหาข้อมูล</strong>
        <input type="text" name="search" size="30" value="">
        <input type="submit" value="ค้นหา">
    </form>
    <br>
    <table border="1" >
    <tr>
        <td>รหัสหน่วยงาน</td>
        <td>ชื่อหน่วยงาน</td>
        <td>แก้ไขข้อมูล</td>
    </tr>

    <?php
    $search=isset($_GET['search']) ? $_GET['search']:'';
    $sql="SELECT * FROM mqrcode_division WHERE division_id LIKE'$search%'";
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $row["division_id"];?></td>
                <td><?php echo $row["division_name"];?></td>
                <td><a href="division_add.php?ed=<?php echo $row["division_id"];?>">แก้ไข</a></td>
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
    <a href="division_add.php">กลับหน้าหลัก</a><br>
</body>
</html>
