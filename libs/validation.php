<?php

// Basic data validation
function data_validation($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Email validation
function valid_email($email){

    // Making Pattern to match  
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  

    // matching email using preg_match 
    if (!preg_match ($pattern, $email) ){  
        $ErrMsg = "Email is not valid.";  
        $_SESSION['email_error'] = $ErrMsg;
        return false;
    } else {  
        return $email;  
    }  
}


// Hashing password with md5()
function hash_password($password){
    $password = md5($password);
    return $password;
}