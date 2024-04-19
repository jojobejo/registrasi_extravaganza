<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'extravaganza_registrasi';

$conn = mysqli_connect($host, $user, $password, $db);
if ($conn) {
  # code...
}
mysqli_select_db($conn, $db);
