<?php

require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = $_ENV['MYSQL_SERVERNAME']; // Server name where the app has the DB
$username = $_ENV['MYSQL_USERNAME']; // user of the DB 
$password = $_ENV['MYSQL_PASSWORD']; // password of the DB
$dbname = $_ENV['MYSQL_DATABASE'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}