<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database_name = 'corona_ms';

//connecting to database
$conn = mysqli_connect($host, $username, $password, $database_name);

//checking database connection
if(mysqli_connect_errno()){
    echo 'There are some errors!' . mysqli_connect_error();
    exit();
    //exits afterwards
}

?>