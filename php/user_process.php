<?php 
    include('dbconnect.php');   
?>

<?php
    error_reporting(0);
    $userid = $_POST['user_id'];
    $username = $_POST['user_username'];
    $password = $_POST['user_password'];
    $firstname = $_POST['user_firstname'];
    $lastname = $_POST['user_lastname'];
    $voip = $_POST['user_voip'];
    $email = $_POST['user_email'];
    $level = $_POST['user_level'];
    $group_id = $_POST['group_id'];
    $division_id = $_POST['division_id'];

    echo "INSERT INTO mqrcode_user (user_id, user_username, user_password, user_firstname, user_lastname, user_voip, user_email,user_level, group_id, division_id)
    VALUES($userid, '$username', '$password', '$firstname', '$lastname', $voip, '$email','$user_level' ,$group_id, $division_id)";

    mysqli_query($conndb, "INSERT INTO mqrcode_user (user_id, user_username, user_password, user_firstname, user_lastname, user_voip, user_email,user_level, group_id, division_id)
                            VALUES($userid, '$username', '$password', '$firstname', '$lastname', $voip, '$email', '$user_level', $group_id, $division_id)");
        
    if (mysqli_affected_rows($conndb) > 0){
        echo '<p>เพิ่มข้อมูลเรียบร้อยแล้ว</p><br>';
        echo '<a href="division_add.php">กลับหน้าหลัก</a><br>';
        echo '<a href="user_table.php">ตรวจสอบ</a><br>';
    }else{
        echo 'Member not added';
        echo mysqli_error($conndb);
    }
?>