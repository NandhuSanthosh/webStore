<?php
ob_start();
include './db.php';
session_start();
//$admin=$_SESSION['admin']['Id'];
unset($_SESSION['User']);
header("location:index.php");
ob_flush();?>