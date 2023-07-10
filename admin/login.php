<?php
    include "libs/database.php";
    

if (isset($_POST['login_submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    session_start();
    if($email=="" || $password==""){
        $_SESSION['ul_alert'] = "<div class='alert-danger'>Fill cannot be empty!</div>";
    }else{
        $query = "SELECT * FROM `user` WHERE email='$email' AND password='$password' AND role='admin'";

        $result = mysqli_query(dbconn(), $query);
        $row = mysqli_fetch_assoc($result);

        // count data row
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            // $_SESSION['ul_alert'] = "<div class='alert-success'>Login Successfully</div>";

            // Redirect user
            header("Location: ./");
            $_SESSION['auth'] = TRUE;
            $_SESSION['auth-data'] = $row;
        }else{
            $_SESSION['ul_alert'] = "<div class='alert-danger'>Wrong username/password!</div>";        
        }
    }
    
}

?>


    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<section id="login-form">
    <form action="" method="post">
        <h4>Login your account</h4>
        <?php
            if(isset($_SESSION['ul_alert'])){
            echo $_SESSION['ul_alert'];
        }
        ?>
        <label for="">Username/Email</label>
        <input type="email" name="email" id="emailInput" placeholder="Email address"/>
        <label for="">Password</label>
        <input type="password" name="password" id="inputPassword" placeholder="Password">
        <button type="submit" name="login_submit">Login</button>
        </form>
    </section>
</body>
</html>
