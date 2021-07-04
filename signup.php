<?php
require 'functions.php';

if( isset($_POST["signup"])){

    if(registrasi($_POST) > 0){
        echo "<script>
            alert('registrasi sukses');
            exit;
        </script>;";

        header("Location: login.php");
        exit;
    }else{
        echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style/signup.css">
</head>
<body>
    <div class="container">
        <div class="signup">
         <div class="signup-child">
                <div class="logo">
                <img src="img/logo.jpeg" alt="logo">
                </div>
                <div class="judul">
                    <h2>Sign Up</h2>
                    <h3>Create your account here</h3>
                </div>
                <div class="formulir">
                    <form action="" method="post">
                        <input type="text" name="username" placeholder= "username" id= "username" autofocus = "off" value="">
                        <input type="password" name="password" placeholder="password"  id= "password" autofocus = "off" value="">
                        <input type="password" name="cpassword" placeholder="confirm password" id= "cpassword" autofocus = "off" value="">
                        
                        <div class="btnSignUp">
                            <button type="submit" name="signup" id="signup">SignUp</button>
                        </div>
                    </form>
                </div>
                <div class="btnLogin">
                    <p>have an account? <a href="login.php">Log in</a> here</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/891b41940f.js%22%3E"></script>
</body>
</html>