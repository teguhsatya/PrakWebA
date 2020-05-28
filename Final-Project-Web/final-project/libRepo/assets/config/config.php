<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbName = 'libRepo';

$conn = mysqli_connect($servername, $username, $password, $dbName);
if (!$conn) {
    mysqli_connect_error().die('Errorr connecting to db');
}