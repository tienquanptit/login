<?php
//uncheck checkbox
session_destroy();
if (isset($_COOKIE['email']) and isset($_COOKIE['password']) and isset($_COOKIE['checkbox'])) {
    $email = $_COOKIE['email'];
    $password = $_COOKIE['password'];
    $checkbox = $_COOKIE['checkbox'];
    setcookie('email', $email, time() - 60 * 60 * 7);
    setcookie('password', $password, time() - 60 * 60 * 7);
    setcookie('checkbox', $checkbox, time() - 60 * 60 * 7);
}
?>