<?php
session_start();
$_SESSION['array'][$_GET['key']]=$_GET['value'];
header('location:index.php');
