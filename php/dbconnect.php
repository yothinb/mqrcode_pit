<?php
    $servername = "db";
    $username = "root";
    $password = "wordpass";
    $dbname = "material_qrcode_db";

    $conndb = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_query($conndb, "set character set utf8");
    error_reporting(E_ALL ^ E_NOTICE);

    if (!$conndb) {
        die("Connection faile" . mysqli_connect_error());
    }
?>
