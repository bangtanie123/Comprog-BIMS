<?php 

$host = "delta.optiklink.com";
$user = "u126067_6YObtWKgqn";
$name = "s126067_student";
$pass = "!yQ4Q2@Da6BB!8VWIhLcKKMw";

$conn = mysqli_connect($host, $user, $pass, $name);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}


?>
