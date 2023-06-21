<?php
session_start();
unset($_SESSION['array'][$_GET['key']]);
header('location:index.php');