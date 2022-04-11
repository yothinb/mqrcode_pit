<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Table Division</title>
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
        <h2>ตารางหน่วยงาน</h2>
    </div>
    <br>

    <div class="container">
    <table class="table table-bordered" >
    <thead> 
    <tr>
        <th>รหัสหน่วยงาน</th>
        <th>ชื่อหน่วยงาน</th>
        <th>แก้ไขข้อมูล</th>
    </tr>
    </thead>

    <?php
    $search=isset($_GET['search']) ? $_GET['search']:'';
    $sql="SELECT * FROM mqrcode_division" ;
    $result =$conn->query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){ ?>
            <tbody>
            <tr>
                <td><?php echo $row["division_id"];?></td>
                <td><?php echo $row["division_name"];?></td>
                <td><a href="division_add.php?ed=<?php echo $row["division_id"];?>">แก้ไข</a></td>
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
        <button type="button" class="btn-success" onclick="location.href = 'division_add.php';">เพิ่มข้อมูลหน่วยงาน</button>
        <button type="button" class="btn btn-default" onclick="location.href = 'homepage.php';">กลับหน้าหลัก</button>
    </div>

    <script src="assets/js/jquery-2.1.4.min.js"></script>  
    <script src="assets/js/bootstrap.min.js"></script> 
</body>
</html>
