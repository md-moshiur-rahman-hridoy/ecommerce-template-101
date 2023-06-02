<?php
 include "inc/header.php";
 include_once "libs/functions.php";

    if (isset($_POST['login_submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        loginUser($email, $password);
    }
 ?>
    



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
            <p>If you have no account? <a href="signup.php">Sign up</a></p>
        </form>
    </section>


<?php include "inc/footer.php";?>