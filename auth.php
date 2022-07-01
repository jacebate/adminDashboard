<?php
session_start();

if(isset($_SESSION['login']) || (trim($_SESSION['login']) == ''))
{
    header("location: login.php");
    exit();
}
?>