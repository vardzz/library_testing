<?php
$host = 'db';
$db   = 'library';
$user = 'appuser';
$pass = 'apppass';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    http_response_code(500);
    die("Database connection failed: " . $conn->connect_error);
}
