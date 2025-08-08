<?php
// Simple SQLi test
$conn = new mysqli("localhost", "user", "pass", "test_db");
$id = $_GET['id'] ?? '';
$query = "SELECT * FROM users WHERE id = '$id'";
$result = $conn->query($query);
?>