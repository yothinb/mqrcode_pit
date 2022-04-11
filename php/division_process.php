<?php 
    include('dbconnect.php'); 
?>

<?php
    error_reporting(0); 
    $divisionid = $_POST['division_id'];
    $divisionname = $_POST['division_name'];

    mysqli_query($conndb, "INSERT INTO mqrcode_division (division_id, division_name)
                            VALUES($divisionid, '$divisionname')");
        
    if (mysqli_affected_rows($conndb) > 0){
        echo '<p>เพิ่มข้อมูลเรียบร้อยแล้ว</p><br>';
        echo '<a href="division_add.php">กลับหน้าหลัก</a><br>';
        echo '<a href="division_table.php">ตรวจสอบในตารางหน่วยงาน</a><br>';
    }else{
        echo 'Member not added';
        echo mysqli_error($conndb);
    }
?>