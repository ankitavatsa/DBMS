<?php
session_start();
unset($SESSION['ADMIN_LOGIN']);
unset($SESSION['ADMIN_USERNAME']);
header('location:loginto.php');
die();
?>