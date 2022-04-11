<?php
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
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
    background-size: 200px 200px;
    background-repeat: no-repeat;
    margin: auto;
    border-radius: 100%;
    box-sizing: border-box;
    /* box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px white; */
  }
  </style>
<body>
    <div class="brand-logo"></div>
    <div class="header">
        <h2>ระบบจัดการครุภัณฑ์ในองค์กรด้วย QR Code</h2>
    </div>

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>กรุณาลงทะเบียนเพื่อเข้าใช้งานระบบ >> <a href="register.php">Sign Up</a></p>
    </form> 
</body>
</html>