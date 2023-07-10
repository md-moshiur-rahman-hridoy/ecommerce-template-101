<?php
include 'database.php';

function select($table){
    $query = "SELECT * FROM `$table`";
    $result = mysqli_query(dbconn(), $query);
    return $result;
}
function insertQuery($query){
    $result = mysqli_query(dbconn(), $query);
    if($result){
        return true;
    }else{
        return false;
    }
}
function selectCustomer($table){
    $query = "SELECT * FROM `$table` WHERE role='customer'";
    $result = mysqli_query(dbconn(), $query);
    return $result;
}
function countNumRows($table){
    $query = "SELECT * FROM `$table`";
    $result = mysqli_query(dbconn(), $query);
    $data = mysqli_num_rows($result);
    return $data;
}