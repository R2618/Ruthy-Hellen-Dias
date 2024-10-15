<?php
$hostname = "127.0.0.1";
$user = "root";
$password = "";
$database = "banco_db";

$conn = new mysqli($hostname, $user, $password, $database);

if ($conn->connect_error) {
    echo "Falha ao se conectar com MySQL: " . $conn->connect_error;
    exit();
}