<?php
 include "inc/header.php";
 include_once "libs/functions.php";

 if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    createUser($name, $email, $password);
 }
?>

    <section id="login-form">
        <form action="" method="post">
            <h4>Create an account</h4>
            <?php
                if(isset($_SESSION['uc_alert'])){
                    echo $_SESSION['uc_alert'];
                }
            ?>
            <label for="">Full Name</label>
            <input type="text" name="name" id="nameInput" placeholder="Enter your name"/>
            <label for="">Email address</label>
            <input type="email" name="email" id="emailInput" placeholder="Email address"/>
            <label for="">Password</label>
            <input type="password" name="password" id="inputPassword" placeholder="Password">
            <button type="submit" name="submit" type="submit">Create</button>
            <p>If you have a account? <a href="login.php">Login</a></p>
        </form>
    </section>

<?php include "inc/footer.php";?>