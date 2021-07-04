<?php

    session_start();

    if(isset($_SESSION["login"])){
        header("Location: dashboard.php");
        exit;
    }

    require 'functions.php';


    
    if(isset($_POST["login"])){
         
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        //cek username
        if(mysqli_num_rows($result) === 1){

            $row = mysqli_fetch_assoc($result);
            //cek password
            
            if(password_verify($password,$row['password'])){
                
                //set session
                $_SESSION["login"] = true;

                //cek apakah admin atau user
                if($row['username'] === "admin"){
                    $_SESSION["admin"] = true;
                    header("Location: admin.php");
                    exit;
                }
                
                header("Location: dashboard.php");
                exit;
            }
        }

        $error = true;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="container">
        <div class="login">
            <div class="login-child">
                <div class="logo">
                    <img src="img/logo.jpeg" alt="logo">
                </div>
                <div class="judul">
                    <h2>Log In</h2>
                    <h3>Log In to continue</h3>
                </div>
                <div class="formulir">
                    <form action = "" method="post">
                        
                        <?php if(isset($error)):?>
                            <p style="color:red; opacity: 0.5; font-size: 12px; margin-bottom: -12px;">username/password salah</p>
                        <?php endif;?>
                        
                        <input type="text" name="username" placeholder="username"  id = "username" autofocus = "off" value="" autocomplete="off">
                        <input type="password" name="password" placeholder="password" id = "username" autofocus = "off" value="" autocomplete="off">
                        <div class="btnSignUp">
                            <button type="submit" name="login">Login</button>
                        </div>
                    </form>
                </div>
                <div class="btnLogin">
                    <p>doesn't have an account? <a href="signup.php">Sign In</a> here</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/891b41940f.js%22%3E"></script>
</body>
</html>