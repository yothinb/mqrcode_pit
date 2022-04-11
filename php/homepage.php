<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบจัดการครุภัณฑ์ด้วย QR Code</title>
  <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  .brand-logo {
    height: 180px;
    width: 180px;
    background: url("./img/logo-mfa-engtext-blue.png");
    background-position: center;
    background-size: 175px 175px;
    background-repeat: no-repeat;
    margin: auto;
    border-radius: 100%;
    box-sizing: border-box;
    /* box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white; */
  }

  img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  }
  </style>
</head>
<body>
<div class="brand-logo"></div>
<div class="jumbotron text-center" style="margin-bottom:0">
  <h2>ระบบจัดเก็บและค้นหา ครุภัณฑ์ของกรมสารนิเทศ กระทรวงการต่างประเทศ</h2>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="homepage.php">ระบบจัดการครุภัณฑ์ด้วย QR Code</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li class="active"><a href="homepage.php">Home</a></li>
        <li><a href="user_table.php">ข้อมูลผู้ใช้งานในระบบ</a></li>
        <li><a href="division_table.php">ข้อมูลหน่วยงาน</a></li>
        <li><a href="material_table.php">ข้อมูลครุภัณฑ์</a></li>
        <li><a href="search_material.php">ค้นหาข้อมูลครุภัณฑ์</a></li>
        <li><a href="qrcode.html">สร้าง QR Code</a></li>
      </ul>
    </div>
  </div>
</nav>

<img src="./img/cover.jpg" class="img-rounded" style="width:70%" >
<div class="jumbotron text-center" style="margin-bottom:0" >
  	<p>โครงงานนี้เป็นส่วนหนึ่งของการศึกษาตามหลักสูตรวิทยาศาสตรบัณฑิต</p>
	  <p>สาขาวิชาวิศวกรรมซอฟต์แวร์และระบสารสนเทศ คณะวิทยาศาสตร์และเทคโนโลยี สถาบันเทคโนโลยีปทุมวัน ปีการศึกษา 2564</p>
    <p>นายโยธิน บุญหล้า รหัสนักศึกษา 6101011408</p>
  </div>
</body>
</html>
