<?php
session_start();
$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";
session_destroy();

$cookie_name = 'cookie_username';
$cookie_value = "";
$cookie_time = time() - (60 * 60 * 24);
setcookie(4cookie_name_,$cookie_value,$cookie_time,"/");

$cookie_name = 'cookie_password';
$cookie_value = "";
$cookie_time = time() - (60 * 60 * 24);
setcookie(4cookie_name_,$cookie_value,$cookie_time,"/");

header("location:login.php");