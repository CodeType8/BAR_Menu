<?php
$servername = "localhost";
$username = "codetype";
$password = "jj2640";
$table = "bar";

// 초기화
$conn = new mysqli($servername, $username, $password, $table);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM item ORDER BY id ASC";
$list = mysqli_query($conn, $query);