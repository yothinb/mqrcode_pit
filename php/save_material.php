<html>
<head>
<title>Save Page</title>
<link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
</head>
<body>
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$serverName = "db";
	$userName = "root";
	$userPassword = "wordpass";
	$dbName = "material_qrcode_db";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
  $conn->set_charset("utf8");

	$sql = "UPDATE mqrcode_material SET
			material_id = '".$_POST["material_id"]."' ,
			material_name = '".$_POST["material_name"]."' ,
			material_in = '".$_POST["material_in"]."' ,
			material_details = '".$_POST["material_details"]."' ,
			material_sn = '".$_POST["material_sn"]."',
      material_price = '".$_POST["material_price"]."',
      material_location = '".$_POST["material_location"]."'
			WHERE mqrcode_material.material_id = '".$_POST["material_id"]."' ";

	$query = mysqli_query($conn,$sql);

	if($query) {
   echo '<script>alert("Data update successfully")</script>';
   echo "<script>window.open('search_material.php','_self')</script>";
   // exit(header("Location: search_material.php"));
	}
	mysqli_close($conn);
?>
</body>
</html>
