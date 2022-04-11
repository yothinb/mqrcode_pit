<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าลงทะเบียน</title>
    <link rel = "icon" href = "./img/logo-mfa-thaitext-blue.png" type = "image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="header">
        <h2>ลงทะเบียน</h2>
    </div>
    
    <form action="register_db.php" methhod="post">
        <?php include('error.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <h3>
                <?php
                echo $_SESSION['error'];
                unset ($_SESSION['error']);
                ?>
            </h3>
      </div>
             <?php endif ?>
             
        <div class="input-group">
            <label for="userid">User ID</label>
            <input type="text" name="userid">
        </div>
        
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>

        <div class="input-group">
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname">
        </div>

        <div class="input-group">
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname">
        </div>

        <div class="input-group">
            <label for="voip">VOIP</label>
            <input type="text" name="voip">
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>

        <div class="input-group">
            <label for="groupid">Group ID</label>
            <input type="text" name="groupid">
        </div>

        <div class="input-group">
            <label for="divisionid">Division ID</label>
            <input type="text" name="divisionid">
        </div>

        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">Register</button>
        </div>
        <p>เป็นสมาชิกแล้วใช่ไหม ? <a href="login.php">Sing in</a></p>
    </form>
</body>
</html>