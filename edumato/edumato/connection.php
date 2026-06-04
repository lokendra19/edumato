<?php
$host = getenv('DB_HOST')     ?: '127.0.0.1';
$user = getenv('DB_USER')     ?: 'root';
$pass = getenv('DB_PASSWORD') ?: '';
$name = getenv('DB_NAME')     ?: 'edumato';
$port = (int)(getenv('DB_PORT') ?: 3307);

$cn = mysqli_connect($host, $user, $pass, $name, $port) or die("connection error");
?>
