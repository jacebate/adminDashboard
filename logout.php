<?php
session_start();
require_once('connection.php');
unset($_SESSION['login']);
session_destroy();
header('location:login.php');
?>