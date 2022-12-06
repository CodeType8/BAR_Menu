<?php
$servername = "localhost";
$username = "codetype";
$password = "123456";
$table = "bar";

// 초기화
$conn = new mysqli($servername, $username, $password, $table);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query_vodka = "SELECT * FROM item WHERE (basetype = 'vodka') ORDER BY id ASC";
$list_vodka = mysqli_query($conn, $query_vodka);

$query_gin = "SELECT * FROM item WHERE (basetype = 'gin') ORDER BY id ASC";
$list_gin = mysqli_query($conn, $query_gin);

$query_rum = "SELECT * FROM item WHERE (basetype = 'rum') ORDER BY id ASC";
$list_rum = mysqli_query($conn, $query_rum);

$query_tequila = "SELECT * FROM item WHERE (basetype = 'tequila') ORDER BY id ASC";
$list_tequila = mysqli_query($conn, $query_tequila);

$query_whiskey = "SELECT * FROM item WHERE (basetype = 'whiskey') ORDER BY id ASC";
$list_whiskey = mysqli_query($conn, $query_whiskey);

$query_liqueur = "SELECT * FROM item WHERE (basetype = 'liqueur') ORDER BY id ASC";
$list_liqueur = mysqli_query($conn, $query_liqueur);

$query_martini = "SELECT * FROM item WHERE (basetype = 'martini') ORDER BY id ASC";
$list_martini = mysqli_query($conn, $query_martini);

$query_non = "SELECT * FROM item WHERE (basetype = 'non') ORDER BY id ASC";
$list_non = mysqli_query($conn, $query_non);
