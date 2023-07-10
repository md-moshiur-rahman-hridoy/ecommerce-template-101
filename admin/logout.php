<?php
session_start();
// Logout functions
function logout(){
    session_destroy();
    header("Location: login.php");
}

logout();