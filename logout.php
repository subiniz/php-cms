<?php
session_start();
// session_destroy();
// session_unset();
unset($_SESSION['userId']);
unset($_SESSION['userName']);
header('location: login.php');
?>