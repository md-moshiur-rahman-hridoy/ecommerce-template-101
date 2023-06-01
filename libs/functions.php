<?php
// All functions are here about backend functionality
session_start();

// Include database
include_once "Database.php";
include_once "validation.php";

// Create user function
function createUser($name, $email, $password){
    $name = data_validation($name);
    $email = data_validation($email);
    $email = valid_email($email);
    $password = data_validation($password);
    $password = hash_password($password);

    

    if ($name=="" || $email=="" || $password=="") {
        $_SESSION['uc_alert'] = "<div class='alert-danger'>Fill cannot be empty!</div>";
    }else{
        $query = "INSERT INTO `user` (`id`, `name`, `email`, `phone`, `address`, `profile_pic`, `role`, `password`, `create_date`) VALUES (NULL, '$name', '$email', NULL, '', '', 'customer', '$password', current_timestamp());";
        $result = mysqli_query(dbconn(), $query);
        if ($result) {
            $_SESSION['uc_alert'] = "<div class='alert-success'>User Created Successfully</div>";
        }else{
            $_SESSION['uc_alert'] = "<div class='alert-danger'>User cannot created!</div>";        
        }
    }
    

}