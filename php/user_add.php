<?php 
    include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Add User</title>
        <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">  
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
    </head> 

    <body>
    <div class="header">
    <h1>เพิ่มข้อมูลผู้ใช้งาน</h1>
    </div>

    <form action="user_process.php" method="post">
        <div class="input-group">
        <label>UserID</label>
        <input type="text" name="user_id">
        </div>

        <div class="input-group">
        <label>Username</label>
        <input type="text" name="user_username">
        </div>

        <div class="input-group">
        <label>Password</label>
        <input type="password" name="user_password">
        </div>

        <div class="input-group">
        <label>Firstname</label>
        <input type="text" name="user_firstname">
        </div>

        <div class="input-group">
        <label>Lastname</label>
        <input type="text" name="user_lastname">
        </div>

        <div class="input-group">
        <label>VOIP</label>
        <input type="text" name="user_voip">
        </div>

        <div class="input-group">
        <label>Email</label>
        <input type="text" name="user_email">
        </div>

        <div class="input-group">
        <label>Level User</label>
        <select type="text" name="user_level">
            <option value="admin">Admin</option>
            <option value="member">Member</option>
        </select>
        </div>

        <div class="input-group">
        <label>Group ID</label>
        <select type="text" name="group_id">
            <option value="10">10 - ผู้ดูแลระบบ</option>
            <option value="11">11 - ผู้บริหาร</option>
            <option value="12">12 - เจ้าพนักงานพัสดุ</option>
            <option value="13">13 - เจ้าหน้าที่</option>
        </select>
        </div>

        <div class="input-group">
        <label>Division ID</label>
        <select type="text" name="division_id">
            <option value="900">0900 - กรมสารนิเทศ</option>
            <option value="901">0901 - สำนักงานเลขานุการ กรมสารนิเทศ</option>
            <option value="902">0902 - กองการทูตวัฒนธรรม</option>
            <option value="903">0903 - กองการสื่อมวลชน</option>
            <option value="904">0904 - กองประชาสัมพันธ์การทูตสาธารณะ</option>
            <option value="905">0905 - กองประมวลและวิเคราะห์ข่าว</option>
        </select><br>
        </div>

        <div class="input-group">
        <input type="submit" class="btn-success" name="Submit" value="เพิ่มข้อมูล">
        </div>
        <a href="homepage.php" >กลับหน้าหลัก</a><br>

        <script src="assets/js/jquery-2.1.4.min.js"></script>  
        <script src="assets/js/bootstrap.min.js"></script> 
    
    </form>
</body>
</html> 