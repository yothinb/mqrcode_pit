<?php
    session_start();
    include('server.php');
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $userid = mysqli_real_escape_string($conn, $post['user_id']);
        $username = mysqli_real_escape_string($conn, $post['user_username']);
        $password = mysqli_real_escape_string($conn, $post['user_password']);
        $firstname = mysqli_real_escape_string($conn, $post['user_firstname']);
        $lastname = mysqli_real_escape_string($conn, $post['user_lastname']);
        $voip = mysqli_real_escape_string($conn, $post['user_voip']);
        $email = mysqli_real_escape_string($conn, $post['user_email']);
        $groupid = mysqli_real_escape_string($conn, $post['group_id']);
        $divisionid = mysqli_real_escape_string($conn, $post['division_id']);
       
        if (empty($userid)){
            array_push($error, "UserID is required");
        }

        if (empty($username)){
            array_push($error, "Username is required");
        }

        if (empty($password)){
            array_push($error, "Password is required");
        }

        if (empty($firstname)){
            array_push($error, "Firstname is required");
        }

        if (empty($lastname)){
            array_push($error, "Lastname is required");
        }

        if (empty($voip)){
            array_push($error, "VOIP is required");
        } 

        if (empty($email)){
            array_push($error, "E-mail is required");
        }  

        if (empty($groupid)){
            array_push($error, "GroupID is required");
        } 

        if (empty($divisionid)){
            array_push($error, "DivisionID is required");
        } 

        $user_check_query = "SELECT * FROM mqrcode_user WHERE user_username = '$username' ";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);
    
        if ($result){
            if ($result['user_username'] === $username ) {
                array_push($error, "username already exists");
            }    
        }
            $sql = "INSERT INTO mqrcode_user (user_id, user_username, user_password, 'user_firstname', 'user_lastname', 'user_voip', 'user_email', 'group_id', 'division_id') 
            VALUES ($userid, '$username', '$password', '$firstname', '$lastname', '$voip', '$email', '$groupid', '$divisionid')";
            mysqli_query($conn, $sql);
    
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location index.php');
    }
?>