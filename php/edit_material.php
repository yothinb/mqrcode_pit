<html>
<head>
<title>Edit Page</title>
<link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
<meta name="viewport" content="width=device-width,initial-scale=1">  
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<?php
   ini_set('display_errors', 1);
   error_reporting(~0);


   $serverName = "db";
   $userName = "root";
   $userPassword = "wordpass";
   $dbName = "material_qrcode_db";

   $strMaterialID = null;

   if(isset($_GET["material_id"]))
   {
	   $strMaterialID = $_GET["material_id"];
   }

   $serverName = "db";
   $userName = "root";
   $userPassword = "wordpass";
   $dbName = "material_qrcode_db";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   $conn->set_charset("utf8");

   $sql = "SELECT * FROM mqrcode_material WHERE material_id = '".$strMaterialID."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<form action="save_material.php" name="frmAdd" method="post" >
<div class="input-group">
<table>
  <tr>
    <th>material_id</th>
    <td><input name="material_id" value="<?php echo $result["material_id"];?>"><?php echo $result["material_id"];?></td>
    </tr>
  <tr>
    <th>material_name</th>
    <td><input type="text" name="material_name"  value="<?php echo $result["material_name"];?>"></td>
    </tr>
  <tr>
    <th>material_in</th>
    <td><input type="text" name="material_in" value="<?php echo $result["material_in"];?>"></td>
    </tr>
  <tr>
    <th>material_details</th>
    <td><input type="text" name="material_details" value="<?php echo $result["material_details"];?>"></td>
    </tr>
  <tr>
    <th>material_sn</th>
    <td><input type="text" name="material_sn"  value="<?php echo $result["material_sn"];?>"></td>
    </tr>
  <tr>
    <th>material_price</th>
    <td><input type="text" name="material_price"  value="<?php echo $result["material_price"];?>"></td>
    </tr>
  <tr>
    <th>material_location</th>
    <td><input type="text" name="material_location" value="<?php echo $result["material_location"];?>"></td>
    </tr>
  <tr>
    <th>user_id</th>
    <td><input type="text" name="user_id" value="<?php echo $result["user_id"];?>"></td>
    </tr>
  </table>
  </div>
  <input type="submit" name="submit" value="submit">
</form>
<?php
mysqli_close($conn);
?>

<script src="assets/js/jquery-2.1.4.min.js"></script>  
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
