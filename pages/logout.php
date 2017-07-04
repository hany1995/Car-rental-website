<?php

session_start();
setcookie(session_name(), '', 100);
session_unset();
session_destroy();
/*if(!session_is_registered('username')){
    $loginmessage='you have been logged out';
    include 'login.php';
    exit();
} 
 *
 */

$_SESSION=array();
include 'login.php';
?>

