<?php
session_start();

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'absensi';
$con = mysqli_connect($host,$user,$password,$db) or die(mysqli_connect_error());

?>
