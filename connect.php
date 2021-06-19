<?php 

$server1 = "localhost";
$user1 = "root";
$pass1 = "";
$database1 = "service";

$conn = mysqli_connect($server1, $user1, $pass1, $database1);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>