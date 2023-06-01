<?php

require_once('./config/config.php');

function dbconn(){
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    return $conn;
}
