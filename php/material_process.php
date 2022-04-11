<?php 
    include('dbconnect.php');   
?>

<?php
    $material_id = $_POST['material_id'];
    $material_name = $_POST['material_name'];
    $material_in = $_POST['material_in'];
    $material_details = $_POST['material_details'];
    $material_sn = $_POST['material_sn'];
    $material_price = $_POST['material_price'];
    $material_location = $_POST['material_location'];
    
    mysqli_query($conndb, "INSERT INTO mqrcode_material (material_id, material_name, material_in, material_details, material_sn, material_price, material_location)
                            VALUES('$material_id', '$material_name', '$material_in', '$material_details', '$material_sn', $material_price, '$material_location')");
        
    if (mysqli_affected_rows($conndb) > 0){
        echo '<p>เพิ่มข้อมูลเรียบร้อยแล้ว</p><br>';
        echo '<a href="material_add.php">กลับหน้าเพิ่มข้อมูลครุภัณฑ์</a><br>';
        echo '<a href="material_table.php">ตรวจสอบตารางข้อมูลครุภัณฑ์</a><br>';
    }else{
        echo 'ข้อมูลไม่ครบ';
        echo mysqli_error($conndb);
    }
?>