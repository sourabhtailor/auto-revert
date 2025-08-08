<?php
// SQLi test variation #1362
$conn = new mysqli("localhost", "root", "", "test_db");
$user = $_GET['user'] ?? '';
$sql = "SELECT * FROM accounts WHERE username = '$user'";
$conn->query($sql);
?>