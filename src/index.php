<?php
$a = array("a" => "red", "b" => "green", "c" => "black");
session_start();
if(!isset($_SESSION['array'])){
    $_SESSION['array']=$a;
}
echo "<table style='border:2px solid black; padding:5px;margin:2px;font-size:30px; '>";
foreach ($_SESSION['array']as $key => $value) {
    echo "<tr ><td style='border:2px solid black; padding:5px;margin:2px'>$key</td><td style='border:2px solid black;
    padding:5px;margin:2px'>$value</td><td style='border:2px solid black; padding:5px;margin:2px'>
    <a href='edit.php?key=$key'>Edit</a></td><td style='border:2px solid black; padding:5px;margin:2px'
     ><a href='delete.php?key=$key'>Delete</a></td></tr>";
}
?>